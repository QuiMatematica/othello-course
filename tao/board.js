import { WHITE } from './position.js';
import { BLACK } from './position.js';
import { EMPTY } from './position.js';

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

    letters = ['', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', '']

    constructor(container, counter, onClickCallback) {
        this.container = container;
        this.counter = counter;

        this.gameBoardContainer = document.createElement('div');
        this.gameBoardContainer.classList.add('game-board-container')
        this.container.appendChild(this.gameBoardContainer)

        this.gameBoard = document.createElement('div');
        this.gameBoard.classList.add('gameBoard');
        this.gameBoardContainer.appendChild(this.gameBoard)

        this.createBoard(onClickCallback)
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
    }

    setPosition(position) {
        this.resetGame();
        for (let x = 0; x < 8; x++) {
            for (let y = 0; y < 8; y++) {
                const color = position.grid[y][x];
                if (color == WHITE) {
                    this.grid[y][x].classList.add('white');
                }
                else if (color == BLACK) {
                    this.grid[y][x].classList.add('black');
                }
            }
        }
    }

    playPosition(position) {
        // Place the stone by adding the relevant color class.
        const playSquare = this.grid[position.played.y][position.played.x];
        playSquare.classList.add(Board.getColor(position.prevPosition.turn));

        for (const flipped of position.flipped) {
            const div = this.grid[flipped.y][flipped.x];
            div.classList.add('flip');
            div.classList.add(Board.getColor(position.prevPosition.turn));
            div.classList.remove(Board.getColor(-position.prevPosition.turn));
        }

        // Set this flag to indicate that we're animating the flip now.
        animatingFlip = true;
    }

    static getColor(positionColor) {
        if (positionColor == WHITE) {
            return 'white';
        }
        else if (positionColor == BLACK) {
            return 'black';
        }
        return null;
    }

    // Returns the opposite of a player's color.
    static oppositeColor(color) {
        return color == 'white' ? 'black' : 'white';
    }

    isSquareEmpty(x, y) {
        return Board.isEmpty(this.grid[y][x]);
    }

    // True if the square is empty.
    static isEmpty(div) {
        return !div.classList.contains('black') && !div.classList.contains('white');
    }

    // True if the square belongs to that player.
    static isColor(div, color) {
        return div.classList.contains(color);
    }

    addCSquares(add) {
        this.addLetter(0, 1, "C");
        this.addLetter(1, 0, "C");
        this.addLetter(0, 6, "C");
        this.addLetter(1, 7, "C");
        this.addLetter(7, 1, "C");
        this.addLetter(6, 0, "C");
        this.addLetter(7, 6, "C");
        this.addLetter(6, 7, "C");
    }

    addXSquares(add) {
        this.addLetter(1, 1, "X");
        this.addLetter(1, 6, "X");
        this.addLetter(6, 1, "X");
        this.addLetter(6, 6, "X");
    }

    addLetter(x, y, letter) {
        this.grid[y][x].innerHTML = "<p class=\"fw-bold m-0 fs-4\">" + letter + "</p>";
    }

}
