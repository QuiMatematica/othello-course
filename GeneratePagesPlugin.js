const fs = require('fs');
const path = require('path');
const GatherProcessor = require('./GatherProcessor');
const BoardProcessor = require('./BoardProcessor');

class GeneratePagesPlugin {

    constructor(options) {
        this.options = options;
        this.gatherProcessor = new GatherProcessor();
        this.boardProcessor = new BoardProcessor();
    }

    // Funzione ricorsiva per leggere i file HTML dalle directory
    readFilesRecursively(dir, fileList = [], addFiles = true) {
        const files = fs.readdirSync(dir);
        files.forEach(file => {
            const filePath = path.join(dir, file);
            const stat = fs.statSync(filePath);
            if (stat.isDirectory()) {
                this.readFilesRecursively(filePath, fileList);
            } else if (addFiles && stat.isFile() && path.extname(file) === '.php') {
                fileList.push(filePath);
            }
        });
        return fileList;
    }

    apply(compiler) {
        compiler.hooks.emit.tapAsync('GeneratePagesPlugin', (compilation, callback) => {
            const { inputDir, outputDir } = this.options;

            // console.log('inputDir: ' + inputDir);

            const jsonPath = path.resolve(__dirname, 'src/web/index.json');
            const jsonContent = fs.readFileSync(jsonPath, 'utf8');
            this.json = JSON.parse(jsonContent);

            this.readListOfPages();

            // Leggi i file HTML ricorsivamente dal inputDir
            const files = this.readFilesRecursively(inputDir, [], false);

            files.forEach(filePath => {
                const level = countSlashes(filePath) - countSlashes(inputDir) - 1;
                // console.log('generating: ' + filePath + '; level: ' + level);

                let html = fs.readFileSync(filePath, 'utf8');

                html = this.gatherProcessor.process(html);
                html = this.boardProcessor.process(html);

                // Componi l'HTML completo
                html = this.composePage(html, filePath, level);

                // Determina il percorso del file di output
                const relativePath = path.relative(inputDir, filePath);
                const outputFilePath = path.join(outputDir, relativePath);

                // Crea le directory necessarie per il file di output
                const outputDirPath = path.dirname(outputFilePath);
                if (!fs.existsSync(outputDirPath)) {
                    fs.mkdirSync(outputDirPath, { recursive: true });
                }

                // Scrivi il file HTML nella outputDir
                fs.writeFileSync(outputFilePath, html);
            });

            callback(); // Segnala a Webpack che il plugin ha finito
        });
    }

    findThisPage(filePath) {
        let indexOfThisPage = -1;
        for (let i = 0; i < this.pages.length; i++) {
            if (filePath.replace(/\\/g, '/').endsWith(this.pages[i].href)) {
                indexOfThisPage = i;
                break;
            }
        }
        return indexOfThisPage;
    }

    composePagination(filePath, prepend, indexOfThisPage) {
        let before = '';
        if (indexOfThisPage > 0) {
            before = `
            <li class='page-item'>
            <a class='page-link' aria-label='Previous' href='${prepend}${this.pages[indexOfThisPage-1].href}'>
            <span class='px-1' aria-hidden='true'>&laquo;</span>
            <span class='sr-only'>${this.pages[indexOfThisPage-1].title}</span>
            </a>
            </li>`;
        }

        let after = '';
        if (indexOfThisPage < this.pages.length - 1) {
            after = `
            <li class='page-item'>
            <a class='page-link' aria-label='Previous' href='${prepend}${this.pages[indexOfThisPage+1].href}'>
            <span class='sr-only'>${this.pages[indexOfThisPage+1].title}</span>
            <span class='px-1' aria-hidden='true'>&raquo;</span>
            </a>
            </li>`;
        }

        return `
        <nav class='my-3'>
        <ul class='pagination justify-content-center'>${before}
        <li class='page-item'>
        <a class='page-link' data-bs-toggle='offcanvas' href='#section-index' role='button' aria-controls='offcanvasExample'>Indice</a>
        </li>${after}
        </ul>
        </nav>`;
    }

