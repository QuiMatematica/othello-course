'use strict';

function init() {
    const matches = document.querySelectorAll('.freeGameBoard');
    matches.forEach((item) => {
        const freeGame = new FreeGameBoard(item)
    });
}

class FreeGameBoard {

    element;

    constructor(element) {
        this.element = element;
        this.board = new Board(element)
    }

}

class Board {

    container;
    gameBoardContainer;
    gameBoard;
    grid = [];

    letters = ['', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', '']

    constructor(container) {
        this.container = container

        this.gameBoardContainer = document.createElement('div');
        this.gameBoardContainer.classList.add('gameBoardContainer')
        this.container.appendChild(this.gameBoardContainer)

        this.gameBoard = document.createElement('div');
        this.gameBoard.classList.add('gameBoard');
        this.gameBoardContainer.appendChild(this.gameBoard)

        this.createBoard()
    }

    createBoard() {
        // Prima riga: riferimenti
        const firstRow = [];
        this.grid.push(firstRow);

        for (let x = 0; x < 10; ++x) {
            const div = document.createElement('div');
            div.classList.add('boardBorder');
            div.classList.add('reference-container');
            div.innerHTML = this.letters[x];
            this.gameBoard.appendChild(div);
            firstRow.push(div);
        }

        for (let y = 0; y < 8; ++y) {
            const row = [];
            this.grid.push(row);

            const firstDiv = document.createElement('div');
            firstDiv.classList.add('boardBorder');
            firstDiv.classList.add('reference-container');
            firstDiv.innerHTML = y + 1;
            this.gameBoard.appendChild(firstDiv);
            row.push(firstDiv);

            for (let x = 0; x < 8; ++x) {
                // Create a square element.
                const div = document.createElement('div');
                div.classList.add('square');
                div.classList.add('stone-container');

                // Store the grid coordinates on the element.
                div.dataset.board = this.container.id;
                div.dataset.x = x;
                div.dataset.y = y;

                // When the square is clicked, invoke this callback.
                div.addEventListener('click', onClick);

                // When the flip animation ends, update the flip state and mark the valid
                // moves for the next player.
                //          div.addEventListener('animationend', () => {
                //            animatingFlip = false;
                //            markValidMoves();
                //          });

                // Add the stone itself, which will not show up until a black or white
                // class is added to the square.
                //                div.appendChild(createStone());

                // Add the square to the DOM and to the 2D array.
                this.gameBoard.appendChild(div);
                row.push(div);
            }

            const lastDiv = document.createElement('div');
            lastDiv.classList.add('boardBorder');
            lastDiv.classList.add('reference-container');
            lastDiv.innerHTML = y + 1;
            this.gameBoard.appendChild(lastDiv);
            row.push(lastDiv);

        }

        // Ultima riga: riferimenti
        const lastRow = [];
        this.grid.push(lastRow);

        for (let x = 0; x < 10; ++x) {
            const div = document.createElement('div');
            div.classList.add('boardBorder');
            div.classList.add('reference-container');
            div.innerHTML = this.letters[x];
            this.gameBoard.appendChild(div);
            lastRow.push(div);
        }

        // Add the spots on the inner board corners.
        for (let x = 0; x < 4; ++x) {
            const spot = document.createElement('div');
            spot.classList.add('spot');
            spot.id = 'spot-' + x;
            this.gameBoard.appendChild(spot);
        }
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
//        // Ignore if we're still animating the last move.
//        if (animatingFlip) {
//            return;
//        }
//
        // Find the coordinates of the clicked square.
        const div = event.currentTarget;
        const {board, x, y} = div.dataset;  // NOTE: strings, not ints

        alert("click su scacchiera " + board + ": x = " + x + "; y = " + y);

//        // Try to play a stone here.
//        const ok = playStone(parseInt(x), parseInt(y), turn);
//        // If the play was valid, update the score and switch turns.
//        if (ok) {
//            takeScore();
//            nextTurn();
//        }
    }
