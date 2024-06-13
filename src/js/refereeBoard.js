import Position from "./position";
import Board from "./board";
import Score from "./score";

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
        let position = Position.getPositionFromJSON(json);
        let i = 0;
        while (position.nextPosition != null) {
            const square = position.nextPosition.played;
            this.board.setStone(square.x, square.y, position.turn);
            this.board.addLetter(square.x, square.y, (i + 1).toString());
            position = position.nextPosition;
            i++;
        }
        this.score.takeScore(position);
    }

}

function staticBoardOnClick(event) {
}
