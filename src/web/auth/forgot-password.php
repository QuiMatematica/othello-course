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
    <title>Password dimenticata — Qui Othello</title>
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
        <h1 class="auth-card-title">Recupera la password</h1>

        <div id="alert" class="alert" role="alert"></div>

        <!-- Form di richiesta -->
        <div id="step-request">
            <p style="font-size:.9rem; color:var(--text-muted); margin-bottom:1.5rem;">
                Inserisci il tuo indirizzo email. Se è registrato, riceverai un link
                per reimpostare la password.
            </p>

            <form id="forgot-form" novalidate>
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control"
                           autocomplete="email"
                           placeholder="la-tua@email.it"
                           required>
                </div>

                <button type="submit" id="btn-submit" class="btn btn-primary">
                    Invia il link di recupero
                </button>
            </form>
        </div>

        <!-- Conferma invio (mostrata dopo submit) -->
        <div id="step-done" style="display:none; text-align:center;">
            <div style="font-size:2rem; margin-bottom:1rem;">⚪</div>
            <p style="color:var(--text); margin-bottom:.75rem;">
                Email inviata!
            </p>
            <p style="font-size:.88rem; color:var(--text-muted);">
                Se l'indirizzo è registrato, riceverai le istruzioni entro qualche minuto.
                Controlla anche la cartella spam.
            </p>
        </div>

        <div class="auth-card-footer">
            <a href="login.php" class="auth-link">← Torna al login</a>
        </div>
    </div>

</div>

<script type="module">
    import {forgotPassword} from './auth.js';

    const form = document.getElementById('forgot-form');
    const alertBox = document.getElementById('alert');
    const btnSubmit = document.getElementById('btn-submit');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        hideAlert();

        const email = document.getElementById('email').value.trim();

        if (!email) {
            showAlert('Inserisci un indirizzo email.');
            return;
        }

        setLoading(true);

        try {
            await forgotPassword({email});
            // Mostra sempre la schermata di conferma (anti-enumerazione)
            document.getElementById('step-request').style.display = 'none';
            document.getElementById('step-done').style.display = 'block';
        } catch {
            // Mostra la conferma anche in caso di errore (anti-enumerazione)
            document.getElementById('step-request').style.display = 'none';
            document.getElementById('step-done').style.display = 'block';
        } finally {
            setLoading(false);
        }
    });

    function setLoading(on) {
        btnSubmit.disabled = on;
        btnSubmit.innerHTML = on
            ? '<span class="spinner"></span> Invio…'
            : 'Invia il link di recupero';
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
