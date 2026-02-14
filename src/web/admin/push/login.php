<?php
session_start();

// ===============================
// HEADERS SICUREZZA
// ===============================
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");

// Se già loggato → vai a dashboard
if (isset($_SESSION['admin_logged']) && $_SESSION['admin_logged'] === true) {
    header("Location: dashboard.php");
    exit;
}

$config = require '/home/tuoaccount/private/admin-config.php';

$error = "";

// ===============================
// GENERAZIONE CSRF TOKEN
// ===============================
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// ===============================
// GESTIONE LOGIN
// ===============================
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['csrf']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf'])) {
        $error = "Sessione non valida. Riprova.";
    } else {

        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        if ($username === $config['username'] &&
            password_verify($password, $config['password_hash'])) {

            $_SESSION['admin_logged'] = true;
            $_SESSION['login_time'] = time();

            // Rigenera session ID (anti session fixation)
            session_regenerate_id(true);

            header("Location: dashboard.php");
            exit;

        } else {
            $error = "Credenziali non valide.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Push - Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light d-flex align-items-center" style="min-height:100vh;">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">

      <div class="card shadow-sm border-0">
        <div class="card-body p-4">

          <h4 class="text-center mb-4 fw-bold">
            🔐 Admin Push
          </h4>

          <?php if ($error): ?>
            <div class="alert alert-danger text-center">
              <?= htmlspecialchars($error) ?>
            </div>
          <?php endif; ?>

          <form method="POST">

            <input type="hidden" name="csrf" value="<?= $_SESSION['csrf_token'] ?>">

            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">
                Accedi
              </button>
            </div>

          </form>

        </div>
      </div>

      <p class="text-center text-muted small mt-3">
        Area riservata
      </p>

    </div>
  </div>
</div>

</body>
</html>
