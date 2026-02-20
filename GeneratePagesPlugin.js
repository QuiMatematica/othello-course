const fs = require('fs');
const path = require('path');
const GatherProcessor = require('./GatherProcessor');
const BoardProcessor = require('./BoardProcessor');
const TitleProcessor = require("./TitleProcessor");

class GeneratePagesPlugin {

    constructor(options) {
        this.options = options;
        this.titleProcessor = new TitleProcessor();
        this.gatherProcessor = new GatherProcessor();
        this.boardProcessor = new BoardProcessor();
    }

    apply(compiler) {
        compiler.hooks.emit.tapAsync('GeneratePagesPlugin', (compilation, callback) => {
            const { inputDir, outputDir } = this.options;

            const jsonPath = path.resolve(__dirname, 'src/web/index.json');
            const jsonContent = fs.readFileSync(jsonPath, 'utf8');
            this.json = JSON.parse(jsonContent);

            this.json.sections.forEach(section => {
                const sectionPath = path.join(inputDir, section.href);
                section.chapters.forEach(chapter => {
                    const chapterPath = path.join(sectionPath, chapter.href);
                    chapter.pages.forEach(page => {
                        const pagePath = path.join(chapterPath, page.href);
                        // console.log('page: ' + pagePath);
                        let html = fs.readFileSync(pagePath, 'utf8');

                        html = this.titleProcessor.process(html);
                        html = this.gatherProcessor.process(html);
                        html = this.boardProcessor.process(html);

                        // Componi l'HTML completo
                        html = this.composePage(html, section, chapter, page);

                        // Determina il percorso del file di output
                        const relativePath = path.relative(inputDir, pagePath);
                        const outputFilePath = path.join(outputDir, relativePath);

                        // Crea le directory necessarie per il file di output
                        const outputDirPath = path.dirname(outputFilePath);
                        if (!fs.existsSync(outputDirPath)) {
                            fs.mkdirSync(outputDirPath, {recursive: true});
                        }

                        // Scrivi il file HTML nella outputDir
                        fs.writeFileSync(outputFilePath, html);
                    })
                })
            })

            callback(); // Segnala a Webpack che il plugin ha finito
        });
    }

    composePagination(chapter, page) {
        let index = chapter.pages.indexOf(page);

        let nextButton = '';
        if (index + 1 < chapter.pages.length) {
            nextButton = `
            <div class="text-center">
                <a class="btn btn-success shadow mt-1 mb-5" href="${chapter.pages[index + 1].href}">
                    Lezione successiva: ${chapter.pages[index + 1].title}
                </a>
            </div>`;
        }
        else {
            nextButton = `
            <div class="text-center">
                <a class="btn btn-success shadow mt-1 mb-5" href="../../">
                    ⚪⚫ Torna alla home ⚫⚪
                </a>
            </div>`;
        }

        return nextButton;
    }

    composePage(htmlContent, section, chapter, page) {
        let prepend = '../../';

        const h1title = page.title;
        const title = page.title + " @ Qui Othello";
        const url = "https://<?= $host ?>/" + section.href + chapter.href + page.href;

        const description = page.description || "Scopri tutte le strategie e le tattiche del gioco Othello con il nostro corso interattivo. Impara dai migliori e diventa un maestro di Othello con lezioni dettagliate e pratiche.";

        const keywords = page.keywords || "Othello, corso interattivo Othello, strategie Othello, tattiche Othello, gioco Othello, imparare Othello, lezioni Othello, tutorial Othello, trucchi Othello, migliorare Othello, maestro di Othello, regole Othello, regole gioco Othello"

        const pagination = this.composePagination(chapter, page);

        return `<!DOCTYPE HTML>
<?php
$host = $_SERVER['HTTP_HOST'];
$isLocalhost = str_contains($host, 'localhost');
$isTest = str_contains($host, 'test');
$isProd = !$isTest && !$isLocalhost;
$root = $isLocalhost ? '/othello-course/dist/' : '/';
?>
<html lang="it">
<head>
    <?php
        if ($isProd) {
            include '../../google-tag.php';
        }
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="${description}">
    <meta name="keywords" content="${keywords}">
    <meta property="og:title" content="${title}">
    <meta property="og:url" content="${url}">
    <meta property="og:image" content="https://<?= $host ?>/images/banner2025.jpg?t=20260220">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:type" content="article">
    <meta property="og:description" content="${description}">
    <meta property="og:locale" content="it_IT" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="<?= $host ?>">
    <meta name="twitter:url" content="${url}">
    <meta name="twitter:title" content="${title}">
    <meta name="twitter:description" content="${description}">
    <meta name="twitter:image" content="https://<?= $host ?>/images/banner2025.jpg?t=20260220">
    <meta name="author" content="Claudio Signorini">
	<title>${title}</title>
	<link rel="canonical" href="${url}">
	<link href="<?= $root ?>css/bootstrap.min.css" rel="stylesheet">
	<script src="<?= $root ?>js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="<?= $root ?>assets/bootstrap-icons/bootstrap-icons.min.css">
	<link rel="stylesheet" href="<?= $root ?>css/othello.css">
	<script type="module" src="<?= $root ?>js/tao.js?t=20260220"></script>
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
            <h1 class="h1 mb-0">${h1title}</h1>
        </div>
    </div>

	<div id="othello-content" class="container-xxl mt-4">
        <button id="shareBtn" class="btn btn-light btn-outline-dark share-button">
            <i class="bi bi-share-fill"></i>
        </button>
        <h1 class="mb-3 d-none" id="pageTitle">${h1title}</h1>
${htmlContent}
${pagination}
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
        
        // Memorizza la visita della pagina
        // prendi il pathname della pagina corrente
        const path = window.location.pathname;
        // dividi in parti ignorando stringhe vuote
        const parts = path.split("/").filter(Boolean);
        // prendi gli ultimi 3 pezzi
        const last3 = parts.slice(-3);
        // ricostruisci con lo slash davanti
        const pagina = last3.join("/");
        const ora = new Date().toISOString();
        let visite = JSON.parse(localStorage.getItem('visite')) || [];
        visite = visite.filter(v => v.pagina !== pagina);
        visite.push({ pagina, ultimaVisita: ora });
        localStorage.setItem('visite', JSON.stringify(visite));
    </script>
</body>
</html>`;
    }

}

module.exports = GeneratePagesPlugin;
