<?php
// api/auth/login.php
// Login utente
// Metodo: POST
// Body JSON: { "email": "...", "password": "..." }

require_once __DIR__ . '/../helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_error(405, 'Metodo non consentito');
}

init_session();

// Se già loggato, ritorna i dati dell'utente corrente
if (!empty($_SESSION['user_id'])) {
    json_success(['message' => 'Già autenticato', 'user_id' => $_SESSION['user_id']]);
}

// --- 1. Input ---
$body     = get_json_body();
$email    = field($body, 'email');
$password = field($body, 'password');

if (!$email || !$password) {
    json_error(400, 'Email e password sono obbligatori');
}

// --- 2. Cerca l'utente ---
$pdo  = db();
$stmt = $pdo->prepare(
    'SELECT id, username, email, password_hash, is_verified, is_active,
            failed_attempts, locked_until
     FROM users WHERE email = ? LIMIT 1'
);
$stmt->execute([$email]);
$user = $stmt->fetch();

// Messaggio generico: non rivela se l'email esiste o meno
$generic_error = 'Credenziali non valide';

if (!$user) {
    // Eseguiamo comunque un hash fittizio per rendere il timing uniforme
    // e non rivelare che l'email non esiste tramite differenza di tempo
    password_verify($password, '$2y$12$invalidhashfortimingnormalization');
    json_error(401, $generic_error);
}

// --- 3. Verifica blocco account ---
check_account_lock($user);

// --- 4. Verifica account attivo ---
if (!$user['is_active']) {
    json_error(403, 'Account disabilitato. Contatta il supporto.');
}

// --- 5. Verifica email confermata ---
if (!$user['is_verified']) {
    json_error(403, 'Email non verificata. Controlla la tua casella di posta.');
}

// --- 6. Verifica password ---
if (!password_verify($password, $user['password_hash'])) {
    record_failed_attempt($user['id']);
    json_error(401, $generic_error);
}

// --- 7. Aggiorna hash se necessario (PHP aggiorna il cost automaticamente) ---
if (password_needs_rehash($user['password_hash'], PASSWORD_BCRYPT, ['cost' => 12])) {
    $new_hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
    $pdo->prepare('UPDATE users SET password_hash = ? WHERE id = ?')
        ->execute([$new_hash, $user['id']]);
}

// --- 8. Reset tentativi falliti e aggiorna last_login ---
reset_failed_attempts($user['id']);
$pdo->prepare('UPDATE users SET last_login = NOW() WHERE id = ?')
    ->execute([$user['id']]);

// --- 9. Avvia sessione ---
// Rigenera l'ID di sessione per prevenire session fixation
session_regenerate_id(true);

$_SESSION['user_id']  = $user['id'];
$_SESSION['username'] = $user['username'];
$_SESSION['email']    = $user['email'];

// --- 10. Risposta ---
json_success([
    'user' => [
        'id'       => $user['id'],
        'username' => $user['username'],
        'email'    => $user['email'],
    ],
]);
