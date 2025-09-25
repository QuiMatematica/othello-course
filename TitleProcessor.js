const cheerio = require('cheerio');

class TitleProcessor {
    process(html) {
        const $ = cheerio.load(html, {
            xmlMode: false,        // 🔴 HTML mode → niente <div/> ma <div></div>
            decodeEntities: false, // 🔴 non ricodifica &egrave; in &amp;egrave;
            lowerCaseTags: false,  // opzionale: mantiene i tag così come sono scritti
            recognizeSelfClosing: true // opzionale: interpreta <br/> come <br>
        });
        $("h1").remove();
        return $('body').html();
    }
}

module.exports = TitleProcessor;
