import Position, {Square} from "./position";
import Board from "./board";
import Score from "./score";

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
