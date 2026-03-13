<?php
// api/auth/logout.php
// Logout utente
// Metodo: POST
// Body: nessuno (la sessione è nel cookie)

require_once __DIR__ . '/../helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_error(405, 'Metodo non consentito');
}

init_session();

// Distruggi la sessione anche se l'utente non era loggato
// (risposta sempre 200: il client può chiamarlo senza preoccuparsi dello stato)

if (session_status() === PHP_SESSION_ACTIVE) {
    // Svuota i dati di sessione
    $_SESSION = [];

    // Elimina il cookie di sessione dal browser
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 3600,
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );

    session_destroy();
}

json_success(['message' => 'Logout effettuato']);
