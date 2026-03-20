<?php
// cron/cleanup.php
// Proteggi l'accesso: questo file non deve essere chiamabile dal browser

$allowed_ips = ['127.0.0.1', '::1'];
if (!in_array($_SERVER['REMOTE_ADDR'] ?? '', $allowed_ips, true)
    && php_sapi_name() !== 'cli') {
    http_response_code(403);
    exit;
}

require_once __DIR__ . '/../config/db.php';

$pdo = db();

// Pulizia token reset scaduti o già usati
$stmt = $pdo->query(
    'DELETE FROM password_reset_tokens
     WHERE expires_at < NOW() OR used = 1'
);
$deleted_tokens = $stmt->rowCount();

// Pulizia sessioni scadute (se usi la tabella user_sessions)
$stmt = $pdo->query(
    'DELETE FROM user_sessions WHERE expires_at < NOW()'
);
$deleted_sessions = $stmt->rowCount();

echo date('Y-m-d H:i:s')
    . " — Token eliminati: $deleted_tokens"
    . ", Sessioni eliminate: $deleted_sessions\n";
