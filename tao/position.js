export const EMPTY = 0;
export const WHITE = 1;
export const BLACK = -1;

const LETTERS = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H']
const NUMBERS = ['1', '2', '3', '4', '5', '6', '7', '8']

const FROM_LETTERS = {'A': 0, 'B': 1, 'C': 2, 'D': 3, 'E': 4, 'F': 5, 'G': 6, 'H': 7}
const FROM_NUMBERS = {'1': 0, '2': 1, '3': 2, '4': 3, '5': 4, '6': 5, '7': 6, '8': 7}

export function getStartingPosition() {
    const grid = [];
    for (let x = 0; x < 8; x++) {
        const row = [];
        grid.push(row);
        for (let y = 0; y < 8; y++) {
            row.push(EMPTY);
        }
    }
    grid[3][3] = WHITE;
    grid[4][4] = WHITE;
    grid[3][4] = BLACK;
    grid[4][3] = BLACK;
    const turn = BLACK;
    return new Position(grid, turn)
}

export function getPosition(container) {
    if (container.dataset.hasOwnProperty('r1')) {
        const grid = [];
        for (let x = 0; x < 8; x++) {
            const row = [];
            grid.push(row);
            const row_data = container.dataset['r' + (x + 1).toString()];
            for (let y = 0; y < 8; y++) {
                const cell_data = row_data.charAt(y);
                if (cell_data == '#') {
                    row.push(BLACK);
                }
                else if (cell_data == 'O') {
                    row.push(WHITE);
                }
                else {
                    row.push(EMPTY);
                }
            }
        }
        let turn;
        if (container.dataset.hasOwnProperty('turn')) {
            if (container.dataset['turn'] == 'white') {
                turn = WHITE;
            }
            else {
                turn = BLACK;
            }
        }
        else {
            turn = BLACK;
        }
        return new Position(grid, turn);
    }
    else {
        return getStartingPosition();
    }
}

export default class Position {

    grid;
    turn;
    comment;
    played;
    flipped;
    gameOver;
    passCount;
    nextPosition;
    prevPosition;

    constructor(grid, turn) {
        this.grid = grid;
        this.turn = turn;
        this.gameOver = false;
        this.passCount = 0;
        // TODO: controllare se il turno è valido e se la partita è finita
        this.checkValidMoves();
        this.comment = null;
    }

    countStones() {
        const scores = { black: 0, white: 0 };

        for (let y = 0; y < 8; ++y) {
            for (let x = 0; x < 8; ++x) {
                if (this.grid[y][x] == BLACK) {
                    scores.black += 1;
                }

                if (this.grid[y][x] == WHITE) {
                    scores.white += 1;
                }
            }
        }
        return scores;
    }

    checkValidMoves() {
        const scores = this.countStones();

        // If someone is out of pieces, the game is over.
        if (scores.black == 0 || scores.white == 0) {
            this.gameOver = true;
            return;
        }

        // If both players had to pass, nobody can move and the game is over.
        if (this.passCount >= 2) {
            this.gameOver = true;
            return;
        }

        const foundAValidMove = this.findAValidMove()

        // If there are no valid moves, then the current player must pass.
        if (foundAValidMove) {
            this.passCount = 0;
        } else {
            this.passCount++;
            this.onPass();
        }
    }

    findAValidMove() {
        // Find and mark all the valid moves in the game board.
        for (let y = 0; y < 8; ++y) {
            for (let x = 0; x < 8; ++x) {
                if (this.isValidPlay(x, y)) {
                    return true;
                }
            }
        }
        return false;
    }

    onPass() {
        this.turn *= -1;
        this.checkValidMoves();
    }

