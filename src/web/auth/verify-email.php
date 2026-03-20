<!DOCTYPE html>
<?php
$host = $_SERVER['HTTP_HOST'];
$isLocalhost = str_contains($host, 'localhost');
$isTest = str_contains($host, 'test');
$isProd = !$isTest && !$isLocalhost;
$root = $isLocalhost ? '/othello-course/dist/' : '/';
$assets = require __DIR__ . '/../assets.php';
?>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verifica email — Qui Othello</title>
  <link rel="icon" href="../icons/icon-192.png">
  <link rel="stylesheet" href="auth.css">
    <link rel="stylesheet" href="<?= $root ?>assets/bootstrap-icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../<?= $assets['main.css'] ?>">
</head>
<body>

<div class="auth-page">

  <header class="auth-header">
    <a href="/" class="auth-logo">
      <img src="../icons/icon-192.png" alt="Qui Othello">
      <span class="auth-logo-name">Qui Othello</span>
    </a>
  </header>

  <div class="auth-card">

    <!-- Stato: caricamento -->
    <div id="state-loading" style="text-align:center; padding:.5rem 0;">
      <div style="
        width: 32px; height: 32px;
        border: 2px solid #3a3a3a;
        border-top-color: #e8e4dc;
        border-radius: 50%;
        animation: spin .7s linear infinite;
        margin: 0 auto 1rem;
      "></div>
      <p style="color:var(--text-muted); font-size:.9rem;">Verifica in corso…</p>
    </div>

    <!-- Stato: successo -->
    <div id="state-success" style="display:none; text-align:center;">
      <div style="font-size:2.5rem; margin-bottom:1rem; line-height:1;">⚫</div>
      <h1 class="auth-card-title" style="text-align:center; border:none; padding:0; margin-bottom:.75rem;">
        Email verificata!
      </h1>
      <p style="font-size:.9rem; color:var(--text-muted); margin-bottom:1.75rem;">
        Il tuo account è attivo.<br>Ora puoi accedere a Qui Othello.
      </p>
      <a href="login.php" class="btn btn-primary"
         style="display:inline-flex; width:auto; padding:.7rem 2rem;">
        Accedi
      </a>
    </div>

    <!-- Stato: token non valido / scaduto -->
    <div id="state-invalid" style="display:none; text-align:center;">
      <div style="font-size:2.5rem; margin-bottom:1rem; line-height:1;">⚪</div>
      <h1 class="auth-card-title" style="text-align:center; border:none; padding:0; margin-bottom:.75rem;">
        Link non valido
      </h1>
      <p id="error-message" style="font-size:.9rem; color:var(--text-muted); margin-bottom:1.75rem;">
        Il link di verifica non è valido o è già stato utilizzato.
      </p>
      <a href="register.php" class="btn btn-primary"
         style="display:inline-flex; width:auto; padding:.7rem 2rem;">
        Torna alla registrazione
      </a>
    </div>

    <!-- Stato: token mancante nell'URL -->
    <div id="state-missing" style="display:none; text-align:center;">
      <div style="font-size:2.5rem; margin-bottom:1rem; line-height:1;">⚪</div>
      <h1 class="auth-card-title" style="text-align:center; border:none; padding:0; margin-bottom:.75rem;">
        Link mancante
      </h1>
      <p style="font-size:.9rem; color:var(--text-muted); margin-bottom:1.75rem;">
        Questa pagina deve essere aperta tramite il link ricevuto via email.
      </p>
      <a href="register.php" class="btn btn-primary"
         style="display:inline-flex; width:auto; padding:.7rem 2rem;">
        Torna alla registrazione
      </a>
    </div>

  </div>

</div>

<style>
@keyframes spin { to { transform: rotate(360deg); } }
</style>

<script type="module">
  import { verifyEmail } from './auth.js';

  const params   = new URLSearchParams(window.location.search);
  const token    = params.get('token') ?? '';

  function show(id) {
    ['state-loading', 'state-success', 'state-invalid', 'state-missing']
      .forEach(s => {
        document.getElementById(s).style.display = s === id ? 'block' : 'none';
      });
  }

  // Token assente o malformato: non chiamiamo nemmeno il server
  if (!token || token.length !== 64) {
    show('state-missing');
  } else {
    // Chiama GET /api/auth/verify-email.php?token=...
    verifyEmail(token)
      .then(() => {
        show('state-success');
      })
      .catch(err => {
        const msg = document.getElementById('error-message');
        if (err.message) msg.textContent = err.message;
        show('state-invalid');
      });
  }
</script>

</body>
</html>
