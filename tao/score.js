import { WHITE } from './position.js';
import { BLACK } from './position.js';
import { createStone } from './board.js';

export default class Score {

    container;

    // Score container and scoreSpan elements, indexed by color (white/black).
    scoreElements = {};

    turnElement;

    constructor(container) {
        const div = document.createElement('div');
        div.classList.add('score-container');
        container.appendChild(div);

        // Create the score board.
        this.scoreElements.black = this.createScore('black', div);
        this.scoreElements.white = this.createScore('white', div);
        this.createTurnText(container);
    }

    createTurnText(container) {
        const div = document.createElement('div');
        div.classList.add('turn-container');
        container.appendChild(div);

        this.turnElement = document.createElement('div');
        this.turnElement.classList.add('turn-text')
        div.appendChild(this.turnElement)
        this.turnElement.innerHTML = 'Mossa al nero';
    }

    // Create and return score container elements for the given color.
    createScore(color, scoreContainer) {
        // The container for this player's score.
        const span = document.createElement('span');
        span.classList.add('score-wrapper');
        scoreContainer.appendChild(span);

        // The container for the stone in the score board.
        const stoneContainer = document.createElement('span');
        stoneContainer.classList.add('score-stone-container');
        stoneContainer.classList.add(color);
        span.appendChild(stoneContainer);

        // The stone itself.
        const stone = createStone();
        stoneContainer.appendChild(stone);

        // A span to contain the actual numerical score.
        const scoreSpan = document.createElement('span');
        scoreSpan.classList.add('score-text');
        span.appendChild(scoreSpan);

        // Return the container and score span.
        return {
            container: stoneContainer,
            scoreSpan,
        };
    }

    // Count the stones on the board and update the score text.
    takeScore(position) {
        const scores = position.countStones();

        for (const color in scores) {
            this.scoreElements[color].scoreSpan.textContent = scores[color];
        }

        if (position.gameOver) {
            this.turnElement.innerHTML = 'Partita terminata';
        }
        else if (position.turn == WHITE) {
            this.turnElement.innerHTML = 'Mossa al bianco';
        }
        else {
            this.turnElement.innerHTML = 'Mossa al nero';
        }
    }

}