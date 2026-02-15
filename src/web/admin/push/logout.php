<?php
session_start();

// Svuota tutte le variabili di sessione
$_SESSION = [];

// Cancella cookie di sessione
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Distrugge la sessione
session_destroy();

// Redirect al login
header("Location: login.php");
exit;
