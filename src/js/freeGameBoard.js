import Position from "./position";
import Board from "./board";
import Score from "./score";
import {boards, isAnimatingFlip} from "./page";
import Square from "./square";
import Controls from "./controls";

export default class FreeGameBoard {

    container;
    counter;

    currentPosition;
    board;
    score;
    controls;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;

        this.currentPosition = Position.getStartingPosition();
        this.board = new Board(container, counter, freeGameBoardOnClick)
        this.board.setPosition(this.currentPosition);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.currentPosition);

        this.controls = new Controls(container, counter);
        this.controls.addFirstButton().addPrevButton().addNextButton().addLastButton();
        this.controls.update(this.currentPosition);
    }

    move(square) {
        const nextPosition = this.currentPosition.playStone(square);
        // If the play was valid, update the score.
        if (nextPosition != null) {
            this.currentPosition = nextPosition;
            this.board.playPosition(this.currentPosition);
            this.score.takeScore(this.currentPosition);
            this.controls.update(this.currentPosition);
        }
    }

    goToNextPosition() {
        const nextPosition = this.currentPosition.nextPosition;
        if (nextPosition != null) {
            this.board.playPosition(nextPosition);
            this.score.takeScore(nextPosition);
            // this.comment.setPositionComment(nextPosition);
            this.controls.update(nextPosition);
            this.currentPosition = nextPosition;
        }
    }

    goToPreviousPosition() {
        const prevPosition = this.currentPosition.prevPosition;
        if (prevPosition != null) {
            this.board.setPosition(prevPosition);
            this.score.takeScore(prevPosition);
            // this.comment.setPositionComment(prevPosition);
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
            // this.comment.setPositionComment(curPosition);
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
            // this.comment.setPositionComment(curPosition);
            this.controls.update(curPosition);
            this.currentPosition = curPosition;
        }
    }

}

function freeGameBoardOnClick(event) {
    // Ignore if we're still animating the last move.
    if (isAnimatingFlip()) {
        return;
    }

    // Find the coordinates of the clicked square.
    const div = event.currentTarget;
    const {counter, x, y} = div.dataset;  // NOTE: strings, not ints
    const freeGameBoard = boards[counter];
    const square = new Square(parseInt(x), parseInt(y));
    freeGameBoard.move(square);
}
