export let animatingFlip = false;

export function createStone() {
    const xmlns = 'http://www.w3.org/2000/svg';
    const svg = document.createElementNS(xmlns, 'svg');
    svg.setAttributeNS(null, 'viewBox', '0 0 100 100');

    // The circle of the stone itself.
    const circle = document.createElementNS(xmlns, 'circle');
    circle.classList.add('stone');
    circle.setAttributeNS(null, 'cx', '50');
    circle.setAttributeNS(null, 'cy', '50');
    circle.setAttributeNS(null, 'r', '45');
    svg.appendChild(circle);

    return svg;
}

export default class Board {

    container;
    counter;
    gameBoardContainer;
    gameBoard;
    grid = [];
    turn;
    gameOver;
    passCount;

    letters = ['', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', '']

    constructor(container, counter, onClickCallback) {
        this.container = container;
        this.counter = counter;

        this.gameBoardContainer = document.createElement('div');
        this.gameBoardContainer.classList.add('gameBoardContainer')
        this.container.appendChild(this.gameBoardContainer)

        this.gameBoard = document.createElement('div');
        this.gameBoard.classList.add('gameBoard');
        this.gameBoardContainer.appendChild(this.gameBoard)

        this.createBoard(onClickCallback)
        this.resetGame()
    }

    createBoard(onClickCallback) {
        // Prima riga: riferimenti
        for (let x = 0; x < 10; ++x) {
            const div = document.createElement('div');
            div.classList.add('boardBorder');
            div.classList.add('reference-container');
            div.innerHTML = this.letters[x];
            this.gameBoard.appendChild(div);
        }

        for (let y = 0; y < 8; ++y) {
            const row = [];
            this.grid.push(row);

            const firstDiv = document.createElement('div');
            firstDiv.classList.add('boardBorder');
            firstDiv.classList.add('reference-container');
            firstDiv.innerHTML = y + 1;
            this.gameBoard.appendChild(firstDiv);

            for (let x = 0; x < 8; ++x) {
                // Create a square element.
                const div = document.createElement('div');
                div.classList.add('square');
                div.classList.add('stone-container');

                // Store the grid coordinates on the element.
                div.dataset.counter = this.counter;
                div.dataset.x = x;
                div.dataset.y = y;

                // When the square is clicked, invoke this callback.
                div.addEventListener('click', onClickCallback);

                // When the flip animation ends, update the flip state and mark the valid
                // moves for the next player.
                div.addEventListener('animationend', () => {
                    animatingFlip = false;
                });

                // Add the stone itself, which will not show up until a black or white
                // class is added to the square.
                div.appendChild(createStone());

                // Add the square to the DOM and to the 2D array.
                this.gameBoard.appendChild(div);
                row.push(div);
            }

            const lastDiv = document.createElement('div');
            lastDiv.classList.add('boardBorder');
            lastDiv.classList.add('reference-container');
            lastDiv.innerHTML = y + 1;
            this.gameBoard.appendChild(lastDiv);
        }

        // Ultima riga: riferimenti
        for (let x = 0; x < 10; ++x) {
            const div = document.createElement('div');
            div.classList.add('boardBorder');
            div.classList.add('reference-container');
            div.innerHTML = this.letters[x];
            this.gameBoard.appendChild(div);
        }

        // Add the spots on the inner board corners.
        for (let x = 0; x < 4; ++x) {
            const spot = document.createElement('div');
            spot.classList.add('spot');
            spot.id = 'spot-' + x;
            this.gameBoard.appendChild(spot);
        }
    }

    resetGame() {
        console.log('Resetting game');

        // Remove any state classes from the game board.
        for (const div of this.gameBoard.querySelectorAll('.square')) {
            div.classList.remove('black');
            div.classList.remove('white');
            div.classList.remove('flip');
        }

        // Set the initial 4 stones.
        this.grid[3][3].classList.add('white');
        this.grid[3][4].classList.add('black');
        this.grid[4][3].classList.add('black');
        this.grid[4][4].classList.add('white');

        this.turn = 'black';
        this.gameOver = false;
        this.passCount = 0;
    }

    playStone(x, y) {
        // Ignore clicks if game is over.
        if (this.gameOver) {
            return false;
        }

        // Ignore clicks on invalid squares.
        if (!this.isValidPlay(x, y, this.turn)) {
            return false;
        }

        // Place the stone by adding the relevant color class.
        const playSquare = this.grid[y][x];
        playSquare.classList.add(this.turn);

        // Remove the "last play" indicator if there's one out there.
        const last = this.gameBoard.querySelector('.last');
        if (last) {
            last.classList.remove('last');
        }
        // Add the "last play" indicator to this newly-played square.
        playSquare.classList.add('last');

        // Flip over the opponent's pieces in every valid direction.
        for (const [dx, dy] of Board.allDirections()) {
            if (this.isValidInDirection(x, y, dx, dy, this.turn)) {
                for (const div of this.scanDirection(x, y, dx, dy)) {
                    // Stop on your own color.
                    if (Board.isColor(div, this.turn)) {
                      break;
                    }

                    // Use the "flip" class to start the animation, and change the color
                    // class to the new color.
                    div.classList.add('flip');
                    div.classList.add(this.turn);
                    div.classList.remove(Board.oppositeColor(this.turn));
                }
            }
        }

        // Set this flag to indicate that we're animating the flip now.
        animatingFlip = true;
        this.nextTurn();
        this.checkValidMoves();
        return true;
    }

    nextTurn() {
        console.log("cambio turno")
        this.turn = Board.oppositeColor(this.turn);
    }

    isValidPlay(x, y, color) {
        // If it's not empty, it's not a valid play.
        if (!Board.isEmpty(this.grid[y][x])) {
            return false;
        }

        // A valid play at x,y must be able to flip stones in some direction.
        for (const [dx, dy] of Board.allDirections()) {
            if (this.isValidInDirection(x, y, dx, dy, color)) {
                return true;
            }
        }
        return false;
    }

    isValidInDirection(x, y, dx, dy, color) {
        let first = true;

        for (const div of this.scanDirection(x, y, dx, dy)) {
            // If the first square in direction dx,dy is not the opposite player's,
            // then this is not a valid play based on that direction.
            if (first) {
                if (!Board.isColor(div, Board.oppositeColor(color))) {
                    return false;
                }

                first = false;
            }

            // If the next square is empty, we failed to find another stone in our
            // color, so this is not a valid play based on that direction.
            if (Board.isEmpty(div)) {
                return false;
            }

            // Once we find a stone of our own color after some number of the
            // opponent's stones, this is a valid play in this direction.
            if (Board.isColor(div, color)) {
                return true;
            }
        }

        // If we reach the end of the board without finding our own color, this is
        // not a valid play based on that direction.
        return false;
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

    // A generator that yields board squares starting at x,y and moving in the
    // direction dx,dy, excluding the starting position at x,y.
    *scanDirection(x, y, dx, dy) {
        x += dx;
        y += dy;

        for (; y >= 0 && y <= 7 && x >= 0 && x <= 7; y += dy, x += dx) {
            yield this.grid[y][x];
        }
    }

    // Returns the opposite of a player's color.
    static oppositeColor(color) {
        return color == 'white' ? 'black' : 'white';
    }

    // True if the square is empty.
    static isEmpty(div) {
        return !div.classList.contains('black') && !div.classList.contains('white');
    }

    // True if the square belongs to that player.
    static isColor(div, color) {
        return div.classList.contains(color);
    }

    checkValidMoves() {
        // If the game is over, don't do anything.
        if (this.gameOver) {
            return;
        }

        // If someone is out of pieces, the game is over.
        if (this.gameBoard.querySelector('.black') == null ||
            this.gameBoard.querySelector('.white') == null) {
            this.endGame();
            return;
        }

        // If both players had to pass, nobody can move and the game is over.
        if (this.passCount >= 2) {
            this.endGame();
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
                if (this.isValidPlay(x, y, this.turn)) {
                    return true;
                }
            }
        }
        return false;
    }

    onPass() {
        console.log('pass', this.turn);

        this.nextTurn();
        this.checkValidMoves();
    }

    endGame() {
        this.gameOver = true;
    }

}
