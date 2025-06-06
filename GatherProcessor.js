const cheerio = require('cheerio');

class GatherProcessor {
  process(html) {
    const $ = cheerio.load(html);

    $('gather').each((_, el) => {
      const $gather = $(el);
      const $boards = $gather.children('board');

      const count = $boards.length;

      // Calcolo classi Bootstrap in base al numero di board
      const colClass =
        count >= 3 ? 'row-cols-md-3' :
        count === 2 ? 'row-cols-md-2' :
        'row-cols-md-1';

      const $row = $(`<div class="row row-cols-1 ${colClass} g-4"></div>`);

      $boards.each((_, boardEl) => {
        const $col = $('<div class="col"></div>');
        $col.append($(boardEl));
        $row.append($col);
      });

      $gather.replaceWith($row);
    });

    return $.html();
  }
}

module.exports = GatherProcessor;
