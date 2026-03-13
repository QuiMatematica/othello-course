<?php
// api/auth/change-password.php
// Cambio password (utente autenticato)
// Metodo: POST
// Body JSON: { "current_password": "...", "new_password": "..." }

require_once __DIR__ . '/../helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_error(405, 'Metodo non consentito');
}

// Richiede sessione attiva
$user = require_auth();

// --- 1. Input ---
$body             = get_json_body();
$current_password = field($body, 'current_password');
$new_password     = field($body, 'new_password');

if (!$current_password || !$new_password) {
    json_error(400, 'Tutti i campi sono obbligatori');
}

if (!validate_password($new_password)) {
    json_error(400, 'La nuova password deve avere almeno 8 caratteri, una lettera e un numero');
}

if ($current_password === $new_password) {
    json_error(400, 'La nuova password deve essere diversa da quella attuale');
}

// --- 2. Recupera hash attuale ---
$pdo  = db();
$stmt = $pdo->prepare('SELECT password_hash FROM users WHERE id = ? LIMIT 1');
$stmt->execute([$user['id']]);
$row  = $stmt->fetch();

// --- 3. Verifica password corrente ---
if (!$row || !password_verify($current_password, $row['password_hash'])) {
    json_error(401, 'Password attuale non corretta');
}

// --- 4. Aggiorna con nuovo hash ---
$new_hash = password_hash($new_password, PASSWORD_BCRYPT, ['cost' => 12]);
$pdo->prepare('UPDATE users SET password_hash = ? WHERE id = ?')
    ->execute([$new_hash, $user['id']]);

json_success(['message' => 'Password aggiornata con successo']);
