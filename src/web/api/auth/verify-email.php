<?php
// api/auth/verify-email.php
// Verifica indirizzo email tramite token ricevuto via email
// Metodo: GET
// Query string: ?token=<raw_token>

require_once __DIR__ . '/../helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    json_error(405, 'Metodo non consentito');
}

$token_raw = trim($_GET['token'] ?? '');

if (!$token_raw || strlen($token_raw) !== 64) {
    json_error(400, 'Token non valido');
}

$token_hash = hash('sha256', $token_raw);

//$pdo  = db();
$stmt = $pdo->prepare(
    'SELECT id, is_verified FROM users WHERE verify_token = ? LIMIT 1'
);
$stmt->execute([$token_hash]);
$user = $stmt->fetch();

if (!$user) {
    json_error(400, 'Token non valido o già utilizzato');
}

if ($user['is_verified']) {
    json_success(['message' => 'Account già verificato']);
}

// Verifica l'account e rimuove il token
$pdo->prepare(
    'UPDATE users SET is_verified = 1, verify_token = NULL WHERE id = ?'
)->execute([$user['id']]);

json_success(['message' => 'Email verificata. Puoi ora effettuare il login.']);
