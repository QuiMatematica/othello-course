<?php
require __DIR__ . '/../config/database.php';

$migrationDir = __DIR__ . '/migrations';
$files = glob($migrationDir . '/*.sql');
sort($files);

foreach ($files as $file) {
    echo "Applying " . basename($file) . PHP_EOL;
    $sql = file_get_contents($file);
    $pdo->exec($sql);
}

echo "Database ready.\n";
