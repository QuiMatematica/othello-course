<?php
$config = require __DIR__ . '/../config/push-config.php';

header('Content-Type: application/json');
echo json_encode([
    'publicKey' => $config['publicKey']
]);
