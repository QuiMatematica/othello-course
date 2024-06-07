import Position from "./position";
import Board from "./board";
import Score from "./score";
import {boards, isAnimatingFlip} from "./page";
import Square from "./square";
import SequenceControls from "./sequenceControls";
import PositionComment from "./positionComment";

export default class SequenceBoard {

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
        fetch(matchFile)
            .then((response) => response.json())
            .then((json) => this.readMatch(json));
    }

    readMatch(json) {
        this.currentPosition = Position.getPositionFromJSON(json);
        this.currentPosition.comment = json.comment;
        this.humanColor = this.currentPosition.turn;
        let curPosition = this.currentPosition;

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

    goToNextPosition() {
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

    moveComputer() {
        if (this.currentPosition.nextPosition != null) {
            this.goToNextPosition();
        }
    }

    moveHuman(square) {
        if (this.currentPosition.turn === this.humanColor) {
            const expected = this.currentPosition.nextPosition.played;
            if (square.x === expected.x && square.y === expected.y) {
                this.goToNextPosition();
            }
            else {
                const correctPosition = this.currentPosition.nextPosition;
                const wrongPosition = this.currentPosition.playStone(square);
                if (wrongPosition != null) {
                    this.board.playPosition(wrongPosition);
                    this.score.takeScore(wrongPosition);
                    this.controls.wrong();
                    this.comment.setComment("<span class=\"text-danger fw-bold\">Mossa errata.</span>");
                    this.currentPosition.nextPosition = correctPosition;
                    this.currentPosition = wrongPosition;
                }
                else {
                    this.comment.setComment("<span class=\"text-danger fw-bold\">Mossa non legale.</span>");
                }
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
            this.controls.update(curPosition, this.humanColor);
            this.currentPosition = curPosition;
        }
    }

}

function sequenceBoardOnClick(event) {
    // Ignore if we're still animating the last move.
    if (isAnimatingFlip()) {
        return;
    }

    // Find the coordinates of the clicked square.
    const div = event.currentTarget;
    const {counter, x, y} = div.dataset;  // NOTE: strings, not ints
    const sequenceBoard = boards[counter];
    const square = new Square(parseInt(x), parseInt(y));
    sequenceBoard.moveHuman(square);
}
