import { WHITE } from './position.js';
import { createStone } from './page.js';

export default class Score {

    scoreContainer;
    scoreElements = {};

    turnContainer;
    turnElement;

    constructor(container) {
        this.scoreContainer = document.createElement('div');
        this.scoreContainer.classList.add('score-container');
        container.appendChild(this.scoreContainer);

        // Create the score board.
        this.scoreElements.black = this.createScore('black', this.scoreContainer);
        this.scoreElements.white = this.createScore('white', this.scoreContainer);
        this.createTurnText(container);
    }

    createTurnText(container) {
        this.turnElement = document.createElement('div');
        this.turnElement.classList.add('turn-text');
        this.turnElement.innerHTML = 'Mossa al nero';

        this.turnContainer = document.createElement('div');
        this.turnContainer.classList.add('turn-container');
        this.turnContainer.appendChild(this.turnElement);

        container.appendChild(this.turnContainer);
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
        else if (position.turn === WHITE) {
            this.turnElement.innerHTML = 'Mossa al bianco';
        }
        else {
            this.turnElement.innerHTML = 'Mossa al nero';
        }
    }

}