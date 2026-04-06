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
    <title>Registrati — Qui Othello</title>
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
        <h1 class="auth-card-title">Crea un account</h1>

        <div id="alert" class="alert" role="alert"></div>

        <form id="register-form" novalidate>

            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input type="text" id="username" class="form-control"
                       autocomplete="username"
                       placeholder="es. othellista42"
                       minlength="3" maxlength="50" required>
                <p class="form-hint">3–50 caratteri. Lettere, numeri, _ e -</p>
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control"
                       autocomplete="email"
                       placeholder="la-tua@email.it"
                       required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" class="form-control"
                       autocomplete="new-password"
                       placeholder="Almeno 8 caratteri"
                       required>
                <ul class="pwd-rules" id="pwd-rules">
                    <li id="rule-len">Almeno 8 caratteri</li>
                    <li id="rule-letter">Almeno una lettera</li>
                    <li id="rule-number">Almeno un numero</li>
                </ul>
            </div>

            <button type="submit" id="btn-submit" class="btn btn-primary">
                Crea account
            </button>

        </form>

        <div class="auth-card-footer">
            Hai già un account? <a href="login.php" class="auth-link">Accedi</a>
        </div>
    </div>

</div>

<script type="module">
    import {register} from './auth.js';
    import {initPwdToggle} from './pwd-toggle.js';

    initPwdToggle(document.getElementById('password'));

    const form = document.getElementById('register-form');
    const alertBox = document.getElementById('alert');
    const btnSubmit = document.getElementById('btn-submit');
    const pwdInput = document.getElementById('password');

    // --- Validazione live requisiti password ---
    pwdInput.addEventListener('input', () => checkRules(pwdInput.value));

    function checkRules(val) {
        toggle('rule-len', val.length >= 8);
        toggle('rule-letter', /[a-zA-Z]/.test(val));
        toggle('rule-number', /[0-9]/.test(val));
    }

    function toggle(id, ok) {
        const el = document.getElementById(id);
        el.classList.toggle('ok', ok);
        el.classList.toggle('fail', !ok && document.getElementById('password').value.length > 0);
    }

    // --- Submit ---
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        hideAlert();

        const username = document.getElementById('username').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = pwdInput.value;

        setLoading(true);

        try {
            await register({username, email, password});
            showAlert(
                'Account creato! Controlla la tua email per verificare il tuo indirizzo.',
                'success'
            );
            form.reset();
            checkRules('');
        } catch (err) {
            showAlert(err.message ?? 'Errore durante la registrazione');
        } finally {
            setLoading(false);
        }
    });

    function setLoading(on) {
        btnSubmit.disabled = on;
        btnSubmit.innerHTML = on
            ? '<span class="spinner"></span> Registrazione…'
            : 'Crea account';
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
