import Position from "./position";
import Board from "./board";
import Score from "./score";
import PositionComment from "./positionComment";
import Square from "./square";
import Controls from "./controls";

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

        this.board = new Board(container, counter, matchFileBoardOnClick);
        this.board.setPosition(this.currentPosition);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.currentPosition);
        if (json.controls != null) {
            if (!json.controls.score) {
                this.score.scoreContainer.remove();
            }
            if (!json.controls.turn) {
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

        this.comment = new PositionComment(container);
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
        }
    }

    goToNextPosition() {
        const nextPosition = this.currentPosition.nextPosition;
        if (nextPosition != null) {
            this.board.playPosition(nextPosition);
            this.score.takeScore(nextPosition);
            this.comment.setPositionComment(nextPosition);
            this.controls.update(nextPosition);
            this.currentPosition = nextPosition;
        }
    }

    goToPreviousPosition() {
        const prevPosition = this.currentPosition.prevPosition;
        if (prevPosition != null) {
            this.board.setPosition(prevPosition);
            this.score.takeScore(prevPosition);
            this.comment.setPositionComment(prevPosition);
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
            this.comment.setPositionComment(curPosition);
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
            this.comment.setPositionComment(curPosition);
            this.controls.update(curPosition);
            this.currentPosition = curPosition;
        }
    }
}

function matchFileBoardOnClick(event) {
}
