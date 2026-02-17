<!DOCTYPE HTML>

<?php
$host = $_SERVER['HTTP_HOST'];
$isLocalhost = str_contains($host, 'localhost');
$isTest = str_contains($host, 'test');
$isProd = !$isTest && !$isLocalhost;
$root = $isLocalhost ? '/othello-course/dist/' : '/';
?>

<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Scopri tutte le strategie e le tattiche del gioco Othello con il nostro corso interattivo. Impara dai migliori e diventa un maestro di Othello con lezioni dettagliate e pratiche.">
    <meta name="keywords"
          content="Othello, corso interattivo Othello, strategie Othello, tattiche Othello, gioco Othello, imparare Othello, lezioni Othello, tutorial Othello, trucchi Othello, migliorare Othello, maestro di Othello, regole Othello, regole gioco Othello">
    <link rel="canonical" href="https://<?= $host ?>">
    <meta property="og:title" content="Qui Othello">
    <meta property="og:url" content="https://<?= $host ?>">
    <meta property="og:image" content="https://<?= $host ?>/images/banner2025.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:type" content="website">
    <meta property="og:description"
          content="Scopri tutte le strategie e le tattiche del gioco Othello con il nostro corso interattivo. Impara dai migliori e diventa un maestro di Othello con lezioni dettagliate e pratiche.">
    <meta property="og:locale" content="it_IT"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="<?= $host ?>">
    <meta name="twitter:url" content="https://<?= $host ?>">
    <meta name="twitter:title" content="Qui Othello">
    <meta name="twitter:description"
          content="Scopri tutte le strategie e le tattiche del gioco Othello con il nostro corso interattivo. Impara dai migliori e diventa un maestro di Othello con lezioni dettagliate e pratiche.">
    <meta name="twitter:image" content="https://<?= $host ?>/images/banner2025.jpg">
    <meta name="author" content="Claudio Signorini">

    <title>Qui Othello</title>
    <link rel="stylesheet" href="<?= $root ?>assets/bootstrap-icons/bootstrap-icons.min.css">
    <link href="<?= $root ?>css/othello.css" rel="stylesheet">
    <link href="<?= $root ?>css/bootstrap.min.css" rel="stylesheet">
    <script src="<?= $root ?>js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {
            "askConsentAtCookiePolicyUpdate": true,
            "enableFadp": true,
            "enableLgpd": true,
            "enableUspr": true,
            "fadpApplies": true,
            "floatingPreferencesButtonDisplay": "bottom-right",
            "perPurposeConsent": true,
            "preferenceCookie": {"expireAfter": 180},
            "siteId": 3661950,
            "usprApplies": true,
            "whitelabel": false,
            "cookiePolicyId": 42856203,
            "lang": "it",
            "banner": {
                "acceptButtonDisplay": true,
                "closeButtonDisplay": false,
                "customizeButtonDisplay": true,
                "explicitWithdrawal": true,
                "listPurposes": true,
                "position": "float-top-center",
                "rejectButtonDisplay": true,
                "showTitle": false,
                "showTotalNumberOfProviders": true
            }
        };
    </script>
    <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/3661950.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

    <?php
    if ($isProd) {
        include 'google-tag.php';
    }
    ?>

    <!-- PWA -->
    <link rel="manifest" href="<?= $root ?>manifest.json">
    <meta name="theme-color" content="#2c3e50">
    <link rel="icon" href="<?= $root ?>icons/icon-192.png">

    <style>
        .navbar {
            min-height: 64px;
        }

        .navbar-brand {
            font-size: 1.75rem;
            letter-spacing: 0.5px;
        }

        .nav-btn-dark {
            background-color: #157347 !important; /* verde più scuro */
            border-color: #145c37 !important;
        }

        /* Stile personalizzato per il box di installazione */
        .install-box {
            background: linear-gradient(135deg, #0f5132, #198754); /* verde stile tavola */
            color: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.25);
        }

        .install-box h5 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .install-box p {
            font-size: 1rem;
            opacity: 0.9;
        }

        .install-box .btn-install {
            font-size: 1.2rem;
            padding: 0.75rem 1.5rem;
            border-radius: 2rem;
        }

        /* colore verde Othello sui pills attivi */
        .nav-pills .nav-link.active,
        .nav-pills .show > .nav-link {
            background-color: #198754;
            color: #fff;
        }

        /* colore testo normale */
        .nav-pills .nav-link {
            color: #198754;
        }

        .nav-pills .nav-link:hover {
            background-color: #198754;
            color: #fff;
        }
    </style>

    <script>
        function getDeviceId() {
            let id = localStorage.getItem('pwa_device_id');
            if (!id) {
                id = crypto.randomUUID();
                localStorage.setItem('pwa_device_id', id);
            }
            return id;
        }
    </script>

    <script>
        function pwaPing(type) {
            fetch('/api/pwa_ping.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({
                    device_id: getDeviceId(),
                    type: type,
                    platform: navigator.platform || null
                })
            });
        }
    </script>

