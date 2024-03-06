'use strict';

import Board from './board.js';
import { animatingFlip } from './board.js';

import Score from './score.js'

const boards = []

export function init() {
    document.querySelectorAll('.staticBoard').forEach((item) => {
        const staticBoard = new StaticBoard(item, boards.length);
        boards.push(staticBoard);
    });
    document.querySelectorAll('.freeGameBoard').forEach((item) => {
        const freeGame = new FreeGameBoard(item, boards.length);
        boards.push(freeGame);
    });
}

class StaticBoard{

    container;
    counter;
    board;
    score;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;
        this.board = new Board(container, counter, staticBoardOnClick)
        this.score = new Score(container, this.board);
        this.score.takeScore();
    }

}

function staticBoardOnClick(event) {
    return;
}

class FreeGameBoard {

    container;
    counter;
    board;
    score;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;
        this.board = new Board(container, counter, freeGameBoardOnClick)
        this.score = new Score(container, this.board);
        this.score.takeScore();
    }

}

function freeGameBoardOnClick(event) {
    // Ignore if we're still animating the last move.
    if (animatingFlip) {
        return;
    }

    // Find the coordinates of the clicked square.
    const div = event.currentTarget;
    const {counter, x, y} = div.dataset;  // NOTE: strings, not ints
    console.log("click on ", counter, x, y);
    const freeGameBoard = boards[counter]
    const ok = freeGameBoard.board.playStone(parseInt(x), parseInt(y));
    // If the play was valid, update the score.
    if (ok) {
        freeGameBoard.score.takeScore();
    }
}
