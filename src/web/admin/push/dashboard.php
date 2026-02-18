<?php
session_start();

// ===============================
// SICUREZZA
// ===============================
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header("Location: login.php");
    exit;
}

header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");

// Timeout sessione (30 minuti)
if (isset($_SESSION['login_time']) && (time() - $_SESSION['login_time']) > 1800) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// Rigenera CSRF
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

// ===============================
// CONNESSIONE DB
// ===============================
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';

// Conta dispositivi
$stmtActive = $pdo->query("SELECT COUNT(*) FROM push_subscriptions WHERE active = 1");
$activeCount = $stmtActive->fetchColumn();

$stmtInactive = $pdo->query("SELECT COUNT(*) FROM push_subscriptions WHERE active = 0");
$inactiveCount = $stmtInactive->fetchColumn();
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Push - Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand">🔔 Push Admin - QuiOthello</span>
    <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
  </div>
</nav>

<div class="container my-5">

  <!-- Statistiche -->
  <div class="row mb-4">
    <div class="col-md-6">
      <div class="card shadow-sm border-0 text-center">
        <div class="card-body">
          <h6 class="text-muted">Dispositivi attivi</h6>
          <h2 class="fw-bold"><?= $activeCount ?></h2>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm border-0 text-center">
        <div class="card-body">
          <h6 class="text-muted">Dispositivi disattivati</h6>
          <h2 class="fw-bold"><?= $inactiveCount ?></h2>
        </div>
      </div>
    </div>
  </div>

  <!-- Form invio -->
  <div class="card shadow-sm border-0">
    <div class="card-body p-4">

      <h5 class="mb-4 fw-bold">Invia nuova notifica</h5>

      <form method="POST" action="send.php">

        <input type="hidden" name="csrf" value="<?= $_SESSION['csrf_token'] ?>">

        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" required maxlength="100">
        </div>

        <div class="mb-3">
          <label class="form-label">Testo</label>
          <textarea name="body" class="form-control" rows="3" required maxlength="200"></textarea>
          <div class="form-text">Massimo 200 caratteri consigliati.</div>
        </div>

        <div class="mb-3">
          <label class="form-label">URL al click</label>
          <input type="url" name="url" class="form-control" required>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary">
            🚀 Invia notifica
          </button>
        </div>

      </form>

    </div>
  </div>

</div>

</body>
</html>