</head>

<body class="pt-5 mt-3">

<!-- Navbar minimale Qui Othello -->
<nav class="navbar fixed-top" style="background: linear-gradient(135deg, #0f5132, #198754);">
    <div class="container-xxl d-flex align-items-center">
        <!-- Logo con icona -->
        <a class="navbar-brand d-flex align-items-center text-white fw-bold m-0" href="#">
            <img src="<?= $root ?>icons/icon-192.png" alt="Qui Othello" width="40" height="40" class="me-2 rounded">
            Qui Othello
        </a>
    </div>
</nav>

<!-- Container per suggerire l'installazione -->
<div id="pwaInstallContainer" class="container-xxl my-4 d-none">
    <div class="install-box text-center">
        <h5 class="mb-3">⚪⚫ Installa <strong>Qui Othello</strong></h5>
        <p class="mb-4">
            Porta sempre con te il corso di Othello!<br>
            Con l'app avrai un'esperienza più veloce, fluida e senza distrazioni.
        </p>
        <div class="d-flex justify-content-center gap-2 flex-wrap">
            <button id="installBtn" class="btn btn-light btn-install shadow">
                📲 Installa l'app
            </button>

            <button id="remindLaterInstallBtn" class="btn btn-outline-light btn-install shadow">
                Ricordamelo più tardi
            </button>
        </div>
    </div>
</div>

<script>
    let deferredPrompt;

    // Verifica se siamo in modalità standalone (installata come app)
    const isInStandaloneMode =
        (window.matchMedia('(display-mode: standalone)').matches)
        || (window.navigator.standalone === true); // iOS

    if (!isInStandaloneMode) {
        // Se NON è già un'app, ascolta l'evento di installazione
        window.addEventListener('beforeinstallprompt', (e) => {
            // Controllo reminder
            const remindUntil = localStorage.getItem("installReminderUntil");
            if (remindUntil && Date.now() < parseInt(remindUntil)) {
                return;
            }

            e.preventDefault();
            deferredPrompt = e;

            document.getElementById('pwaInstallContainer').classList.remove('d-none');

            // Collega l'evento al pulsante
            document.getElementById('installBtn').addEventListener('click', async () => {
                if (!deferredPrompt) return;

                deferredPrompt.prompt();
                const {outcome} = await deferredPrompt.userChoice;

                if (outcome === 'accepted') {
                    console.log('✅ Utente ha installato l’app');
                } else {
                    console.log('❌ Utente ha rifiutato l’installazione');
                }

                deferredPrompt = null;
                document.getElementById('pwaInstallContainer').classList.add('d-none');
            });

            document.getElementById('remindLaterInstallBtn').addEventListener('click', () => {
                const days = 30; // 👈 qui decidi dopo quanti giorni riproporlo
                const nextTime = Date.now() + (days * 24 * 60 * 60 * 1000);

                localStorage.setItem("installReminderUntil", nextTime);

                pwaInstallContainer.remove();
            });

        });

        // Nascondi il container se l'app viene installata
        window.addEventListener('appinstalled', () => {
            document.getElementById('pwaInstallContainer').classList.add('d-none');
            pwaPing('install');
        });
    }
