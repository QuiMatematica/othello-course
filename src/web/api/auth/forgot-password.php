<?php
// api/auth/forgot-password.php
// Richiesta recupero password: invia email con link di reset
// Metodo: POST
// Body JSON: { "email": "..." }

require_once __DIR__ . '/../helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_error(405, 'Metodo non consentito');
}

$body  = get_json_body();
$email = field($body, 'email');

if (!$email || !validate_email($email)) {
    json_error(400, 'Inserisci un indirizzo email valido');
}

$pdo  = db();
$stmt = $pdo->prepare(
    'SELECT id, username, is_active FROM users WHERE email = ? LIMIT 1'
);
$stmt->execute([$email]);
$user = $stmt->fetch();

// IMPORTANTE: rispondi sempre con successo, anche se l'email non esiste.
// Rivelare "email non trovata" consente l'enumerazione degli utenti.
$generic_ok = ['message' => 'Se l\'email è registrata, riceverai le istruzioni per il reset.'];

if (!$user || !$user['is_active']) {
    json_success($generic_ok);
}

// --- Invalida token precedenti ancora attivi per questo utente ---
$pdo->prepare(
    'UPDATE password_reset_tokens SET used = 1
     WHERE user_id = ? AND used = 0 AND expires_at > NOW()'
)->execute([$user['id']]);

// --- Genera nuovo token ---
$token      = generate_token();
$expires_at = date('Y-m-d H:i:s', strtotime('+1 hour'));

$pdo->prepare(
    'INSERT INTO password_reset_tokens (user_id, token_hash, expires_at)
     VALUES (?, ?, ?)'
)->execute([$user['id'], $token['hash'], $expires_at]);

// --- Invia email ---
$host = $_SERVER['HTTP_HOST'];
$reset_url = "https://{$host}/reset-password?token={$token['raw']}";
$html = "
<p>Ciao <strong>{$user['username']}</strong>,</p>
<p>Abbiamo ricevuto una richiesta di reimpostazione della password per il tuo account.</p>
<p>Clicca il link qui sotto per impostare una nuova password:</p>
<p><a href=\"{$reset_url}\">{$reset_url}</a></p>
<p>Il link è valido per <strong>1 ora</strong>.</p>
<p>Se non hai richiesto il reset, ignora questa email: il tuo account è al sicuro.</p>
";

send_email($email, 'Recupero password - Qui Othello', $html);

json_success($generic_ok);
