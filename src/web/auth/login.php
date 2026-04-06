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
    <title>Accedi — Qui Othello</title>
    <link rel="icon" href="<?= $root ?>icons/quiothello2026-192.png">
    <link rel="apple-touch-icon" href="<?= $root ?>icons/quiothello2026-180.png">
    <link rel="stylesheet" href="auth.css">
    <link rel="stylesheet" href="<?= $root ?>assets/bootstrap-icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../<?= $assets['main.css'] ?>">
</head>
<body>

<div class="auth-page">

    <header class="auth-header">
        <a href="/" class="auth-logo">
            <img src="../icons/quiothello2026-192.png" alt="Qui Othello">
            <span class="auth-logo-name">Qui Othello</span>
        </a>
    </header>

    <div class="auth-card">
        <h1 class="auth-card-title">Accedi</h1>

        <div id="alert" class="alert" role="alert"></div>

        <form id="login-form" novalidate>

            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control"
                       autocomplete="email"
                       placeholder="la-tua@email.it"
                       required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">
                    Password
                    <a href="forgot-password.php" class="auth-link"
                       style="float:right; font-size:.78rem; font-weight:400;
                    text-transform:none; letter-spacing:0;">
                        Password dimenticata?
                    </a>
                </label>
                <input type="password" id="password" class="form-control"
                       autocomplete="current-password"
                       placeholder="••••••••"
                       required>
            </div>

            <button type="submit" id="btn-submit" class="btn btn-primary">
                Accedi
            </button>

        </form>

        <div class="auth-card-footer">
            Non hai un account? <a href="register.php" class="auth-link">Registrati</a>
        </div>
    </div>

</div>

<script type="module">
    import {login} from './auth.js';
    import {initPwdToggle} from './pwd-toggle.js';

    // Attiva l'occhietto sul campo password
    initPwdToggle(document.getElementById('password'));

    const form = document.getElementById('login-form');
    const alertBox = document.getElementById('alert');
    const btnSubmit = document.getElementById('btn-submit');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        hideAlert();

        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;

        if (!email || !password) {
            showAlert('Inserisci email e password.');
            return;
        }

        setLoading(true);

        try {
            await login({email, password});

            const redirect = sessionStorage.getItem('redirect_after_login') ?? '/';
            sessionStorage.removeItem('redirect_after_login');
            window.location.href = redirect;

        } catch (err) {
            showAlert(err.message ?? 'Errore durante il login');
        } finally {
            setLoading(false);
        }
    });

    function setLoading(on) {
        btnSubmit.disabled = on;
        btnSubmit.innerHTML = on
            ? '<span class="spinner"></span> Accesso…'
            : 'Accedi';
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
