import { WHITE } from './position.js';
import { BLACK } from './position.js';
import {createStone, setAnimatingFlip, xmlns} from "./page";

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
                    setAnimatingFlip(false);
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
        for (const div of this.gameBoard.querySelectorAll('.square')) {
            div.classList.remove('black');
            div.classList.remove('white');
            div.classList.remove('flip');
        }
    }

    setStone(x, y, color) {
        if (color === WHITE) {
            this.grid[y][x].classList.add('white');
        }
        else if (color === BLACK) {
            this.grid[y][x].classList.add('black');
        }
    }

    setPosition(position) {
        this.resetGame();
        for (let x = 0; x < 8; x++) {
            for (let y = 0; y < 8; y++) {
                const color = position.grid[y][x];
                if (color === WHITE) {
                    this.grid[y][x].classList.add('white');
                }
                else if (color === BLACK) {
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
        setAnimatingFlip(true);
    }

    static getColor(positionColor) {
        if (positionColor === WHITE) {
            return 'white';
        }
        else if (positionColor === BLACK) {
            return 'black';
        }
        return null;
    }

    // Returns the opposite of a player's color.
    static oppositeColor(color) {
        return color === 'white' ? 'black' : 'white';
    }

    // True if the square is empty.
    static isEmpty(div) {
        return !div.classList.contains('black') && !div.classList.contains('white');
    }

    // True if the square belongs to that player.
    static isColor(div, color) {
        return div.classList.contains(color);
    }

    addASquares() {
        this.addLetter(0, 3, "A");
        this.addLetter(3, 0, "A");
        this.addLetter(0, 4, "A");
        this.addLetter(3, 7, "A");
        this.addLetter(7, 3, "A");
        this.addLetter(4, 0, "A");
        this.addLetter(7, 4, "A");
        this.addLetter(4, 7, "A");
    }

    addBSquares() {
        this.addLetter(0, 2, "B");
        this.addLetter(2, 0, "B");
        this.addLetter(0, 5, "B");
        this.addLetter(2, 7, "B");
        this.addLetter(7, 2, "B");
        this.addLetter(5, 0, "B");
        this.addLetter(7, 5, "B");
        this.addLetter(5, 7, "B");
    }

    addCSquares() {
        this.addLetter(0, 1, "C");
        this.addLetter(1, 0, "C");
        this.addLetter(0, 6, "C");
        this.addLetter(1, 7, "C");
        this.addLetter(7, 1, "C");
        this.addLetter(6, 0, "C");
        this.addLetter(7, 6, "C");
        this.addLetter(6, 7, "C");
    }

    addXSquares() {
        this.addLetter(1, 1, "X");
        this.addLetter(1, 6, "X");
        this.addLetter(6, 1, "X");
        this.addLetter(6, 6, "X");
    }

    addLetter(x, y, letter) {
        const square = this.grid[y][x];

        const textNode = document.createTextNode(letter); // last/deepest child

        const textElement = document.createElementNS(xmlns, 'text'); // first/deepest parent

        if (Board.isColor(square, "black")) {
            textElement.setAttributeNS(null, 'fill', 'white');
            textElement.setAttributeNS(null, 'stroke', 'white');
        }
        else {
            textElement.setAttributeNS(null, 'fill', 'black');
            textElement.setAttributeNS(null, 'stroke', 'black');
        }
        textElement.setAttributeNS(null, 'x', '50');
        textElement.setAttributeNS(null, 'y', '55');
        textElement.setAttributeNS(null, 'alignment-baseline', "middle");
        textElement.setAttributeNS(null, 'text-anchor', "middle");
        if (letter.length === 1) {
            textElement.setAttributeNS(null, 'font-size', 80);
        }
        else {
            textElement.setAttributeNS(null, 'font-size', 60);
        }
        textElement.append(textNode);
        square.firstChild.append(textElement); // append deepest child to first parent
    }

    removeLetter(x, y) {
        const square = this.grid[y][x];
        square.getElementsByTagName("text").item(0).remove();
    }

}