    composePage(htmlContent, filePath, level) {
        let prepend = '';
        for (let i = 0; i < level; i++) {
            prepend += '../';
        }

        // Trova la pagina nella lista delle pagine caricate da json
        const indexOfThisPage = this.findThisPage(filePath);

        const h1title = indexOfThisPage === -1 ? "Qui Othello" : this.pages[indexOfThisPage].title;
        const title = indexOfThisPage === -1 ? "Qui Othello" : this.pages[indexOfThisPage].title + " @ Qui Othello";
        const url = indexOfThisPage === -1 ? "https://othello.quimatematica.it" : "https://othello.quimatematica.it/" + this.pages[indexOfThisPage].href;

        let description = "Scopri tutte le strategie e le tattiche del gioco Othello con il nostro corso interattivo. Impara dai migliori e diventa un maestro di Othello con lezioni dettagliate e pratiche.";
        if (indexOfThisPage !== -1 && this.pages[indexOfThisPage].description != null) {
            description = this.pages[indexOfThisPage].description;
        }

        let keywords = "Othello, corso interattivo Othello, strategie Othello, tattiche Othello, gioco Othello, imparare Othello, lezioni Othello, tutorial Othello, trucchi Othello, migliorare Othello, maestro di Othello, regole Othello, regole gioco Othello"
        if (indexOfThisPage !== -1 && this.pages[indexOfThisPage].keywords != null) {
            keywords = this.pages[indexOfThisPage].keywords;
        }

        let pagination = '';
        if (!filePath.endsWith('quiz.php')) {
            pagination = this.composePagination(filePath, prepend, indexOfThisPage);
        }

        return `<!DOCTYPE HTML>
<html lang="it">
<head>
    <?php
        if ($_SERVER['HTTP_HOST'] == 'othello.quimatematica.it') {
            include '${prepend}google-tag.php';
        }
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="${description}">
    <meta name="keywords" content="${keywords}">
    <meta property="og:title" content="${title}">
    <meta property="og:url" content="${url}">
    <meta property="og:image" content="https://othello.quimatematica.it/icons/icon-192.jpg">
    <meta property="og:type" content="article">
    <meta property="og:description" content="${description}">
    <meta property="og:locale" content="it_IT" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="othello-test.quimatematica.it">
    <meta name="twitter:url" content="${url}">
    <meta name="twitter:title" content="${title}">
    <meta name="twitter:description" content="${description}">
    <meta name="twitter:image" content="https://othello.quimatematica.it/icons/icon-192.jpg">
    <meta name="author" content="Claudio Signorini">
	<title>${title}</title>
	<link rel="canonical" href="${url}">
	<link href="${prepend}css/bootstrap.min.css" rel="stylesheet">
	<script src="${prepend}js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="${prepend}assets/bootstrap-icons/bootstrap-icons.min.css">
	<link rel="stylesheet" href="${prepend}css/othello.css">
	<script type="module" src="${prepend}js/tao.js"></script>
</head>
<body>
    <!-- Header Browser -->
    <div id="browserHeader" class="d-none">
    <nav class="navbar" style="background: linear-gradient(135deg, #0f5132, #198754);">
        <div class="container-xxl d-flex align-items-center">
            <!-- Logo con icona -->
            <a class="navbar-brand d-flex align-items-center text-white fw-bold m-0" href="${prepend}">
                <img src="../icons/icon-192.png" alt="Qui Othello" width="40" height="40" class="me-2 rounded">
                Qui Othello
            </a>
        </div>
    </nav>
    </div>
    
    <!-- Header App -->
    <div id="appHeader" class="d-none">
        <div class="bg-success text-white d-flex align-items-center p-3">
            <button class="btn text-white me-3 p-0 fs-4" onclick="history.back()">←</button>
            <h1 class="h4 mb-0">${h1title}</h1>
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
    </script>
</body>
</html>`;
    }

    readListOfPages() {
        this.pages = [];
        this.json.sections.forEach(section => {
            this.pages.push(new Page(section.href + 'section.php', section.title, section.description, section.keywords));
            section.chapters.forEach(chapter => {
                this.pages.push(new Page(section.href + chapter.href + 'chapter.php', chapter.title, chapter.description, chapter.keywords));
                if (chapter.pages != null) {
                    chapter.pages.forEach(page => {
                        this.pages.push(new Page(section.href + chapter.href + page.href, page.title, page.description, page.keywords));
                    });
                }
            });
        });
    }
}

class Page {

    href;
    title;
    description;
    keywords;

    constructor(href, title, description, keywords) {
        this.href = href;
        this.title = title;
        this.description = description;
        this.keywords = keywords;
    }

}

function countSlashes(str) {
  return str.split('\\').length - 1;
}

module.exports = GeneratePagesPlugin;
