const cheerio = require('cheerio');

class BoardProcessor {

    constructor() {
        this.boardTypeMap = {};
        this.boardTypeMap['show'] = 'match-file-board';
        this.boardTypeMap['quiz'] = 'sequence-board';
    }

    process(html) {
        const labelMap = {};
        let imageCounter = 1;

        const $ = cheerio.load(html, {
            xmlMode: false,        // 🔴 HTML mode → niente <div/> ma <div></div>
            decodeEntities: false, // 🔴 non ricodifica &egrave; in &amp;egrave;
            lowerCaseTags: false,  // opzionale: mantiene i tag così come sono scritti
            recognizeSelfClosing: true // opzionale: interpreta <br/> come <br>
        });

        $('board[data-type][data-label]').each((_, el) => {
            const $board = $(el);

            const type = $board.attr('data-type');
            const boardClass = this.boardTypeMap[type];

            const label = $board.attr('data-label');

            if (labelMap.hasOwnProperty(label)) {
                throw new Error(`Label duplicata trovata: "${label}"`);
            }

            const number = imageCounter++;
            labelMap[label] = number;

            const file = $board.attr('data-file');
            const caption = $board.attr('data-caption') || '';

            const boardHtml = `
                <div class="card mx-auto board-card my-3">
                    <div class="card-body">
                        <div class="${boardClass}" data-file="${file}"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma ${number}. ${caption}
                    </div>
                </div>
            `;

            $board.replaceWith(boardHtml);
        })

        // Sostituzione riferimenti nel testo
        $('[data-board-ref]').each(function () {
            const $ref = $(this);
            const refLabel = $ref.attr('data-board-ref');

            if (!labelMap.hasOwnProperty(refLabel)) {
                throw new Error(`Riferimento a label non definita: "${refLabel}"`);
            }

            const refNumber = labelMap[refLabel];
            $ref.text(`${refNumber}`);
        });

        return $('body').html();
    }
}

module.exports = BoardProcessor;