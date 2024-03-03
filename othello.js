'use strict';

const boards = []
let animatingFlip = false;

function init() {
    const matches = document.querySelectorAll('.freeGameBoard');
    matches.forEach((item) => {
        const freeGame = new FreeGameBoard(item, boards.length);
        boards.push(freeGame);
    });
}

class FreeGameBoard {

    container;
    counter;
    board;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;
        this.board = new Board(container, counter)
    }

}

class Board {

    container;
    counter;
    gameBoardContainer;
    gameBoard;
    grid = [];
    turn;

    letters = ['', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', '']

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;

        this.gameBoardContainer = document.createElement('div');
        this.gameBoardContainer.classList.add('gameBoardContainer')
        this.container.appendChild(this.gameBoardContainer)

        this.gameBoard = document.createElement('div');
        this.gameBoard.classList.add('gameBoard');
        this.gameBoardContainer.appendChild(this.gameBoard)

        this.createBoard()
        this.resetGame()
    }

    createBoard() {
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
                div.addEventListener('click', onClick);

                // When the flip animation ends, update the flip state and mark the valid
                // moves for the next player.
                div.addEventListener('animationend', () => {
                    animatingFlip = false;
                    // markValidMoves();
                });

                // Add the stone itself, which will not show up until a black or white
                // class is added to the square.
                div.appendChild(this.createStone());

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

    createStone() {
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
    }

    playStone(x, y) {
        // Ignore clicks on invalid squares.
        if (!this.isValidPlay(x, y, this.turn)) {
            console.log('invalid play', x, y, this.turn);
            return false;
        }

        // Place the stone by adding the relevant color class.
        console.log('play', x, y, this.turn);
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
        for (const [dx, dy] of allDirections()) {
            if (this.isValidInDirection(x, y, dx, dy, this.turn)) {
                for (const div of scanDirection(x, y, dx, dy, this.grid)) {
                    // Stop on your own color.
                    if (isColor(div, this.turn)) {
                      break;
                    }

                    // Use the "flip" class to start the animation, and change the color
                    // class to the new color.
                    div.classList.add('flip');
                    div.classList.add(this.turn);
                    div.classList.remove(oppositeColor(this.turn));
                }
            }
        }

        // Set this flag to indicate that we're animating the flip now.
        animatingFlip = true;
        this.nextTurn();
        return true;
    }

    nextTurn() {
        // unmarkValidMoves();
        // scoreElements[turn].container.classList.remove('turn');
        this.turn = oppositeColor(this.turn);
        // scoreElements[turn].container.classList.add('turn');
    }

    isValidPlay(x, y, color) {
        // If it's not empty, it's not a valid play.
        if (!this.isEmpty(this.grid[y][x])) {
            console.log("casella occuata")
            return false;
        }

        // A valid play at x,y must be able to flip stones in some direction.
        for (const [dx, dy] of allDirections()) {
            if (this.isValidInDirection(x, y, dx, dy, color)) {
                return true;
            }
        }
        console.log("non gira alcuna pedina")
        return false;
    }

    isEmpty(div) {
        return !div.classList.contains('black') && !div.classList.contains('white');
    }

    isValidInDirection(x, y, dx, dy, color) {
        console.log("isValidInDirection", x, y, dx, dy, color)
        let first = true;

        for (const div of scanDirection(x, y, dx, dy, this.grid)) {
            console.log("nel ciclo")
            // If the first square in direction dx,dy is not the opposite player's,
            // then this is not a valid play based on that direction.
            if (first) {
                if (!isColor(div, oppositeColor(color))) {
                    console.log("la prima non è dell'avversario")
                    return false;
                }

                console.log("la prima è dell'avversario")
                first = false;
            }

            // If the next square is empty, we failed to find another stone in our
            // color, so this is not a valid play based on that direction.
            if (isEmpty(div)) {
                return false;
            }

            // Once we find a stone of our own color after some number of the
            // opponent's stones, this is a valid play in this direction.
            if (isColor(div, color)) {
                return true;
            }
        }

        // If we reach the end of the board without finding our own color, this is
        // not a valid play based on that direction.
        return false;
    }

}

function onClick(event) {
//        // Ignore if the game is over.
//        if (gameOver) {
//            return;
//        }
//
//        // Ignore if it's a P2P game and not my turn.
//        if (remoteGame && turn != myColor) {
//            return;
//        }
//
    // Ignore if we're still animating the last move.
    if (animatingFlip) {
        return;
    }

    // Find the coordinates of the clicked square.
    const div = event.currentTarget;
    const {counter, x, y} = div.dataset;  // NOTE: strings, not ints
    console.log("click on ", counter, x, y);
    const aBoard = boards[counter]
    const ok = aBoard.board.playStone(parseInt(x), parseInt(y))

    // If the play was valid, update the score and switch turns.
    // if (ok) {
        // takeScore();
    // }
}

function *allDirections() {
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
function *scanDirection(x, y, dx, dy, grid) {
    x += dx;
    y += dy;

    for (; y >= 0 && y <= 7 && x >= 0 && x <= 7; y += dy, x += dx) {
        yield grid[y][x];
    }
}

// Returns the opposite of a player's color.
function oppositeColor(color) {
    return color == 'white' ? 'black' : 'white';
}

// True if the square is empty.
function isEmpty(div) {
    return !div.classList.contains('black') && !div.classList.contains('white');
}

// True if the square belongs to that player.
function isColor(div, color) {
    return div.classList.contains(color);
}
