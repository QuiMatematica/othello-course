'use strict';

import Position from './position.js';
import { getPosition } from './position.js';
import { getStartingPosition } from './position.js';
import { Square } from './position.js';

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
    document.querySelectorAll('.matchFileBoard').forEach((item) => {
        const freeGame = new MatchFileBoard(item, boards.length);
        boards.push(freeGame);
    });
}

class StaticBoard {

    container;
    counter;

    position;
    board;
    score;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;

        this.position = getPosition(container);
        this.board = new Board(container, counter, staticBoardOnClick)
        this.board.setPosition(this.position);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.position);
    }

}

function staticBoardOnClick(event) {
    return;
}

class FreeGameBoard {

    container;
    counter;

    position;
    board;
    score;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;

        this.position = getStartingPosition();
        this.board = new Board(container, counter, freeGameBoardOnClick)
        this.board.setPosition(this.position);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.position);
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
    const freeGameBoard = boards[counter];
    const square = new Square(parseInt(x), parseInt(y));
    const nextPosition = freeGameBoard.position.playStone(square);
    // If the play was valid, update the score.
    if (nextPosition != null) {
        freeGameBoard.position = nextPosition;
        freeGameBoard.board.playPosition(freeGameBoard.position);
        freeGameBoard.score.takeScore(freeGameBoard.position);
    }
}

class MatchFileBoard {

    container;
    counter;
    board;
    score;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;
        // staticBoardOnClick perché non deve esserci interazione sulla scacchiera
        this.board = new Board(container, counter, staticBoardOnClick)
        this.score = new Score(container, this.board);
        this.score.takeScore(this.position);
        this.match = new Match(container)
    }

}

class Match {

    container;

    constructor(container) {
        this.container = container;
        const matchFile = container.dataset['file'];
        let json;
        fetch(matchFile)
            .then((response) => response.json())
            .then((json) => readMatch(json));
        this.buildControls();
    }

    readMatch(json) {

    }

    buildControls() {
        const next = document.createElement("button");
        next.appendChild(document.createTextNode(">"));

        const div = document.createElement("div");
        div.classList.add("button-wrapper")
        div.appendChild(next);

        this.container.appendChild(div);
    }

}