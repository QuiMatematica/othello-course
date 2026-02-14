<?php

// ===============================
// CONFIGURAZIONE
// ===============================

// Imposta header JSON
header('Content-Type: application/json');

// Permetti solo POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Metodo non consentito']);
    exit;
}

// ===============================
// LETTURA INPUT
// ===============================

$input = file_get_contents('php://input');

if (!$input) {
    http_response_code(400);
    echo json_encode(['error' => 'Nessun dato ricevuto']);
    exit;
}

$data = json_decode($input, true);

if (!$data || !isset($data['endpoint'], $data['keys']['p256dh'], $data['keys']['auth'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Dati subscription non validi']);
    exit;
}

$endpoint = $data['endpoint'];
$p256dh   = $data['keys']['p256dh'];
$auth     = $data['keys']['auth'];

// ===============================
// VALIDAZIONE BASE
// ===============================

if (!filter_var($endpoint, FILTER_VALIDATE_URL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Endpoint non valido']);
    exit;
}

if (strlen($p256dh) < 10 || strlen($auth) < 10) {
    http_response_code(400);
    echo json_encode(['error' => 'Chiavi non valide']);
    exit;
}

// ===============================
// CONNESSIONE DATABASE
// ===============================

require_once __DIR__ . '/../config/database.php'; // PDO $pdo
// Il file database.php deve creare $pdo (PDO connection)

try {

    // Verifica se endpoint già esiste
    $stmt = $pdo->prepare("SELECT id FROM push_subscriptions WHERE endpoint = :endpoint LIMIT 1");
    $stmt->execute(['endpoint' => $endpoint]);
    $existing = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existing) {

        // Aggiorna e riattiva
        $update = $pdo->prepare("
            UPDATE push_subscriptions
            SET p256dh = :p256dh,
                auth = :auth,
                active = 1,
                last_used = NULL
            WHERE id = :id
        ");

        $update->execute([
            'p256dh' => $p256dh,
            'auth'   => $auth,
            'id'     => $existing['id']
        ]);

    } else {

        // Inserimento nuovo
        $insert = $pdo->prepare("
            INSERT INTO push_subscriptions (endpoint, p256dh, auth, active)
            VALUES (:endpoint, :p256dh, :auth, 1)
        ");

        $insert->execute([
            'endpoint' => $endpoint,
            'p256dh'   => $p256dh,
            'auth'     => $auth
        ]);
    }

    echo json_encode(['success' => true]);

} catch (Exception $e) {

    http_response_code(500);
    echo json_encode(['error' => 'Errore server']);
}
