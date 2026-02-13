<?php
require __DIR__ . '/../config/database.php'; // PDO $pdo

$data = json_decode(file_get_contents('php://input'), true);

if (empty($data['device_id'])) {
    http_response_code(400);
    exit;
}

$deviceId = $data['device_id'];
$type = $data['type'] ?? 'visit';
$platform = $data['platform'] ?? null;
$userAgent = substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 255);

$stmt = $pdo->prepare("
    INSERT INTO pwa_devices (device_id, first_install, last_seen, platform, user_agent)
    VALUES (:device_id, NOW(), NOW(), :platform, :ua)
    ON DUPLICATE KEY UPDATE
        last_seen = NOW(),
        install_count = install_count + IF(:type = 'install', 1, 0)
");

$stmt->execute([
    ':device_id' => $deviceId,
    ':platform'  => $platform,
    ':ua'        => $userAgent,
    ':type'      => $type
]);
