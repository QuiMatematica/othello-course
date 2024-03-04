'use strict';

import Board from './board.js';
import { animatingFlip } from './board.js';

const boards = []

export function init() {
    const matches = document.querySelectorAll('.freeGameBoard');
    matches.forEach((item) => {
        const freeGame = new FreeGameBoard(item, boards.length);
        boards.push(freeGame);
    });
}

class FreeGameBoard {

    container;
    counter;
    board;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;
        this.board = new Board(container, counter, freeGameBoardOnClick)
    }

}

function freeGameBoardOnClick(event) {
//        // Ignore if the game is over.
//        if (gameOver) {
//            return;
//        }

    // Ignore if we're still animating the last move.
    if (animatingFlip) {
        return;
    }

    // Find the coordinates of the clicked square.
    const div = event.currentTarget;
    const {counter, x, y} = div.dataset;  // NOTE: strings, not ints
    console.log("click on ", counter, x, y);
    const aBoard = boards[counter]
    const ok = aBoard.board.playStone(parseInt(x), parseInt(y))

    // If the play was valid, update the score and switch turns.
    // if (ok) {
        // takeScore();
    // }
}
