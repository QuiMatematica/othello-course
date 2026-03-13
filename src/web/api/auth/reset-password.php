<?php
// api/auth/reset-password.php
// Reset password tramite token ricevuto via email
// Metodo: POST
// Body JSON: { "token": "...", "new_password": "..." }

require_once __DIR__ . '/../helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_error(405, 'Metodo non consentito');
}

$body         = get_json_body();
$token_raw    = field($body, 'token');
$new_password = field($body, 'new_password');

if (!$token_raw || strlen($token_raw) !== 64) {
    json_error(400, 'Token non valido');
}

if (!validate_password($new_password)) {
    json_error(400, 'La password deve avere almeno 8 caratteri, una lettera e un numero');
}

$token_hash = hash('sha256', $token_raw);
//$pdo        = db();

// --- Cerca il token valido (non scaduto, non usato) ---
$stmt = $pdo->prepare(
    'SELECT t.id AS token_id, t.user_id, u.email
     FROM password_reset_tokens t
     JOIN users u ON u.id = t.user_id
     WHERE t.token_hash = ?
       AND t.used      = 0
       AND t.expires_at > NOW()
     LIMIT 1'
);
$stmt->execute([$token_hash]);
$row = $stmt->fetch();

if (!$row) {
    json_error(400, 'Token non valido, scaduto o già utilizzato');
}

// --- Aggiorna la password ---
$new_hash = password_hash($new_password, PASSWORD_BCRYPT, ['cost' => 12]);
$pdo->prepare('UPDATE users SET password_hash = ? WHERE id = ?')
    ->execute([$new_hash, $row['user_id']]);

// --- Segna il token come usato ---
$pdo->prepare('UPDATE password_reset_tokens SET used = 1 WHERE id = ?')
    ->execute([$row['token_id']]);

// --- Resetta eventuali blocchi sull'account ---
reset_failed_attempts($row['user_id']);

json_success(['message' => 'Password reimpostata con successo. Puoi ora effettuare il login.']);
