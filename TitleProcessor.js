const cheerio = require('cheerio');

class TitleProcessor {
  process(html) {
    const $ = cheerio.load(html);
    $("h1").remove();
    return $.html();
  }
}

module.exports = TitleProcessor;
