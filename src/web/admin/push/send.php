<?php
session_start();

// ===============================
// SICUREZZA ACCESSO
// ===============================
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit("Metodo non consentito.");
}

header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");

// Timeout sessione (30 min)
if (isset($_SESSION['login_time']) && (time() - $_SESSION['login_time']) > 1800) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// ===============================
// CSRF
// ===============================
if (!isset($_POST['csrf']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf'])) {
    exit("Token CSRF non valido.");
}

// ===============================
// VALIDAZIONE INPUT
// ===============================
$title = trim($_POST['title'] ?? '');
$body  = trim($_POST['body'] ?? '');
$url   = trim($_POST['url'] ?? '');

if (!$title || !$body || !$url) {
    exit("Campi mancanti.");
}

if (!filter_var($url, FILTER_VALIDATE_URL)) {
    exit("URL non valido.");
}

// ===============================
// CARICAMENTO LIBRERIE
// ===============================
require_once __DIR__ . '/../../vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

$config = require '/home/tuoaccount/private/push-config.php';

use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;

// ===============================
// PREPARAZIONE PAYLOAD
// ===============================
$payload = json_encode([
    'title' => $title,
    'body'  => $body,
    'url'   => $url
]);

$auth = [
    'VAPID' => [
        'subject' => $config['subject'],
        'publicKey' => $config['publicKey'],
        'privateKey' => $config['privateKey'],
    ],
];

$webPush = new WebPush($auth);

// ===============================
// RECUPERO SUBSCRIPTIONS
// ===============================
$stmt = $pdo->query("SELECT * FROM push_subscriptions WHERE active = 1");

$total = 0;
$success = 0;
$failed = 0;

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $subscription = Subscription::create([
        'endpoint' => $row['endpoint'],
        'publicKey' => $row['p256dh'],
        'authToken' => $row['auth'],
    ]);

    $webPush->queueNotification($subscription, $payload);
    $total++;
}

// ===============================
// INVIO
// ===============================
foreach ($webPush->flush() as $report) {

    $endpoint = (string) $report->getRequest()->getUri();

    if ($report->isSuccess()) {

        $update = $pdo->prepare("
            UPDATE push_subscriptions
            SET last_used = NOW()
            WHERE endpoint = :endpoint
        ");
        $update->execute(['endpoint' => $endpoint]);

        $success++;

    } else {

        $failed++;

        $statusCode = $report->getResponse()->getStatusCode();

        if (in_array($statusCode, [404, 410])) {

            $deactivate = $pdo->prepare("
                UPDATE push_subscriptions
                SET active = 0
                WHERE endpoint = :endpoint
            ");
            $deactivate->execute(['endpoint' => $endpoint]);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Invio completato</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container my-5">
  <div class="card shadow-sm border-0">
    <div class="card-body text-center p-5">

      <h4 class="fw-bold mb-4">📡 Invio completato</h4>

      <div class="row mb-4">
        <div class="col-md-4">
          <h6 class="text-muted">Totale dispositivi</h6>
          <h3><?= $total ?></h3>
        </div>

        <div class="col-md-4">
          <h6 class="text-success">Inviate con successo</h6>
          <h3><?= $success ?></h3>
        </div>

        <div class="col-md-4">
          <h6 class="text-danger">Fallite</h6>
          <h3><?= $failed ?></h3>
        </div>
      </div>

      <a href="dashboard.php" class="btn btn-primary">
        ← Torna alla dashboard
      </a>

    </div>
  </div>
</div>

</body>
</html>
