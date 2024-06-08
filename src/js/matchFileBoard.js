import Position from "./position";
import Board from "./board";
import Score from "./score";
import MatchControls from "./matchControls";
import PositionComment from "./positionComment";
import Square from "./square";

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

        let curPosition = this.currentPosition;
        if (json.moves != null) {
            this.controls = new MatchControls(container, counter);
            json.moves.forEach((move) => {
                const square = Square.fromString(move.move);
                curPosition = curPosition.playStone(square);
                curPosition.comment = move.comment;
            });
            if (json.moves.length < 2) {
                this.controls.prev.remove();
                this.controls.last.remove();
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
                    const square = Square.fromString(entry.square);
                    this.board.addLetter(square.x, square.y, entry.value);
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