</script>

<div id="pushPrompt" class="container-xxl my-4 d-none">
    <div class="install-box text-center">

        <h5 class="mb-3">
            🔔 Resta aggiornato su <strong>Qui Othello</strong>
        </h5>

        <p class="mb-4">
            Ricevi una notifica quando pubblichiamo nuove pagine e quiz.
        </p>

        <div class="d-flex justify-content-center gap-2 flex-wrap">
            <button id="enablePushBtn" class="btn btn-light btn-install shadow">
                Attiva notifiche
            </button>

            <button id="remindLaterPushBtn" class="btn btn-outline-light btn-install shadow">
                Ricordamelo più tardi
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", async () => {

        const pushPrompt = document.getElementById("pushPrompt");
        const enableBtn = document.getElementById("enablePushBtn");
        const remindBtn = document.getElementById('remindLaterPushBtn');

        if (!("serviceWorker" in navigator) || !("PushManager" in window)) {
            return; // browser non supporta
        }

        const registration = await navigator.serviceWorker.ready;

        // Controlla se già sottoscritto
        const existingSubscription = await registration.pushManager.getSubscription();

        if (existingSubscription) {
            return; // già iscritto → non mostrare il box
        }

        // Controlla permesso notifiche
        if (Notification.permission === "denied") {
            return; // utente ha bloccato → non mostrare
        }

        // Controllo reminder
        const remindUntil = localStorage.getItem("pushReminderUntil");
        if (remindUntil && Date.now() < parseInt(remindUntil)) {
            return;
        }

        // Mostra il box
        pushPrompt.classList.remove("d-none");

        enableBtn.addEventListener("click", async () => {

            try {
                const permission = await Notification.requestPermission();

                if (permission !== "granted") {
                    return;
                }

                // Ottieni public key dal server
                const response = await fetch("/api/get-vapid-public-key.php");
                const {publicKey} = await response.json();

                const convertedKey = urlBase64ToUint8Array(publicKey);

                const subscription = await registration.pushManager.subscribe({
                    userVisibleOnly: true,
                    applicationServerKey: convertedKey
                });

                // Invia al server
                await fetch("/api/save-subscription.php", {
                    method: "POST",
                    headers: {"Content-Type": "application/json"},
                    body: JSON.stringify(subscription)
                });

                // Nascondi definitivamente il box
                pushPrompt.remove();

            } catch (error) {
                console.error("Errore sottoscrizione push:", error);
            }

        });

        remindBtn.addEventListener('click', () => {

            const days = 30; // 👈 qui decidi dopo quanti giorni riproporlo
            const nextTime = Date.now() + (days * 24 * 60 * 60 * 1000);

            localStorage.setItem("pushReminderUntil", nextTime);

            pushPrompt.remove();
        });

    });


    // Conversione public key
    function urlBase64ToUint8Array(base64String) {
        const padding = "=".repeat((4 - base64String.length % 4) % 4);
        const base64 = (base64String + padding)
            .replace(/-/g, "+")
            .replace(/_/g, "/");

        const rawData = window.atob(base64);
        return Uint8Array.from([...rawData].map(char => char.charCodeAt(0)));
    }
</script>

<div id="othello-content" class="container-xxl my-4">
    <div class="border rounded-4 border-3 border-success p-3">
        <!-- REPLACE WITH INDEX -->
    </div>
</div>

