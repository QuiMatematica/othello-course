import Position from "./position";
import Board from "./board";
import Score from "./score";
import PositionComment from "./positionComment";
import Square from "./square";
import Controls from "./controls";
import {boards} from "./page";
import MatchData from "./matchData";

export default class MatchFileBoard {

    currentPosition;
    board;
    score;
    controls;
    comment;

    constructor(container, counter) {
        const matchFile = container.dataset['file'];
        fetch(matchFile)
            .then((response) => response.json())
            .then((json) => this.readMatch(json, container, counter));
    }

    readMatch(json, container, counter) {
        this.currentPosition = Position.getPositionFromJSON(json);
        this.board = new Board(container, counter, json.stoneShape, matchFileBoardOnClick);
        this.board.setPosition(this.currentPosition);

        if (json.controls != null) {
            if (json.controls.match) {
                new MatchData(container, json)
            }
        }

        this.score = new Score(container, this.board);
        this.score.takeScore(this.currentPosition);
        if (json.controls != null) {
            if (json.controls.score != null && !json.controls.score) {
                this.score.scoreContainer.remove();
            }
            if (json.controls.turn != null && !json.controls.turn) {
                this.score.turnContainer.remove();
            }
        }

        if (this.currentPosition.nextPosition != null) {
            this.controls = new Controls(container, counter);
            this.controls.addFirstButton();
            if (this.currentPosition.nextPosition.nextPosition != null) {
                this.controls.addPrevButton();
            }
            this.controls.addNextButton();
            if (this.currentPosition.nextPosition.nextPosition != null) {
                this.controls.addLastButton();
            }
            this.controls.update(this.currentPosition);
        }

        if (json.controls == null || json.controls.comment == null || json.controls.comment) {
            if (this.controls == null) {
                if (this.currentPosition.comment != null) {
                    this.comment = new PositionComment(container);
                    this.comment.setPositionComment(this.currentPosition);
                }
            }
            else {
                this.comment = new PositionComment(container);
                this.comment.setPositionComment(this.currentPosition);
                //this.addInstructions();
            }
        }

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
                    if (entry.square != null) {
                        const square = Square.fromString(entry.square);
                        this.board.addLetter(square.x, square.y, entry.value);
                    }
                    else {
                        entry.squares.forEach((sq) => {
                            const square = Square.fromString(sq);
                            this.board.addLetter(square.x, square.y, entry.value);
                        })
                    }
                });
            }
            if (json.add['rects'] != null) {
                json.add.rects.forEach((entry) => {
                    const ul = Square.fromString(entry.ul);
                    const dr = Square.fromString(entry.dr);
                    this.board.addRect(ul.x, ul.y, dr.x, dr.y, entry.color);
                })
            }
            if (json.add['borders'] != null) {
                json.add.borders.forEach((entry) => {
                    const ul = Square.fromString(entry.ul);
                    const dr = Square.fromString(entry.dr);
                    this.board.addBorder(ul.x, ul.y, dr.x, dr.y, entry.color);
                })
            }
            if (json.add['arrows'] != null) {
                json.add.arrows.forEach((entry) => {
                    this.board.addArrow(entry.start[0], entry.start[1], entry.end[0], entry.end[1], entry.color);
                })
            }
            if (json.add['lines'] != null) {
                json.add.lines.forEach((entry) => {
                    this.board.addLine(entry.start[0], entry.start[1], entry.end[0], entry.end[1], entry.color);
                })
            }
        }
    }

    goToNextPosition() {
        const nextPosition = this.currentPosition.nextPosition;
        if (nextPosition != null) {
            this.board.playPosition(nextPosition);
            this.score.takeScore(nextPosition);
            if (this.comment != null) {
                this.comment.setPositionComment(nextPosition);
            }
            //this.addInstructions();
            this.controls.update(nextPosition);
            this.currentPosition = nextPosition;
        }
    }

    goToPreviousPosition() {
        const prevPosition = this.currentPosition.prevPosition;
        if (prevPosition != null) {
            this.board.setPosition(prevPosition);
            this.score.takeScore(prevPosition);
            if (this.comment != null) {
                this.comment.setPositionComment(prevPosition);
            }
            //this.addInstructions();
            this.controls.update(prevPosition);
            this.currentPosition = prevPosition;
        }
    }

    goToFirstPosition() {
        let curPosition = this.currentPosition;
        let prevPosition = curPosition.prevPosition;
        if (prevPosition != null) {
            while (prevPosition != null) {
                curPosition = prevPosition;
                prevPosition = curPosition.prevPosition;
            }
            this.board.setPosition(curPosition);
            this.score.takeScore(curPosition);
            if (this.comment != null) {
                this.comment.setPositionComment(curPosition);
            }
            //this.addInstructions();
            this.controls.update(curPosition);
            this.currentPosition = curPosition;
        }
    }

    goToLastPosition() {
        let curPosition = this.currentPosition;
        if (curPosition.nextPosition != null) {
            while (curPosition.nextPosition != null) {
                curPosition = curPosition.nextPosition;
            }
            this.board.setPosition(curPosition);
            this.score.takeScore(curPosition);
            if (this.comment != null) {
                this.comment.setPositionComment(curPosition);
            }
            //this.addInstructions();
            this.controls.update(curPosition);
            this.currentPosition = curPosition;
        }
    }

    // addInstructions() {
    //     let comment = '<br><i class="bi bi-stars"></i><br>';
    //     comment += 'Clicca sulle frecce per seguire la sequenza.';
    //     this.comment.addComment(comment);
    // }
}

function matchFileBoardOnClick(event) {
    const div = event.currentTarget;
    const {counter, x, y} = div.dataset;  // NOTE: strings, not ints
    const board = boards[counter];
    if (parseInt(x) < 4) {
        board.goToPreviousPosition();
    }
    else {
        board.goToNextPosition();
    }
}