    playStone(square) {
        console.log("playStone", square.toString());
        const x = square.x;
        const y = square.y;
        // Don't play if game is over.
        if (this.gameOver) {
            return null;
        }

        // Don't play if the move is invalid.
        if (!this.isValidPlay(x, y)) {
            return null;
        }

        // Copy the grid.
        const nextGrid = this.copyGrid();

        // Place the stone in the new grid.
        nextGrid[y][x] = this.turn;

        const flipped = [];

        // Flip over the opponent's pieces in every valid direction.
        for (const [dx, dy] of Position.allDirections()) {
            if (this.isValidInDirection(x, y, dx, dy)) {
                for (const [nx,ny] of Position.scanDirection(x, y, dx, dy)) {
                    // Stop on your own color.
                    if (this.grid[ny][nx] == this.turn) {
                        break;
                    }
                    nextGrid[ny][nx] = this.turn;
                    flipped.push(new Square(nx, ny));
                }
            }
        }

        // Change turn; it will be checked by the new position constructor.
        const nextTurn = - this.turn;

        // Build the next position.
        this.nextPosition = new Position(nextGrid, nextTurn);
        // Save the played position
        this.nextPosition.played = new Square(x, y);
        // Save the flipped stones
        this.nextPosition.flipped = flipped;
        // Link the next position to this one.
        this.nextPosition.prevPosition = this;

        return this.nextPosition;
    }

    copyGrid() {
        const grid = [];
        for (let x = 0; x < 8; x++) {
            const row = [];
            grid.push(row);
            for (let y = 0; y < 8; y++) {
                row.push(this.grid[y][x]);
            }
        }
        return grid;
    }

    isValidPlay(x, y) {
        // If it's not empty, it's not a valid play.
        if (this.grid[y][x] != EMPTY) {
            return false;
        }

        // A valid play at x,y must be able to flip stones in some direction.
        for (const [dx, dy] of Position.allDirections()) {
            if (this.isValidInDirection(x, y, dx, dy)) {
                return true;
            }
        }
        return false;
    }

    copyGrid() {
        const nextGrid = [];
        for (let x = 0; x < 8; x++) {
            const row = [];
            nextGrid.push(row);
            for (let y = 0; y < 8; y++) {
                row.push(this.grid[x][y])
            }
        }
        return nextGrid;
    }

    isValidInDirection(x, y, dx, dy) {
        let first = true;

        for (const [nx, ny] of Position.scanDirection(x, y, dx, dy)) {
            // If the first square in direction dx,dy is not the opposite player's,
            // then this is not a valid play based on that direction.
            if (first) {
                if (this.grid[ny][nx] != -this.turn) {
                    return false;
                }

                first = false;
            }

            // If the next square is empty, we failed to find another stone in our
            // color, so this is not a valid play based on that direction.
            if (this.grid[ny][nx] == EMPTY) {
                return false;
            }

            // Once we find a stone of our own color after some number of the
            // opponent's stones, this is a valid play in this direction.
            if (this.grid[ny][nx] == this.turn) {
                return true;
            }
        }

        // If we reach the end of the board without finding our own color, this is
        // not a valid play based on that direction.
        return false;
    }

    // A generator that yields board squares starting at x,y and moving in the
    // direction dx,dy, excluding the starting position at x,y.
    static *scanDirection(x, y, dx, dy) {
        x += dx;
        y += dy;

        for (; y >= 0 && y <= 7 && x >= 0 && x <= 7; y += dy, x += dx) {
            yield [x, y];
        }
    }

    static *allDirections() {
        for (const dx of [-1, 0, 1]) {
            for (const dy of [-1, 0, 1]) {
                // Never yield direction [0, 0] (in place)
                if (dx || dy) {
                    yield [dx, dy];
                }
            }
        }
    }

    log() {
        this.logGrid("position", this.grid);
    }

    logGrid(msg, grid) {
        let str = "";
        for (let x = 0; x < 8; x++) {
            for (let y = 0; y < 8; y++) {
                if (grid[y][x] != EMPTY) {
                    str += new Square(x, y).toString() + "=" + grid[y][x] + "; ";
                }
            }
        }
        console.log(msg, str);
    }

}

export class Square {
    x;
    y;

    constructor(x, y) {
        this.x = x;
        this.y = y;
    }

    toString() {
        return LETTERS[this.x] + NUMBERS[this.y];
    }

    static fromString(str) {
        const x = FROM_LETTERS[str.charAt(0)];
        const y = FROM_NUMBERS[str.charAt(1)];
        return new Square(x, y);
    }

}