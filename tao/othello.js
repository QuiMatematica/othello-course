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

    startPosition;
    currentPosition;
    board;
    score;
    comment;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;

        this.startPosition = getStartingPosition();
        this.currentPosition = this.startPosition;
        // staticBoardOnClick perché non deve esserci interazione sulla scacchiera
        this.board = new Board(container, counter, staticBoardOnClick)
        this.board.setPosition(this.startPosition);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.startPosition);

        const begin = document.createElement("button");
        begin.dataset.counter = this.counter;
        begin.appendChild(document.createTextNode("|<"));
        begin.addEventListener('click', matchOnBeginClick);

        const prev = document.createElement("button");
        prev.dataset.counter = this.counter;
        prev.appendChild(document.createTextNode("<"));
        prev.addEventListener('click', matchOnPrevClick);

        const next = document.createElement("button");
        next.dataset.counter = this.counter;
        next.appendChild(document.createTextNode(">"));
        next.addEventListener('click', matchOnNextClick);

        const end = document.createElement("button");
        end.dataset.counter = this.counter;
        end.appendChild(document.createTextNode(">|"));
        end.addEventListener('click', matchOnEndClick);

        const div = document.createElement("div");
        div.classList.add("button-wrapper")
        div.appendChild(begin);
        div.appendChild(prev);
        div.appendChild(next);
        div.appendChild(end);

        this.container.appendChild(div);

        this.comment = new PositionComment(this.container);

        const matchFile = container.dataset['file'];
        let json;
        fetch(matchFile)
            .then((response) => response.json())
            .then((json) => this.readMatch(json));
    }

    readMatch(json) {
        var curPosition = this.startPosition;
        json.moves.forEach((move) => {
            const square = Square.fromString(move);
            const nextPosition = curPosition.playStone(square)
            curPosition = nextPosition;
            curPosition.comment = json[move];
        });
    }

}

class PositionComment {

    div;

    constructor(container) {
        this.div = document.createElement("div");
        this.div.classList.add('comment-text');
        container.appendChild(this.div)
    }

    setComment(comment) {
        if (comment == null) {
            this.div.innerHTML = "";
        }
        else {
            this.div.innerHTML = comment;
        }
    }

}

function matchOnNextClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    const nextPosition = matchFileBoard.currentPosition.nextPosition;
    if (nextPosition != null) {
        matchFileBoard.board.playPosition(nextPosition);
        matchFileBoard.score.takeScore(nextPosition);
        matchFileBoard.comment.setComment(nextPosition.comment);
        matchFileBoard.currentPosition = nextPosition;
    }
}

function matchOnPrevClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    const prevPosition = matchFileBoard.currentPosition.prevPosition;
    if (prevPosition != null) {
        matchFileBoard.board.setPosition(prevPosition);
        matchFileBoard.score.takeScore(prevPosition);
        matchFileBoard.comment.setComment(prevPosition.comment);
        matchFileBoard.currentPosition = prevPosition;
    }
}

function matchOnBeginClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    var curPosition = matchFileBoard.currentPosition;
    var prevPosition = curPosition.prevPosition;
    if (prevPosition != null) {
        while (prevPosition != null) {
            curPosition = prevPosition;
            prevPosition = curPosition.prevPosition;
        }
        matchFileBoard.board.setPosition(curPosition);
        matchFileBoard.score.takeScore(curPosition);
        matchFileBoard.comment.setComment(curPosition.comment);
        matchFileBoard.currentPosition = curPosition;
    }
}

function matchOnEndClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    var curPosition = matchFileBoard.currentPosition;
    if (curPosition.nextPosition != null) {
        while (curPosition.nextPosition != null) {
            curPosition = curPosition.nextPosition;
        }
        matchFileBoard.board.setPosition(curPosition);
        matchFileBoard.score.takeScore(curPosition);
        matchFileBoard.comment.setComment(curPosition.comment);
        matchFileBoard.currentPosition = curPosition;
    }
}
