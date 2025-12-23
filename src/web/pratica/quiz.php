<!DOCTYPE HTML>
<html lang="it">
<head>
    <?php
    if ($_SERVER['HTTP_HOST'] == 'quiothello.it') {
        include '../google-tag.php';
    }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="${description}">
    <meta name="keywords" content="${keywords}">
    <meta property="og:title" content="${title}">
    <meta property="og:url" content="https://quiothello.it/pratica/quiz.php">
    <meta property="og:image" content="https://quiothello.it/icons/icon-192.jpg">
    <meta property="og:type" content="article">
    <meta property="og:description" content="${description}">
    <meta property="og:locale" content="it_IT"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="quiothello.it">
    <meta name="twitter:url" content="https://quiothello.it/pratica/quiz.php">
    <meta name="twitter:title" content="${title}">
    <meta name="twitter:description" content="${description}">
    <meta name="twitter:image" content="https://quiothello.it/icons/icon-192.jpg">
    <meta name="author" content="Claudio Signorini">
    <title>${title}</title>
    <link rel="canonical" href="https://quiothello.it/pratica/quiz.php">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap-icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/othello.css">
    <script type="module" src="../js/tao.js"></script>
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
            <a class="navbar-brand d-flex align-items-center text-white fw-bold m-0" href="../">
                <img src="../icons/icon-192.png" alt="Qui Othello" width="40" height="40" class="me-2 rounded">
                Qui Othello
            </a>
        </div>
    </nav>
</div>

<!-- Header App -->
<div id="appHeader" class="d-none">
    <div class="bg-success text-white d-flex align-items-center p-3">
        <a class="btn text-white me-3 p-0 fs-1" href="../"><i class="bi bi-chevron-left"></i></a>
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
</body>
</html>