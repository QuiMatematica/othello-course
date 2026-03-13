<?php
// api/auth/me.php
// Ritorna i dati dell'utente autenticato
// Usato dalla PWA all'avvio per sapere se la sessione è ancora valida
// Metodo: GET

require_once __DIR__ . '/../helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    json_error(405, 'Metodo non consentito');
}

$user = require_auth();

json_success([
    'user' => [
        'id'       => $user['id'],
        'username' => $user['username'],
        'email'    => $user['email'],
    ],
]);
