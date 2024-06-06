'use strict';

import Position from './position.js';
import { Square } from './position.js';

import Board from './board.js';
import { animatingFlip } from './board.js';

import Score from './score.js'

const boards = []

function init() {
    document.querySelectorAll('.free-game-board').forEach((item) => {
        const freeGame = new FreeGameBoard(item, boards.length);
        boards.push(freeGame);
    });
    document.querySelectorAll('.match-file-board').forEach((item) => {
        const matchFile = new MatchFileBoard(item, boards.length);
        boards.push(matchFile);
    });
    document.querySelectorAll('.click-on-board').forEach((item) => {
        const clickOn = new ClickOnBoard(item, boards.length);
        boards.push(clickOn);
    });
    document.querySelectorAll('.sequence-board').forEach((item) => {
        const sequence = new SequenceBoard(item, boards.length);
        boards.push(sequence);
    });
    document.querySelectorAll('.referee-board').forEach((item) => {
        const referee = new RefereeBoard(item, boards.length);
        boards.push(referee);
    });
}

module.exports = init;

function staticBoardOnClick(event) {
}

class RefereeBoard {

    board;
    score;

    constructor(container, counter) {
        const emptyPosition = Position.getStartingPosition();
        this.board = new Board(container, counter, staticBoardOnClick);
        this.board.setPosition(emptyPosition);
        this.score = new Score(container, this.board);
        this.score.takeScore(emptyPosition);

        const matchFile = container.dataset['file'];
        let json;
        fetch(matchFile)
            .then((response) => response.json())
            .then((json) => this.readMatch(json));
    }

    readMatch(json) {
        var position = Position.getStartingPosition();
        const txt = json.txt;
        for (var i = 0; i*2 < txt.length; i++) {
            const s = txt.substring(i*2, i*2 + 2);
            const square = Square.fromString(s);
            this.board.setStone(square.x, square.y, position.turn);
            this.board.addLetter(square.x, square.y, (i + 1).toString());
            position = position.playStone(square);
        }
        this.score.takeScore(position);
    }

}

class SequenceBoard {

    currentPosition;
    board;
    score;
    controls;
    comment;
    humanColor;

    constructor(container, counter) {
        this.currentPosition = Position.getEmptyPosition();
        this.board = new Board(container, counter, sequenceBoardOnClick);
        this.board.setPosition(this.currentPosition);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.currentPosition);
        this.controls = new SequenceControls(container, counter);
        this.comment = new PositionComment(container);

        const matchFile = container.dataset['file'];
        let json;
        fetch(matchFile)
            .then((response) => response.json())
            .then((json) => this.readMatch(json));
    }

    readMatch(json) {
        this.currentPosition = Position.getPositionFromJSON(json);
        this.currentPosition.comment = json.comment;
        this.humanColor = this.currentPosition.turn;
        var curPosition = this.currentPosition;

        json.moves.forEach((move) => {
            const square = Square.fromString(move.move);
            curPosition = curPosition.playStone(square);
            curPosition.comment = move.comment;
        });
        if (json.moves.length < 2) {
            this.controls.prev.remove();
            this.controls.computer.remove();
        }

        this.board.setPosition(this.currentPosition);
        this.score.takeScore(this.currentPosition);
        this.controls.update(this.currentPosition, this.humanColor);
        this.comment.setPositionComment(this.currentPosition);
    }

    moveComputer() {
        const nextPosition = this.currentPosition.nextPosition;
        if (nextPosition != null) {
            this.board.playPosition(nextPosition);
            this.score.takeScore(nextPosition);
             if (nextPosition.nextPosition == null && nextPosition.comment == null) {
                this.comment.setComment("<span class=\"fw-bold\">Sequenza terminata.</span>");
            }
            else {
                this.comment.setPositionComment(nextPosition);
            }
            this.controls.update(nextPosition, this.humanColor);
            this.currentPosition = nextPosition;
        }
    }

    moveHuman(square) {
        if (this.currentPosition.turn === this.humanColor) {
            const expected = this.currentPosition.nextPosition.played;
            if (square.x === expected.x && square.y === expected.y) {
                const nextPosition = this.currentPosition.nextPosition;
                this.board.playPosition(nextPosition);
                this.score.takeScore(nextPosition);
                if (nextPosition.nextPosition == null && nextPosition.comment == null) {
                    this.comment.setComment("<span class=\"fw-bold\">Sequenza terminata.</span>");
                }
                else {
                    this.comment.setPositionComment(nextPosition);
                }
                this.controls.update(nextPosition, this.humanColor);
                this.currentPosition = nextPosition;
            }
            else {
                const correctPosition = this.currentPosition.nextPosition;
                const wrongPosition = this.currentPosition.playStone(square);
                this.board.playPosition(wrongPosition);
                this.score.takeScore(wrongPosition);
                this.controls.wrong();
                this.comment.setComment("<span class=\"text-danger fw-bold\">Mossa errata.</span>");
                this.currentPosition.nextPosition = correctPosition;
                this.currentPosition = wrongPosition;
            }
        }
    }

    goToPreviousPosition() {
        const prevPosition = this.currentPosition.prevPosition;
        if (prevPosition != null) {
            this.board.setPosition(prevPosition);
            this.score.takeScore(prevPosition);
            this.comment.setPositionComment(prevPosition);
            this.controls.update(prevPosition, this.humanColor);
            this.currentPosition = prevPosition;
        }
    }

    goToFirstPosition() {
        var curPosition = this.currentPosition;
        var prevPosition = curPosition.prevPosition;
        if (prevPosition != null) {
            while (prevPosition != null) {
                curPosition = prevPosition;
                prevPosition = curPosition.prevPosition;
            }
            this.board.setPosition(curPosition);
            this.score.takeScore(curPosition);
            this.comment.setPositionComment(curPosition);
            this.controls.update(curPosition, this.humanColor);
            this.currentPosition = curPosition;
        }
    }

}

