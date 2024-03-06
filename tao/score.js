import Board from './board.js';
import { createStone } from './board.js';

export default class Score {

    container;
    board;

    // Score container and scoreSpan elements, indexed by color (white/black).
    scoreElements = {};

    turnElement;

    constructor(container, board) {
        this.container = container;
        this.board = board;
        // Create the score board.
        this.scoreElements.black = this.createScore('black');
        this.scoreElements.white = this.createScore('white');
        this.createTurnText();
    }

    createTurnText() {
        const div = document.createElement('div');
        div.classList.add('turn-wrapper')
        this.container.appendChild(div);

        this.turnElement = document.createElement('div');
        this.turnElement.classList.add('turn-text')
        div.appendChild(this.turnElement)
        this.turnElement.innerHTML = 'Mossa al nero';
    }

    // Create and return score container elements for the given color.
    createScore(color) {
        // The container for this player's score.
        const span = document.createElement('span');
        span.classList.add('score-wrapper');
        this.container.appendChild(span);

        // The container for the stone in the score board.
        const stoneContainer = document.createElement('span');
        stoneContainer.classList.add('score-stone-container');
        stoneContainer.classList.add(color);
        span.appendChild(stoneContainer);

        // The stone itself.
        const stone = createStone();
        stoneContainer.appendChild(stone);

        // Add a message container on top of the stone.
        const msgContainer = document.createElement('div');
        msgContainer.classList.add('msg-container');
        stoneContainer.appendChild(msgContainer);

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
    takeScore() {
        const scores = { black: 0, white: 0 };

        for (let y = 0; y < 8; ++y) {
            for (let x = 0; x < 8; ++x) {
                if (this.board.grid[y][x].classList.contains('black')) {
                    scores.black += 1;
                }

                if (this.board.grid[y][x].classList.contains('white')) {
                    scores.white += 1;
                }
            }
        }

        for (const color in scores) {
            this.scoreElements[color].scoreSpan.textContent = scores[color];
        }

        // If the board is full, the game is over.
        if (scores.black + scores.white == 64) {
            this.board.endGame();
        }

        if (this.board.gameOver) {
            this.turnElement.innerHTML = 'Partita terminata';
        }
        else if (this.board.turn == 'white') {
            this.turnElement.innerHTML = 'Mossa al bianco';
        }
        else {
            this.turnElement.innerHTML = 'Mossa al nero';
        }
    }

}