<script>
    let visite = JSON.parse(localStorage.getItem('visite')) || [];

    const container = document.getElementById("othello-content");

    const links = container.querySelectorAll("a");

    links.forEach(link => {
        const href = link.getAttribute("href");
        const icon = link.querySelector("i");

        if (icon) {
            if (visite.some(v => v.pagina === href)) {
                icon.classList.add("bi-check2-circle");
            } else {
                icon.classList.add("bi-play-circle-fill");
            }
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        pwaPing('visit');

        const levels = [
            {id: "pills-base", title: "Base", emoji: "🎯", level: "base"},
            {id: "pills-intermedio", title: "Intermedio", emoji: "⚔️", level: "intermedio"},
            {id: "pills-avanzato", title: "Avanzato", emoji: "🏆", level: "avanzato"},
            {id: "pills-pratica", title: "Pratica", emoji: "🧩", level: "pratica"}
        ];

        let current = 0;
        const levelTitle = document.getElementById("levelTitle");
        const levelIcon = document.getElementById("levelIcon");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const prevLabel = document.getElementById("prevLabel");
        const nextLabel = document.getElementById("nextLabel");

        function showLevel(index) {
            // aggiorna contenuto tab
            document.querySelectorAll(".tab-pane").forEach(p => p.classList.remove("show", "active"));
            document.getElementById(levels[index].id).classList.add("show", "active");

            // aggiorna titolo barra con emoji
            levelTitle.textContent = `${levels[index].title}`;
            levelIcon.textContent = `${levels[index].emoji}`;
            prevLabel.textContent = `${levels[(index - 1 + levels.length) % levels.length].title}`;
            nextLabel.textContent = `${levels[(index + 1) % levels.length].title}`;

            // aggiorna indice
            current = index;
            // salva selezione
            localStorage.setItem('livello', levels[index].level);
        }

        prevBtn.addEventListener("click", function () {
            const newIndex = (current - 1 + levels.length) % levels.length;
            showLevel(newIndex);
        });

        nextBtn.addEventListener("click", function () {
            const newIndex = (current + 1) % levels.length;
            showLevel(newIndex);
        });

        let level = localStorage.getItem('livello') || "base";
        let index = levels.findIndex(item => item.level === level);
        if (current !== index) {
            showLevel(index);
        }
    });
</script>

<div class="container-xxl my-4 ">
    <div class="row g-4">

        <!-- Container 1: Siti per giocare -->
        <div class="col-12 col-lg-6">
            <div class="p-3 border rounded shadow-sm h-100" style="background: #ffffff;">
                <!-- Titolo -->
                <div class="mb-4 text-center">
                    <h4 class="fw-bold">🎮 Gioca Online a Othello 🎮</h4>
                </div>

                <!-- Riquadri -->
                <div class="row g-3">
                    <!-- eOthello -->
                    <div class="col-6">
                        <div class="card shadow-sm h-100 text-center" style="background: #f8f9fa;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="fs-1 mb-3">⌛</div>
                                <h5 class="card-title fw-bold">eOthello</h5>
                                <p class="card-text flex-grow-1">
                                    Gioco a turni, per riflettere con calma sulle mosse.
                                </p>
                                <a href="https://www.eothello.com" target="_blank" class="btn btn-success mt-auto">
                                    Vai su eOthello
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- OthelloQuest -->
                    <div class="col-6">
                        <div class="card shadow-sm h-100 text-center" style="background: #f8f9fa;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="fs-1 mb-3">⚡</div>
                                <h5 class="card-title fw-bold">OthelloQuest</h5>
                                <p class="card-text flex-grow-1">
                                    Gioco in tempo reale, rapido e competitivo.
                                </p>
                                <a href="http://questgames.net/reversi" target="_blank" class="btn btn-success mt-auto">
                                    Vai su OthelloQuest
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container 2: Federazione -->
        <div class="col-12 col-lg-6">
            <div class="p-3 border rounded shadow-sm h-100" style="background: #ffffff;">
                <!-- Titolo -->
                <!-- Titolo -->
                <div class="mb-4 text-center d-flex align-items-center justify-content-center gap-2 flex-wrap">
                    <img src="images/fngologo.gif" alt="FNGO logo" style="height:40px; width:auto;">
                    <h4 class="fw-bold m-0">Fed. Naz. Gioco Othello</h4>
                    <img src="images/fngologo.gif" alt="FNGO logo" style="height:40px; width:auto;">
                </div>

                <!-- Riquadri -->
                <div class="row g-3">
                    <!-- Tornei -->
                    <div class="col-6">
                        <div class="card shadow-sm h-100 text-center" style="background: #f8f9fa;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="fs-1 mb-3">📅</div>
                                <h5 class="card-title fw-bold">Calendario Tornei</h5>
                                <p class="card-text flex-grow-1">
                                    Scopri le date dei prossimi tornei ufficiali in Italia.
                                </p>
                                <a href="https://www.fngo.it/calendario.asp" target="_blank"
                                   class="btn btn-success mt-auto">
                                    Vai al calendario
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Classifica -->
                    <div class="col-6">
                        <div class="card shadow-sm h-100 text-center" style="background: #f8f9fa;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="fs-1 mb-3">🏆</div>
                                <h5 class="card-title fw-bold">Classifica Rating</h5>
                                <p class="card-text flex-grow-1">
                                    Consulta la classifica nazionale aggiornata.
                                </p>
                                <a href="https://www.fngo.it/glicko.asp" target="_blank"
                                   class="btn btn-success mt-auto">
                                    Vai alla classifica
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div id="shareContainer" class="container-xxl my-4">
    <div class="install-box text-center">
        <h5 class="mb-3">⚪⚫ Condividi <strong>Qui Othello</strong></h5>
        <p class="mb-4">
            Invia il link del corso e sfida i tuoi amici a diventare maestri di Othello.
        </p>
        <button id="shareBtn" class="btn btn-light btn-install shadow">
            <i class="bi bi-share-fill"></i> Condividi
        </button>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto">
            <a href="https://www.iubenda.com/privacy-policy/42856203"
               class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Privacy
                Policy</a>
            <script type="text/javascript">(function (w, d) {
                    var loader = function () {
                        var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0];
                        s.src = "https://cdn.iubenda.com/iubenda.js";
                        tag.parentNode.insertBefore(s, tag);
                    };
                    if (w.addEventListener) {
                        w.addEventListener("load", loader, false);
                    } else if (w.attachEvent) {
                        w.attachEvent("onload", loader);
                    } else {
                        w.onload = loader;
                    }
                })(window, document);</script>
        </div>
        <div class="col-auto">
            <a href="https://www.iubenda.com/privacy-policy/42856203/cookie-policy"
               class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Cookie Policy ">Cookie
                Policy</a>
            <script type="text/javascript">(function (w, d) {
                    var loader = function () {
                        var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0];
                        s.src = "https://cdn.iubenda.com/iubenda.js";
                        tag.parentNode.insertBefore(s, tag);
                    };
                    if (w.addEventListener) {
                        w.addEventListener("load", loader, false);
                    } else if (w.attachEvent) {
                        w.attachEvent("onload", loader);
                    } else {
                        w.onload = loader;
                    }
                })(window, document);</script>
        </div>
    </div>
</div>

<script>
    document.getElementById("shareBtn").addEventListener("click", async () => {
        const shareData = {
            title: "Qui Othello",
            text: "Vuoi imparare a giocare ad Othello? Visita questo sito!",
            url: window.location.href
        };

        if (navigator.share) {
            try {
                await navigator.share(shareData);
                console.log("Contenuto condiviso con successo!");
            } catch (err) {
                console.error("Errore nella condivisione:", err);
            }
        } else {
            const mailtoLink = `mailto:?subject=${encodeURIComponent(shareData.title)}&body=${encodeURIComponent(shareData.text + " " + shareData.url)}`;
            window.location.href = mailtoLink;
        }

        gtag("event", "share_click", {
            "event_category": "Interaction",
            "event_label": "Share page",
            "page_path": window.location.pathname
        });
        console.log("Condivisione registrata su GA.");
    });
</script>

<script>
    // PWA: Registra il service worker se supportato
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js')
            .then(() => console.log('✅ Service Worker registrato'))
            .catch(err => console.log('❌ Errore SW:', err));
    }
</script>
</body>
</html>
