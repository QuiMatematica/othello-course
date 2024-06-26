const fs = require('fs');
const path = require('path');

class GenerateIndexPlugin {

    constructor(options) {
        this.options = options;
    }

    apply(compiler) {
        compiler.hooks.emit.tapAsync('GenerateIndexPlugin', (compilation, callback) => {
            const jsonPath = path.resolve(__dirname, 'src/web/index.json');
            const jsonContent = fs.readFileSync(jsonPath, 'utf8');
            this.json = JSON.parse(jsonContent);

            // Leggi i file HTML ricorsivamente dal inputDir
            const indexPath = path.resolve(__dirname, 'src/pages/index.php');
            const htmlContent = fs.readFileSync(indexPath, 'utf8');

            // Componi l'HTML completo
            const composedHtml = this.composePage(htmlContent);

            // Crea le directory necessarie per il file di output
            const outputFilePath = path.resolve(__dirname, 'dist/index.php');

            // Scrivi il file HTML nella outputDir
            fs.writeFileSync(outputFilePath, composedHtml);

            callback(); // Segnala a Webpack che il plugin ha finito
        });
    }

    composePage(htmlContent) {
        let index = '';

        this.json.sections.forEach(section => {

            index += `
            <h1><a class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" href="${section.href}section.php">${section.title}</a></h1>`;

            section.chapters.forEach(chapter => {
                index += `
                <div class='col-lg-3 py-3'>
                <ul class='nav flex-column'>
                <li class='nav-item'>
                <h4>
                <a class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" href="${section.href}${chapter.href}chapter.php">${chapter.title}</a>
                </h4>
                <ul>`;

                chapter.pages.forEach(page => {
                    index += `
                    <li class='nav-item'>
                    <a class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" href="${section.href}${chapter.href}${page.href}">${page.title}</a>
                    </li>`;
                });

                index += `
                </ul>
                </li>
                </ul>
                </div>`;
            });

            index += `
            <hr>`;

        });

        return htmlContent.replace("<!-- REPLACE WITH INDEX -->", index);
    }
}

module.exports = GenerateIndexPlugin;
