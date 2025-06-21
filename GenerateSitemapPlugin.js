const fs = require('fs');
const path = require('path');

class GenerateSitemapPlugin {
    constructor(options) {
        this.options = options;
    }

    apply(compiler) {
        compiler.hooks.emit.tapAsync('GenerateSitemapPlugin', (compilation, callback) => {
            const { inputPath, outputPath } = this.options;

            // Leggi il file JSON
            const jsonContent = fs.readFileSync(inputPath, 'utf8');
            const data = JSON.parse(jsonContent);

            // Processa i dati (questa funzione è passata nelle opzioni)
            const outputContent = this.processData(data);

            // Scrivi il file di output
            const outputDir = path.dirname(outputPath);
            if (!fs.existsSync(outputDir)) {
                fs.mkdirSync(outputDir, { recursive: true });
            }
            fs.writeFileSync(outputPath, outputContent);

            callback();
        });
    }

    processData(data) {
        this.date = this.getCurrentDateFormatted();
        let outputContent = '<?xml version="1.0" encoding="UTF-8"?>\n';
        outputContent += '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n';
        const siteRoot = 'https://othello.quimatematica.it/';
        outputContent += this.buildUrlTag(siteRoot);
        data.sections.forEach(section => {
            outputContent += this.buildUrlTag(siteRoot + section.href + 'section.php');
            section.chapters.forEach(chapter => {
                outputContent += this.buildUrlTag(siteRoot + section.href + chapter.href + 'chapter.php');
                if (chapter.pages != null) {
                    chapter.pages.forEach(page => {
                        outputContent += this.buildUrlTag(siteRoot + section.href + chapter.href + page.href);
                    });
                }
            });
        });
        outputContent += '</urlset>';
        return outputContent;
    }

    buildUrlTag(href) {
        let output = '';
        output += '\t<url>\n';
        output += `\t\t<loc>${href}</loc>\n`;
        output += `\t\t<lastmod>${this.date}</lastmod>\n`;
        output += `\t\t<changefreq>weekly</changefreq>\n`;
        output += `\t\t<priority>0.8</priority>\n`;
        output += '\t</url>\n';
        return output;
    }

    getCurrentDateFormatted() {
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0'); // Mesi da 0 a 11
        const day = String(now.getDate()).padStart(2, '0');

        return `${year}-${month}-${day}`;
    }
}

module.exports = GenerateSitemapPlugin;
