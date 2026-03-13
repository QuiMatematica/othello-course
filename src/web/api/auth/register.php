<?php
// api/auth/register.php
// Registrazione nuovo utente
// Metodo: POST
// Body JSON: { "username": "...", "email": "...", "password": "..." }

require_once __DIR__ . '/../helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_error(405, 'Metodo non consentito');
}

init_session();

// --- 1. Leggi e valida l'input ---
$body    = get_json_body();
$username = field($body, 'username');
$email    = field($body, 'email');
$password = field($body, 'password');

if (!$username || !$email || !$password) {
    json_error(400, 'Tutti i campi sono obbligatori');
}

if (!validate_username($username)) {
    json_error(400, 'Username non valido (3-50 caratteri, solo lettere, numeri, _ e -)');
}

if (!validate_email($email)) {
    json_error(400, 'Indirizzo email non valido');
}

if (!validate_password($password)) {
    json_error(400, 'La password deve avere almeno 8 caratteri, una lettera e un numero');
}

// --- 2. Verifica unicità email e username ---
//$pdo = db();

$stmt = $pdo->prepare(
    'SELECT id FROM users WHERE email = ? OR username = ? LIMIT 1'
);
$stmt->execute([$email, $username]);

if ($stmt->fetch()) {
    // Messaggio volutamente generico per non rivelare quale campo è duplicato
    json_error(409, 'Email o username già in uso');
}

// --- 3. Hash della password ---
$hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

// --- 4. Genera token di verifica email ---
$token          = generate_token();
$verify_token   = $token['raw'];
$verify_hash    = $token['hash'];
// In DB salviamo solo l'hash; il raw viene inviato via email
// Se non vuoi la verifica email, imposta is_verified = 1 e verify_token = NULL

// --- 5. Inserisci l'utente ---
$stmt = $pdo->prepare(
    'INSERT INTO users (username, email, password_hash, is_verified, verify_token)
     VALUES (?, ?, ?, 0, ?)'
);
$stmt->execute([$username, $email, $hash, $verify_hash]);
$user_id = (int) $pdo->lastInsertId();

// --- 6. Invia email di verifica ---
$verify_url = "https://quiothello.it/verify-email?token={$verify_token}";
$html = "
<p>Ciao <strong>{$username}</strong>,</p>
<p>Grazie per esserti registrato. Clicca il link qui sotto per verificare il tuo account:</p>
<p><a href=\"{$verify_url}\">{$verify_url}</a></p>
<p>Il link è valido per 24 ore.</p>
";
send_email($email, 'Verifica il tuo account - Qui Othello', $html);

// --- 7. Risposta ---
// Non avviamo la sessione qui: l'utente deve prima verificare l'email
json_success([
    'message' => 'Registrazione completata. Controlla la tua email per verificare l\'account.',
], 201);