class SequenceControls {

    buttonsContainer;
    first;
    prev;
    computer;

    constructor(container, counter) {
        this.first = document.createElement("button");
        this.first.classList.add("btn");
        this.first.classList.add("btn-primary");
        this.first.dataset.counter = counter;
        this.first.appendChild(document.createTextNode("|<"));
        this.first.addEventListener('click', sequenceOnFirstClick);

        this.prev = document.createElement("button");
        this.prev.classList.add("btn");
        this.prev.classList.add("btn-primary");
        this.prev.dataset.counter = counter;
        this.prev.appendChild(document.createTextNode("<"));
        this.prev.addEventListener('click', sequenceOnPrevClick);

        this.computer = document.createElement("button");
        this.computer.classList.add("btn");
        this.computer.classList.add("btn-primary");
        this.computer.dataset.counter = counter;
        this.computer.appendChild(document.createTextNode("Muove il computer"));
        this.computer.addEventListener('click', sequenceOnComputerClick);

        const buttonGroup = document.createElement("div");
        buttonGroup.classList.add("btn-group");
        buttonGroup.classList.add("btn-group-sm");
        buttonGroup.setAttribute("role", "group");
        buttonGroup.setAttribute("aria-label", "Gruppo di controlli");
        buttonGroup.appendChild(this.first);
        buttonGroup.appendChild(this.prev);
        buttonGroup.appendChild(this.computer);

        this.buttonsContainer = document.createElement("div");
        this.buttonsContainer.classList.add("text-center");
        this.buttonsContainer.appendChild(buttonGroup);

        container.appendChild(this.buttonsContainer);
    }

    update(position, humanColor) {
        this.first.disabled = (position.prevPosition == null);
        this.prev.disabled = (position.prevPosition == null);
        this.computer.disabled = (position.nextPosition == null || position.turn == humanColor);
    }

    wrong(position, humanColor) {
        this.first.disabled = false;
        this.prev.disabled = false;
        this.computer.disabled = true;
    }

}

function sequenceOnFirstClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const sequenceBoard = boards[counter];
    sequenceBoard.goToFirstPosition();
}

function sequenceOnPrevClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const sequenceBoard = boards[counter];
    sequenceBoard.goToPreviousPosition();
}

function sequenceOnComputerClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const sequenceBoard = boards[counter];
    sequenceBoard.moveComputer();
}

function sequenceBoardOnClick(event) {
    // Ignore if we're still animating the last move.
    if (animatingFlip) {
        return;
    }

    // Find the coordinates of the clicked square.
    const div = event.currentTarget;
    const {counter, x, y} = div.dataset;  // NOTE: strings, not ints
    const sequenceBoard = boards[counter];
    const square = new Square(parseInt(x), parseInt(y));
    sequenceBoard.moveHuman(square);
}

