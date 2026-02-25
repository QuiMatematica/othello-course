<!DOCTYPE HTML>
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
    <?php
    if ($isProd) {
        include '../google-tag.php';
    }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Scopri tutte le strategie e le tattiche del gioco Othello con il nostro corso interattivo. Impara dai migliori e diventa un maestro di Othello con lezioni dettagliate e pratiche.">
    <meta name="keywords"
          content="Othello, corso interattivo Othello, strategie Othello, tattiche Othello, gioco Othello, imparare Othello, lezioni Othello, tutorial Othello, trucchi Othello, migliorare Othello, maestro di Othello, regole Othello, regole gioco Othello">
    <meta property="og:title" content="Un quiz per te...">
    <meta property="og:url" content="https://<?= $host ?>/pratica/quiz.php">
    <meta property="og:image" content="https://<?= $host ?>/images/banner2025.jpg?t=20260220">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:type" content="article">
    <meta property="og:description" content="${description}">
    <meta property="og:locale" content="it_IT"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="<?= $host ?>">
    <meta name="twitter:url" content="https://<?= $host ?>/pratica/quiz.php">
    <meta name="twitter:title" content="${title}">
    <meta name="twitter:description" content="${description}">
    <meta name="twitter:image" content="https://<?= $host ?>/images/banner2025.jpg?t=20260220">
    <meta name="author" content="Claudio Signorini">
    <title>Un quiz per te...</title>
    <link rel="canonical" href="https://<?= $host ?>/pratica/quiz.php">
    <link rel="stylesheet" href="<?= $root ?>assets/bootstrap-icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../<?= $assets['main.css'] ?>">
    <style>
        .navbar {
            min-height: 64px;
        }

        .navbar-brand {
            font-size: 1.75rem;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
<!-- Header Browser -->
<div id="browserHeader" class="d-none">
    <nav class="navbar" style="background: linear-gradient(135deg, #0f5132, #198754);">
        <div class="container-xxl d-flex align-items-center">
            <!-- Logo con icona -->
            <a class="navbar-brand d-flex align-items-center text-white fw-bold m-0" href="<?= $root ?>">
                <img src="<?= $root ?>icons/icon-192.png" alt="Qui Othello" width="40" height="40" class="me-2 rounded">
                Qui Othello
            </a>
        </div>
    </nav>
</div>

<!-- Header App -->
<div id="appHeader" class="d-none">
    <div class="bg-success text-white d-flex align-items-center p-3">
        <a class="btn text-white me-3 p-0 fs-1" href="<?= $root ?>"><i class="bi bi-chevron-left"></i></a>
        <h1 class="h1 mb-0">Un quiz per te...</h1>
    </div>
</div>

<div id="othello-content" class="container-xxl mt-4">
    <button id="shareBtn" class="btn btn-light btn-outline-dark share-button">
        <i class="bi bi-share-fill"></i>
    </button>
    <h1 class="mb-3 d-none" id="pageTitle">Un quiz per te...</h1>

    <div class="card mx-auto board-card my-3">
        <div class="card-body">
            <div class="sequence-board" data-file="by-url"></div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Un quiz per te...
        </div>
    </div>

</div>
<script>
    function isInStandaloneMode() {
        return (window.matchMedia('(display-mode: standalone)').matches) ||
            (window.navigator.standalone === true);
    }

    if (isInStandaloneMode()) {
        // Siamo in app
        document.getElementById("appHeader").classList.remove("d-none");
    } else {
        // Siamo in browser
        document.getElementById("browserHeader").classList.remove("d-none");
        document.getElementById("pageTitle").classList.remove("d-none");
    }
</script>

    <script src="../<?= $assets['main.js'] ?>"></script>

</body>
</html>