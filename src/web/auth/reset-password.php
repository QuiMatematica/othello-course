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
    <title>Nuova password — Qui Othello</title>
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
            <img src="../icons/icon-192.png" alt="Qui Othello">
            <span class="auth-logo-name">Qui Othello</span>
        </a>
    </header>

    <div class="auth-card">
        <h1 class="auth-card-title">Nuova password</h1>

        <div id="alert" class="alert" role="alert"></div>

        <!-- Token non trovato nell'URL -->
        <div id="step-invalid" style="display:none; text-align:center;">
            <p style="color:var(--text-muted); font-size:.9rem; margin-bottom:1rem;">
                Il link non è valido o è scaduto.
            </p>
            <a href="forgot-password.php" class="btn btn-primary"
               style="display:inline-flex; width:auto; padding:.65rem 1.5rem;">
                Richiedi un nuovo link
            </a>
        </div>

        <!-- Form reset -->
        <div id="step-form">
            <form id="reset-form" novalidate>

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
                    <label class="form-label" for="confirm-password">Conferma password</label>
                    <input type="password" id="confirm-password" class="form-control"
                           autocomplete="new-password"
                           placeholder="Ripeti la password"
                           required>
                </div>

                <button type="submit" id="btn-submit" class="btn btn-primary">
                    Salva nuova password
                </button>
            </form>
        </div>

        <!-- Conferma successo -->
        <div id="step-done" style="display:none; text-align:center;">
            <div style="font-size:2rem; margin-bottom:1rem;">⚫</div>
            <p style="color:var(--text); margin-bottom:.75rem;">Password aggiornata!</p>
            <p style="font-size:.88rem; color:var(--text-muted); margin-bottom:1.5rem;">
                Puoi ora accedere con la tua nuova password.
            </p>
            <a href="login.php" class="btn btn-primary"
               style="display:inline-flex; width:auto; padding:.65rem 1.5rem;">
                Vai al login
            </a>
        </div>

        <div class="auth-card-footer" id="back-link">
            <a href="login.php" class="auth-link">← Torna al login</a>
        </div>
    </div>

</div>

<script type="module">
    import {resetPassword} from './auth.js';
    import {initPwdToggle} from './pwd-toggle.js';

    initPwdToggle(document.getElementById('new-password'));
    initPwdToggle(document.getElementById('confirm-password'));

    // Leggi il token dall'URL (?token=...)
    const params = new URLSearchParams(window.location.search);
    const token = params.get('token') ?? '';
    const pwdInput = document.getElementById('new-password');
    const alertBox = document.getElementById('alert');
    const btnSubmit = document.getElementById('btn-submit');

    // Se manca il token, mostra subito l'errore
    if (!token || token.length !== 64) {
        document.getElementById('step-form').style.display = 'none';
        document.getElementById('step-invalid').style.display = 'block';
    }

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
        el.classList.toggle('fail', !ok && pwdInput.value.length > 0);
    }

    // --- Submit ---
    document.getElementById('reset-form').addEventListener('submit', async (e) => {
        e.preventDefault();
        hideAlert();

        const newPassword = pwdInput.value;
        const confirmPassword = document.getElementById('confirm-password').value;

        if (newPassword !== confirmPassword) {
            showAlert('Le password non coincidono.');
            return;
        }

        setLoading(true);

        try {
            await resetPassword({token, newPassword});
            document.getElementById('step-form').style.display = 'none';
            document.getElementById('step-done').style.display = 'block';
            document.getElementById('back-link').style.display = 'none';
        } catch (err) {
            showAlert(err.message ?? 'Errore. Il link potrebbe essere scaduto.');
        } finally {
            setLoading(false);
        }
    });

    function setLoading(on) {
        btnSubmit.disabled = on;
        btnSubmit.innerHTML = on
            ? '<span class="spinner"></span> Salvataggio…'
            : 'Salva nuova password';
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