class ClickOnBoard {

    container;
    counter;

    position;
    board;
    comment;
    controls;

    correct;
    correctCount;
    clicked;

    constructor(container, counter) {
        this.currentPosition = Position.getEmptyPosition();
        this.board = new Board(container, counter, clickOnClick);
        this.board.setPosition(this.currentPosition);
        this.comment = new PositionComment(container);
        this.controls = new ClickOnControls(container, counter);

        this.correct = [];
        this.clicked = [];
        this.correctCount = 0;

        const matchFile = container.dataset['file'];
        let json;
        fetch(matchFile)
            .then((response) => response.json())
            .then((json) => this.readMatch(json));
    }

    readMatch(json) {
        this.currentPosition = Position.getPositionFromJSON(json);
        this.board.setPosition(this.currentPosition);

        json.correct.forEach((notation) => {
            const square = Square.fromString(notation);
            this.correct.push(square);
        })

        this.updateComment();
        this.controls.reset.disabled = true;
    }

    checkClick(square) {
        if (this.clicked.findIndex(c => (c.x == square.x && c.y == square.y)) == -1) {
            const squareIndex = this.correct.findIndex(c => (c.x == square.x && c.y == square.y));
            if (squareIndex > -1) {
                this.board.addLetter(square.x, square.y, String.fromCharCode(10003));
                this.correctCount++;
                this.updateComment();
            }
            else {
                this.board.addLetter(square.x, square.y, String.fromCharCode(10007));
            }
            this.clicked.push(square);
            this.controls.reset.disabled = false;
        }
    }

    reset() {
        this.clicked.forEach((square) => {
            this.board.removeLetter(square.x, square.y);
        });
        this.updateComment();
        this.clicked = [];
        this.correctCount = 0;
        this.controls.reset.disabled = true;
    }

    updateComment() {
        const cmd = "Risposte corrette: " + this.correctCount + "<br>Risposte attese: " + this.correct.length;
        this.comment.setComment(cmd);
    }

}

function clickOnClick(event) {
    // Find the coordinates of the clicked square.
    const div = event.currentTarget;
    const {counter, x, y} = div.dataset;  // NOTE: strings, not ints
    const clickOnBoard = boards[counter];
    const square = new Square(parseInt(x), parseInt(y));
    clickOnBoard.checkClick(square);
}

function resetClickOnClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const clickOnBoard = boards[counter];
    clickOnBoard.reset();
}

class ClickOnControls {

    buttonsContainer;
    reset;

    constructor(container, counter) {
        this.reset = document.createElement("button");
        this.reset.classList.add("btn");
        this.reset.classList.add("btn-primary");
        this.reset.dataset.counter = counter;
        this.reset.appendChild(document.createTextNode("Ricomincia"));
        this.reset.addEventListener('click', resetClickOnClick);

        const buttonGroup = document.createElement("div");
        buttonGroup.classList.add("btn-group");
        buttonGroup.classList.add("btn-group-sm");
        buttonGroup.setAttribute("role", "group");
        buttonGroup.setAttribute("aria-label", "Gruppo di controlli");
        buttonGroup.appendChild(this.reset);

        this.buttonsContainer = document.createElement("div");
        this.buttonsContainer.classList.add("text-center");
        this.buttonsContainer.appendChild(buttonGroup);

        container.appendChild(this.buttonsContainer);
    }

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

        this.position = Position.getStartingPosition();
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

    currentPosition;
    board;
    score;
    controls;
    comment;

    constructor(container, counter) {
        this.currentPosition = Position.getEmptyPosition();
        this.board = new Board(container, counter, staticBoardOnClick);
        this.board.setPosition(this.currentPosition);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.currentPosition);
        this.controls = new MatchControls(container, counter);
        this.comment = new PositionComment(container);

