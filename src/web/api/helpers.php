<?php
// api/helpers.php
// Funzioni condivise da tutti gli endpoint

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/cors.php';

function db(): PDO {
    global $pdo;
    if (!$pdo instanceof PDO) {
        json_error(500, 'Errore di connessione al database');
    }
    return $pdo;
}

// ---------------------------------------------------------------
// Configurazione sessione sicura — va chiamata PRIMA di session_start()
// ---------------------------------------------------------------
function init_session(): void {
    if (session_status() === PHP_SESSION_ACTIVE) return;

    session_set_cookie_params([
        'lifetime' => 0,                   // cookie di sessione (sparisce alla chiusura del browser)
        'path'     => '/',
        'domain'   => '.quiothello.it',    // copre sia quiothello.it che bb.quiothello.it
        'secure'   => true,                // solo HTTPS
        'httponly' => true,                // non accessibile da JavaScript
        'samesite' => 'None',              // necessario per chiamate cross-origin con credentials
    ]);

    session_start();
}

// ---------------------------------------------------------------
// Risposta JSON
// ---------------------------------------------------------------
function json_response(array $data, int $status = 200): never {
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}

function json_error(int $status, string $message): never {
    json_response(['success' => false, 'error' => $message], $status);
}

function json_success(array $data = [], int $status = 200): never {
    json_response(array_merge(['success' => true], $data), $status);
}

// ---------------------------------------------------------------
// Input
// ---------------------------------------------------------------

// Legge il body JSON della richiesta e restituisce un array
function get_json_body(): array {
    $raw = file_get_contents('php://input');
    if (empty($raw)) return [];
    $data = json_decode($raw, true);
    return is_array($data) ? $data : [];
}

// Restituisce un campo stringa dal body, trimmed
function field(array $body, string $key): string {
    return trim($body[$key] ?? '');
}

// ---------------------------------------------------------------
// Validazione
// ---------------------------------------------------------------
function validate_email(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false
        && strlen($email) <= 255;
}

function validate_password(string $password): bool {
    // Minimo 8 caratteri, almeno una lettera e un numero
    return strlen($password) >= 8
        && preg_match('/[a-zA-Z]/', $password)
        && preg_match('/[0-9]/', $password);
}

function validate_username(string $username): bool {
    // 3-50 caratteri, solo lettere, numeri, underscore e trattino
    return (bool) preg_match('/^[a-zA-Z0-9_\-]{3,50}$/', $username);
}

// ---------------------------------------------------------------
// Sessione / autenticazione
// ---------------------------------------------------------------

// Ritorna l'utente in sessione o termina con 401
function require_auth(): array {
    init_session();

    if (empty($_SESSION['user_id'])) {
        json_error(401, 'Non autenticato');
    }

    // Verifica che l'utente esista ancora e sia attivo
    $stmt = $pdo->prepare(
        'SELECT id, username, email, is_active FROM users WHERE id = ? LIMIT 1'
    );
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();

    if (!$user || !$user['is_active']) {
        session_destroy();
        json_error(401, 'Sessione non valida');
    }

    return $user;
}

// ---------------------------------------------------------------
// Rate limiting / brute-force
// ---------------------------------------------------------------
define('MAX_FAILED_ATTEMPTS', 5);
define('LOCKOUT_MINUTES', 15);

function check_account_lock(array $user): void {
    if ($user['locked_until'] && strtotime($user['locked_until']) > time()) {
        $minutes = ceil((strtotime($user['locked_until']) - time()) / 60);
        json_error(429, "Account bloccato. Riprova tra {$minutes} minuti.");
    }
}

function record_failed_attempt(int $user_id): void {
    $pdo = db();

    $stmt = $pdo->prepare('SELECT failed_attempts FROM users WHERE id = ?');
    $stmt->execute([$user_id]);
    $row = $stmt->fetch();

    $attempts = ($row['failed_attempts'] ?? 0) + 1;

    if ($attempts >= MAX_FAILED_ATTEMPTS) {
        $locked_until = date('Y-m-d H:i:s', strtotime('+' . LOCKOUT_MINUTES . ' minutes'));
        $pdo->prepare(
            'UPDATE users SET failed_attempts = ?, locked_until = ? WHERE id = ?'
        )->execute([$attempts, $locked_until, $user_id]);
    } else {
        $pdo->prepare(
            'UPDATE users SET failed_attempts = ? WHERE id = ?'
        )->execute([$attempts, $user_id]);
    }
}

function reset_failed_attempts(int $user_id): void {
    $pdo->prepare(
        'UPDATE users SET failed_attempts = 0, locked_until = NULL WHERE id = ?'
    )->execute([$user_id]);
}

// ---------------------------------------------------------------
// Token sicuri (reset password, verifica email)
// ---------------------------------------------------------------

// Genera un token raw casuale (32 byte → 64 hex chars) e il suo hash SHA-256
function generate_token(): array {
    $raw  = bin2hex(random_bytes(32));          // 64 caratteri hex, inviato via email/link
    $hash = hash('sha256', $raw);              // salvato in DB
    return ['raw' => $raw, 'hash' => $hash];
}

// ---------------------------------------------------------------
// Email (PHPMailer — assicurati di averlo installato via Composer)
// ---------------------------------------------------------------

// Decommentare e adattare se si usa PHPMailer
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require_once __DIR__ . '/../vendor/autoload.php';

function send_email(string $to, string $subject, string $html_body): bool {
    // --- Versione con mail() nativa (funziona su SiteGround ma deliverability limitata) ---
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "From: noreply@quiothello.it\r\n";
    $headers .= "Reply-To: noreply@quiothello.it\r\n";

    return mail($to, $subject, $html_body, $headers);

    // --- Versione con PHPMailer (consigliata — sostituisci il blocco sopra) ---
    // $mail = new PHPMailer(true);
    // try {
    //     $mail->isSMTP();
    //     $mail->Host       = 'mail.quiothello.it';  // SMTP SiteGround
    //     $mail->SMTPAuth   = true;
    //     $mail->Username   = 'noreply@quiothello.it';
    //     $mail->Password   = 'password_casella_email';
    //     $mail->SMTPSecure = 'tls';
    //     $mail->Port       = 587;
    //     $mail->CharSet    = 'UTF-8';
    //     $mail->setFrom('noreply@quiothello.it', 'Qui Othello');
    //     $mail->addAddress($to);
    //     $mail->isHTML(true);
    //     $mail->Subject = $subject;
    //     $mail->Body    = $html_body;
    //     $mail->send();
    //     return true;
    // } catch (Exception $e) {
    //     error_log('Mailer error: ' . $mail->ErrorInfo);
    //     return false;
    // }
}
