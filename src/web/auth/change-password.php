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
  <title>Cambia password — Qui Othello</title>
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

  <!-- Splash mentre verifichiamo la sessione -->
  <div id="splash" style="color:var(--text-muted); font-size:.9rem;">
    Caricamento…
  </div>

  <div class="auth-card" id="main-card" style="display:none;">
    <h1 class="auth-card-title">Cambia password</h1>

    <div id="alert" class="alert" role="alert"></div>

    <!-- Form cambio password -->
    <div id="step-form">
      <form id="change-form" novalidate>

        <div class="form-group">
          <label class="form-label" for="current-password">Password attuale</label>
          <input type="password" id="current-password" class="form-control"
                 autocomplete="current-password"
                 placeholder="••••••••"
                 required>
        </div>

        <div class="form-group">
          <label class="form-label" for="new-password">Nuova password</label>
          <input type="password" id="new-password" class="form-control"
                 autocomplete="new-password"
                 placeholder="Almeno 8 caratteri"
                 required>
          <ul class="pwd-rules" id="pwd-rules">
            <li id="rule-len">Almeno 8 caratteri</li>
            <li id="rule-letter">Almeno una lettera</li>
            <li id="rule-number">Almeno un numero</li>
          </ul>
        </div>

        <div class="form-group">
          <label class="form-label" for="confirm-password">Conferma nuova password</label>
          <input type="password" id="confirm-password" class="form-control"
                 autocomplete="new-password"
                 placeholder="Ripeti la nuova password"
                 required>
        </div>

        <button type="submit" id="btn-submit" class="btn btn-primary">
          Aggiorna password
        </button>

      </form>
    </div>

    <!-- Conferma successo -->
    <div id="step-done" style="display:none; text-align:center;">
      <div style="font-size:2rem; margin-bottom:1rem;">⚫</div>
      <p style="color:var(--text); margin-bottom:.75rem;">Password aggiornata!</p>
      <p style="font-size:.88rem; color:var(--text-muted);">
        La tua password è stata cambiata con successo.
      </p>
    </div>

    <div class="auth-card-footer">
      <a href="/" class="auth-link">← Torna alla home</a>
    </div>
  </div>

</div>

<script type="module">
  import { initAuth, changePassword } from './auth.js';

  const splash    = document.getElementById('splash');
  const mainCard  = document.getElementById('main-card');
  const alertBox  = document.getElementById('alert');
  const btnSubmit = document.getElementById('btn-submit');
  const pwdInput  = document.getElementById('new-password');

  // --- Verifica sessione: questa pagina richiede login ---
  (async () => {
    const user = await initAuth();
    splash.style.display = 'none';

    if (!user) {
      sessionStorage.setItem('redirect_after_login', 'change-password.php');
      window.location.href = 'login.php';
      return;
    }

    mainCard.style.display = 'block';
  })();

  // --- Validazione live requisiti password ---
  pwdInput.addEventListener('input', () => checkRules(pwdInput.value));

  function checkRules(val) {
    toggle('rule-len',    val.length >= 8);
    toggle('rule-letter', /[a-zA-Z]/.test(val));
    toggle('rule-number', /[0-9]/.test(val));
  }

  function toggle(id, ok) {
    const el = document.getElementById(id);
    el.classList.toggle('ok',   ok);
    el.classList.toggle('fail', !ok && pwdInput.value.length > 0);
  }

  // --- Submit ---
  document.getElementById('change-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    hideAlert();

    const currentPassword = document.getElementById('current-password').value;
    const newPassword     = pwdInput.value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (newPassword !== confirmPassword) {
      showAlert('Le nuove password non coincidono.');
      return;
    }

    setLoading(true);

    try {
      await changePassword({ currentPassword, newPassword });
      document.getElementById('step-form').style.display = 'none';
      document.getElementById('step-done').style.display = 'block';
    } catch (err) {
      showAlert(err.message ?? 'Errore durante il cambio password.');
    } finally {
      setLoading(false);
    }
  });

  function setLoading(on) {
    btnSubmit.disabled = on;
    btnSubmit.innerHTML = on
      ? '<span class="spinner"></span> Aggiornamento…'
      : 'Aggiorna password';
  }

  function showAlert(msg, type = 'danger') {
    alertBox.className = `alert alert-${type} show`;
    alertBox.textContent = msg;
  }

  function hideAlert() {
    alertBox.className = 'alert';
  }
</script>

</body>
</html>
