<?php
function get_allowed_origins(): array {
    $host = $_SERVER['HTTP_HOST'] ?? '';

    // Ambiente di test
    if (str_contains($host, 'test.quiothello.it')) {
        return [
            'https://test.quiothello.it',
            'https://bbtest.quiothello.it',
        ];
    }

    // Produzione (default)
    return [
        'https://quiothello.it',
        'https://bb.quiothello.it',
    ];
}

$allowed_origins = get_allowed_origins();

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';

if (in_array($origin, $allowed_origins)) {
    header("Access-Control-Allow-Origin: $origin");
    header("Access-Control-Allow-Credentials: true");  // necessario per i cookie di sessione
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, X-Requested-With");
    header("Vary: Origin");
}

// Preflight request (browser la invia prima della chiamata reale)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}