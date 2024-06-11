import Position from "./position";
import Board from "./board";
import {boards} from "./page";
import PositionComment from "./positionComment";
import ClickOnControls from "./clickOnControls";
import Square from "./square";

export default class ClickOnBoard {

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
        if (this.clicked.findIndex(c => (c.x === square.x && c.y === square.y)) === -1) {
            const squareIndex = this.correct.findIndex(c => (c.x === square.x && c.y === square.y));
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

