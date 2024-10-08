const fs = require('fs');
const path = require('path');

class GeneratePagesPlugin {

    constructor(options) {
        this.options = options;
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

            console.log('inputDir: ' + inputDir);

            const jsonPath = path.resolve(__dirname, 'src/web/index.json');
            const jsonContent = fs.readFileSync(jsonPath, 'utf8');
            this.json = JSON.parse(jsonContent);

            this.readListOfPages();

            // Leggi i file HTML ricorsivamente dal inputDir
            const files = this.readFilesRecursively(inputDir, [], false);

            files.forEach(filePath => {
                const level = countSlashes(filePath) - countSlashes(inputDir) - 1;
                console.log('generating: ' + filePath + '; level: ' + level);

                const htmlContent = fs.readFileSync(filePath, 'utf8');

                // Componi l'HTML completo
                const composedHtml = this.composePage(htmlContent, filePath, level);

                // Determina il percorso del file di output
                const relativePath = path.relative(inputDir, filePath);
                const outputFilePath = path.join(outputDir, relativePath);

                // Crea le directory necessarie per il file di output
                const outputDirPath = path.dirname(outputFilePath);
                if (!fs.existsSync(outputDirPath)) {
                    fs.mkdirSync(outputDirPath, { recursive: true });
                }

                // Scrivi il file HTML nella outputDir
                fs.writeFileSync(outputFilePath, composedHtml);
            });

            callback(); // Segnala a Webpack che il plugin ha finito
        });
    }

    composeOffcanvas(prepend) {
        let offcanvas = '';
        this.json.sections.forEach(section => {

            offcanvas += `
            <h5><a class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" href="${prepend}${section.href}section.php">${section.title}</a></h5>
            <ul class='nav flex-column'>`;

            section.chapters.forEach(chapter => {
                offcanvas += `
                <li class='nav-item pb-3'>
                <a class='link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover' href="${prepend}${section.href}${chapter.href}chapter.php">${chapter.title}</a>
                <ul>`;

                chapter.pages.forEach(page => {
                    offcanvas += `
                    <li class='nav-item'>
                    <a class='link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover' href="${prepend}${section.href}${chapter.href}${page.href}">${page.title}</a>
                    </li>`;
                });

                offcanvas += `
                </ul>
                </li>`;

            });

            offcanvas += `
            </ul>`;

        });
        return offcanvas;
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

        const title = indexOfThisPage === -1 ? "Corso interattivo di Othello" : this.pages[indexOfThisPage].title + " @ Corso interattivo di Othello";
        const url = indexOfThisPage === -1 ? "https://othello.quimatematica.it" : "https://othello.quimatematica.it/" + this.pages[indexOfThisPage].href;

        let description = "Scopri tutte le strategie e le tattiche del gioco Othello con il nostro corso interattivo. Impara dai migliori e diventa un maestro di Othello con lezioni dettagliate e pratiche.";
        if (indexOfThisPage !== -1 && this.pages[indexOfThisPage].description != null) {
            description = this.pages[indexOfThisPage].description;
        }

        let keywords = "Othello, corso interattivo Othello, strategie Othello, tattiche Othello, gioco Othello, imparare Othello, lezioni Othello, tutorial Othello, trucchi Othello, migliorare Othello, maestro di Othello, regole Othello, regole gioco Othello"
        if (indexOfThisPage !== -1 && this.pages[indexOfThisPage].keywords != null) {
            keywords = this.pages[indexOfThisPage].keywords;
        }

        const offcanvas = this.composeOffcanvas(prepend);
        const pagination = this.composePagination(filePath, prepend, indexOfThisPage);

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
    <meta property="og:image" content="https://othello.quimatematica.it/images/banner.jpg">
    <meta property="og:type" content="article">
    <meta property="og:description" content="${description}">
    <meta property="og:locale" content="it_IT" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="othello-test.quimatematica.it">
    <meta name="twitter:url" content="${url}">
    <meta name="twitter:title" content="${title}">
    <meta name="twitter:description" content="${description}">
    <meta name="twitter:image" content="https://othello.quimatematica.it/images/banner.jpg">
    <meta name="author" content="Claudio Signorini">
	<title>${title}</title>
	<link href="${prepend}css/bootstrap.min.css" rel="stylesheet">
	<script src="${prepend}js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="${prepend}css/othello.css">
	<script type="module" src="${prepend}js/tao.js"></script>
</head>
<body>
    <nav class='navbar navbar-expand-lg bg-primary' data-bs-theme='dark'>
        <div class='container-xxl'>
            <a class='navbar-brand h1' href='${prepend}'>Othello: corso interattivo</a>
        </div>
    </nav>
    <div class='offcanvas offcanvas-start' tabindex='-1' id='section-index' aria-labelledby='offcanvasLabel'>
        <div class='offcanvas-header'>
            <h5 class='offcanvas-title' id='offcanvasLabel'>Indice</h5>
            <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Chiudi'></button>
        </div>
        <div class='offcanvas-body'>${offcanvas}
        </div>
    </div>
	<div id="othello-content" class="container-xxl mt-4">
${pagination}
${htmlContent}
${pagination}
    </div>
</body>
</html>`;
    }

    readListOfPages() {
        this.pages = [];
        this.json.sections.forEach(section => {
            this.pages.push(new Page(section.href + 'section.php', section.title, section.description, section.keywords));
            section.chapters.forEach(chapter => {
                this.pages.push(new Page(section.href + chapter.href + 'chapter.php', chapter.title, chapter.description, chapter.keywords));
                chapter.pages.forEach(page => {
                    this.pages.push(new Page(section.href + chapter.href + page.href, page.title, page.description, page.keywords));
                });
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
