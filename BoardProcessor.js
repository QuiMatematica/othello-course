const cheerio = require('cheerio');

class BoardProcessor {

    constructor() {
        this.boardTypeMap = {};
        this.boardTypeMap['show'] = 'match-file-board';
        this.boardTypeMap['quiz'] = 'sequence-board';

        this.quizList = [];
    }

    process(html, relativePath, showQuiz) {
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

            // Board di tipo quiz: aggiungo alla lista dei quiz.
            if (type === 'quiz' && showQuiz) {
                const normalizedPath = relativePath.replace(/\\/g, '/');
                const lastSlashIndex = normalizedPath.lastIndexOf('/');
                const dirPath = lastSlashIndex >= 0 ? normalizedPath.substring(0, lastSlashIndex + 1) : '';
                const filepath = dirPath + file;
                const quiz = {"file": filepath, "page": normalizedPath}
                this.quizList.push(quiz);
            }
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