        const matchFile = container.dataset['file'];
        let json;
        fetch(matchFile)
            .then((response) => response.json())
            .then((json) => this.readMatch(json));
    }

    readMatch(json) {
        this.currentPosition = Position.getPositionFromJSON(json);
        this.currentPosition.comment = json.comment;
        var curPosition = this.currentPosition;
        if (json.moves != null) {
            json.moves.forEach((move) => {
                const square = Square.fromString(move.move);
                curPosition = curPosition.playStone(square);
                curPosition.comment = move.comment;
            });
            if (json.moves.length < 2) {
                this.controls.prev.remove();
                this.controls.last.remove();
            }
        }
        else {
            this.controls.buttonsContainer.remove();
        }
        if (json.controls != null) {
            if (!json.controls.previous) {
                this.controls.prev.remove();
            }
            if (!json.controls.last) {
                this.controls.last.remove();
            }
            if (!json.controls.score) {
                this.score.scoreContainer.remove();
            }
            if (!json.controls.turn) {
                this.score.turnContainer.remove();
            }
        }
        this.board.setPosition(this.currentPosition);
        this.score.takeScore(this.currentPosition);
        this.controls.update(this.currentPosition);
        this.comment.setPositionComment(this.currentPosition);

        if (json.add != null) {
            if (json.add["a-squares"]) {
                this.board.addASquares();
            }
            if (json.add["b-squares"]) {
                this.board.addBSquares();
            }
            if (json.add["c-squares"]) {
                this.board.addCSquares();
            }
            if (json.add["x-squares"]) {
                this.board.addXSquares();
            }
            if (json.add["squares"] != null) {
                json.add.squares.forEach((entry) => {
                    const square = Square.fromString(entry.square);
                    this.board.addLetter(square.x, square.y, entry.value);
                });
            }
        }
    }

}

class MatchControls {

    buttonsContainer;
    first;
    prev;
    next;
    last;

    constructor(container, counter) {
        this.first = document.createElement("button");
        this.first.classList.add("btn");
        this.first.classList.add("btn-primary");
        this.first.dataset.counter = counter;
        this.first.appendChild(document.createTextNode("|<"));
        this.first.addEventListener('click', matchOnFirstClick);

        this.prev = document.createElement("button");
        this.prev.classList.add("btn");
        this.prev.classList.add("btn-primary");
        this.prev.dataset.counter = counter;
        this.prev.appendChild(document.createTextNode("<"));
        this.prev.addEventListener('click', matchOnPrevClick);

        this.next = document.createElement("button");
        this.next.classList.add("btn");
        this.next.classList.add("btn-primary");
        this.next.dataset.counter = counter;
        this.next.appendChild(document.createTextNode(">"));
        this.next.addEventListener('click', matchOnNextClick);

        this.last = document.createElement("button");
        this.last.classList.add("btn");
        this.last.classList.add("btn-primary");
        this.last.dataset.counter = counter;
        this.last.appendChild(document.createTextNode(">|"));
        this.last.addEventListener('click', matchOnEndClick);

        const buttonGroup = document.createElement("div");
        buttonGroup.classList.add("btn-group");
        buttonGroup.classList.add("btn-group-sm");
        buttonGroup.setAttribute("role", "group");
        buttonGroup.setAttribute("aria-label", "Gruppo di controlli");
        buttonGroup.appendChild(this.first);
        buttonGroup.appendChild(this.prev);
        buttonGroup.appendChild(this.next);
        buttonGroup.appendChild(this.last);

        this.buttonsContainer = document.createElement("div");
        this.buttonsContainer.classList.add("text-center");
        this.buttonsContainer.appendChild(buttonGroup);

        container.appendChild(this.buttonsContainer);
    }

    update(position) {
        this.first.disabled = (position.prevPosition == null);
        this.prev.disabled = (position.prevPosition == null);
        this.next.disabled = (position.nextPosition == null);
        this.last.disabled = (position.nextPosition == null);
    }

}

class PositionComment {

    div;

    constructor(container) {
        this.div = document.createElement("div");
        this.div.classList.add('text-center');
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

    setPositionComment(position) {
        if (position.comment == null) {
            this.div.innerHTML = "";
        }
        else {
            this.div.innerHTML = position.comment;
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
        matchFileBoard.comment.setPositionComment(nextPosition);
        matchFileBoard.controls.update(nextPosition);
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
        matchFileBoard.comment.setPositionComment(prevPosition);
        matchFileBoard.controls.update(prevPosition);
        matchFileBoard.currentPosition = prevPosition;
    }
}

function matchOnFirstClick(event) {
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
        matchFileBoard.comment.setPositionComment(curPosition);
        matchFileBoard.controls.update(curPosition);
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
        matchFileBoard.comment.setPositionComment(curPosition);
        matchFileBoard.controls.update(curPosition);
        matchFileBoard.currentPosition = curPosition;
    }
}

