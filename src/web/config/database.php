<?php
require __DIR__ . '/../../config/secrets.php';

$pdo = new PDO(
    "mysql:host=localhost;dbname={$DB['name']};charset=utf8mb4",
    $DB['user'],
    $DB['pass'],
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);
