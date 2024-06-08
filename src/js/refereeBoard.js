import Position from "./position";
import Board from "./board";
import Score from "./score";
import Square from "./square";

export default class RefereeBoard {

    board;
    score;

    constructor(container, counter) {
        const emptyPosition = Position.getStartingPosition();
        this.board = new Board(container, counter, staticBoardOnClick);
        this.board.setPosition(emptyPosition);
        this.score = new Score(container, this.board);
        this.score.turnContainer.remove();
        this.score.takeScore(emptyPosition);

        const matchFile = container.dataset['file'];
        fetch(matchFile)
            .then((response) => response.json())
            .then((json) => this.readMatch(json));
    }

    readMatch(json) {
        let position = Position.getStartingPosition();
        const txt = json.txt;
        for (let i = 0; i*2 < txt.length; i++) {
            const s = txt.substring(i*2, i*2 + 2);
            const square = Square.fromString(s);
            this.board.setStone(square.x, square.y, position.turn);
            this.board.addLetter(square.x, square.y, (i + 1).toString());
            position = position.playStone(square);
        }
        this.score.takeScore(position);
    }

}

function staticBoardOnClick(event) {
}
