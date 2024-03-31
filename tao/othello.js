'use strict';

import Position from './position.js';
import { Square } from './position.js';

import Board from './board.js';
import { animatingFlip } from './board.js';

import Score from './score.js'

const boards = []

export function init() {
    loadIndex();

    document.querySelectorAll('.free-game-board').forEach((item) => {
        const freeGame = new FreeGameBoard(item, boards.length);
        boards.push(freeGame);
    });
    document.querySelectorAll('.match-file-board').forEach((item) => {
        const freeGame = new MatchFileBoard(item, boards.length);
        boards.push(freeGame);
    });
}

function staticBoardOnClick(event) {
    return;
}

class FreeGameBoard {

    container;
    counter;

    position;
    board;
    score;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;

        this.position = Position.getStartingPosition();
        this.board = new Board(container, counter, freeGameBoardOnClick)
        this.board.setPosition(this.position);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.position);
    }

}

function freeGameBoardOnClick(event) {
    // Ignore if we're still animating the last move.
    if (animatingFlip) {
        return;
    }

    // Find the coordinates of the clicked square.
    const div = event.currentTarget;
    const {counter, x, y} = div.dataset;  // NOTE: strings, not ints
    const freeGameBoard = boards[counter];
    const square = new Square(parseInt(x), parseInt(y));
    const nextPosition = freeGameBoard.position.playStone(square);
    // If the play was valid, update the score.
    if (nextPosition != null) {
        freeGameBoard.position = nextPosition;
        freeGameBoard.board.playPosition(freeGameBoard.position);
        freeGameBoard.score.takeScore(freeGameBoard.position);
    }
}

class MatchFileBoard {

    currentPosition;
    board;
    score;
    controls;
    comment;

    constructor(container, counter) {
        this.currentPosition = Position.getEmptyPosition();
        // staticBoardOnClick perché non deve esserci interazione sulla scacchiera
        this.board = new Board(container, counter, staticBoardOnClick);
        this.board.setPosition(this.currentPosition);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.currentPosition);
        this.controls = new MatchControls(container, counter);
        this.comment = new PositionComment(container);

        const matchFile = container.dataset['file'];
        let json;
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
                curPosition = curPosition.playStone(square)
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
        this.comment.setComment(this.currentPosition);

        if (json.add != null) {
            if (json.add["c-squares"]) {
                this.board.addCSquares();
            }
            if (json.add["x-squares"]) {
                this.board.addXSquares();
            }
        }
    }

}

class MatchControls {

    buttonsContainer;
    first;
    prev;
    next;
    last;

    constructor(container, counter) {
//    <button type="button" class="btn btn-primary">Left</button>
        this.first = document.createElement("button");
        this.first.classList.add("btn");
        this.first.classList.add("btn-primary");
        this.first.dataset.counter = counter;
        this.first.appendChild(document.createTextNode("|<"));
        this.first.addEventListener('click', matchOnFirstClick);

        this.prev = document.createElement("button");
        this.prev.classList.add("btn");
        this.prev.classList.add("btn-primary");
        this.prev.dataset.counter = counter;
        this.prev.appendChild(document.createTextNode("<"));
        this.prev.addEventListener('click', matchOnPrevClick);

        this.next = document.createElement("button");
        this.next.classList.add("btn");
        this.next.classList.add("btn-primary");
        this.next.dataset.counter = counter;
        this.next.appendChild(document.createTextNode(">"));
        this.next.addEventListener('click', matchOnNextClick);

        this.last = document.createElement("button");
        this.last.classList.add("btn");
        this.last.classList.add("btn-primary");
        this.last.dataset.counter = counter;
        this.last.appendChild(document.createTextNode(">|"));
        this.last.addEventListener('click', matchOnEndClick);

        const buttonGroup = document.createElement("div");
        buttonGroup.classList.add("btn-group");
        buttonGroup.classList.add("btn-group-sm");
        buttonGroup.setAttribute("role", "group");
        buttonGroup.setAttribute("aria-label", "Gruppo di controlli");
        buttonGroup.appendChild(this.first);
        buttonGroup.appendChild(this.prev);
        buttonGroup.appendChild(this.next);
        buttonGroup.appendChild(this.last);

        this.buttonsContainer = document.createElement("div");
        this.buttonsContainer.classList.add("text-center");
        this.buttonsContainer.appendChild(buttonGroup);

        container.appendChild(this.buttonsContainer);
    }

    update(position) {
        this.first.disabled = (position.prevPosition == null);
        this.prev.disabled = (position.prevPosition == null);
        this.next.disabled = (position.nextPosition == null);
        this.last.disabled = (position.nextPosition == null);
    }

}

class PositionComment {

    div;

    constructor(container) {
        this.div = document.createElement("div");
        this.div.classList.add('text-center');
        container.appendChild(this.div)
    }

    setComment(position) {
        if (position.comment == null) {
            this.div.innerHTML = "";
        }
        else {
            this.div.innerHTML = position.comment;
        }
    }

}

function matchOnNextClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    const nextPosition = matchFileBoard.currentPosition.nextPosition;
    if (nextPosition != null) {
        matchFileBoard.board.playPosition(nextPosition);
        matchFileBoard.score.takeScore(nextPosition);
        matchFileBoard.comment.setComment(nextPosition);
        matchFileBoard.controls.update(nextPosition);
        matchFileBoard.currentPosition = nextPosition;
    }
}

function matchOnPrevClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    const prevPosition = matchFileBoard.currentPosition.prevPosition;
    if (prevPosition != null) {
        matchFileBoard.board.setPosition(prevPosition);
        matchFileBoard.score.takeScore(prevPosition);
        matchFileBoard.comment.setComment(prevPosition);
        matchFileBoard.controls.update(prevPosition);
        matchFileBoard.currentPosition = prevPosition;
    }
}

function matchOnFirstClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    var curPosition = matchFileBoard.currentPosition;
    var prevPosition = curPosition.prevPosition;
    if (prevPosition != null) {
        while (prevPosition != null) {
            curPosition = prevPosition;
            prevPosition = curPosition.prevPosition;
        }
        matchFileBoard.board.setPosition(curPosition);
        matchFileBoard.score.takeScore(curPosition);
        matchFileBoard.comment.setComment(curPosition);
        matchFileBoard.controls.update(curPosition);
        matchFileBoard.currentPosition = curPosition;
    }
}

function matchOnEndClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    var curPosition = matchFileBoard.currentPosition;
    if (curPosition.nextPosition != null) {
        while (curPosition.nextPosition != null) {
            curPosition = curPosition.nextPosition;
        }
        matchFileBoard.board.setPosition(curPosition);
        matchFileBoard.score.takeScore(curPosition);
        matchFileBoard.comment.setComment(curPosition);
        matchFileBoard.controls.update(curPosition);
        matchFileBoard.currentPosition = curPosition;
    }
}

function loadIndex() {
    const sectionIndex = "../index.json";
    let json;
    fetch(sectionIndex)
        .then((response) => response.json())
        .then((json) => initPage(json));
}

function initHeader() {
    const brand = document.createElement("a");
    brand.classList.add("navbar-brand")
    brand.classList.add("h1")
    brand.setAttribute("href", "../index.html");
    brand.innerHTML = "Othello: corso interattivo";

    const container = document.createElement("div");
    container.classList.add("container-xxl");
    container.append(brand);

    const nav = document.createElement("nav");
    nav.classList.add("navbar");
    nav.classList.add("navbar-expand-lg");
    nav.classList.add("bg-primary");
    nav.dataset.bsTheme = "dark";
    nav.append(container);

    document.body.prepend(nav);

}

function addPage(page, ul) {
    const li = document.createElement("li");
    li.classList.add("nav-item");
    ul.append(li);

    const a = document.createElement("a");
    a.classList.add("link-dark");
    a.classList.add("link-offset-2");
    a.classList.add("link-underline-opacity-0");
    a.classList.add("link-underline-opacity-100-hover");
    a.setAttribute("href", "../" + page.href);
    a.innerHTML = page.title;
    li.append(a);
}

function addSection(section, ul) {
    const li = document.createElement("li");
    li.classList.add("nav-item");
    li.classList.add("pb-3");
    ul.append(li);

    const a = document.createElement("a");
    a.classList.add("link-dark");
    a.classList.add("link-offset-2");
    a.classList.add("link-underline-opacity-0");
    a.classList.add("link-underline-opacity-100-hover");
    a.setAttribute("href", "../" + section.href);
    a.innerHTML = section.title;
    li.append(a);

    const ul2 = document.createElement("ul");
    li.append(ul2);

    section.pages.forEach((page) => addPage(page, ul2));
}

function initOffcanvas(json) {
    const offcanvas = document.createElement("div");
    offcanvas.classList.add("offcanvas");
    offcanvas.classList.add("offcanvas-start");
    offcanvas.setAttribute("tabindex", "-1");
    offcanvas.setAttribute("id", "section-index");
    offcanvas.setAttribute("aria-labelledby", "offcanvasLabel");
    document.body.prepend(offcanvas);

    const offcanvasHeader = document.createElement("div");
    offcanvasHeader.classList.add("offcanvas-header");
    offcanvas.append(offcanvasHeader);

    const offcanvasTitle = document.createElement("h5");
    offcanvasTitle.classList.add("offcanvas-title");
    offcanvasTitle.setAttribute("id", "offcanvasLabel");
    offcanvasHeader.append(offcanvasTitle);

    const aTitle = document.createElement("a");
    aTitle.classList.add("nav-link");
    aTitle.setAttribute("href", json.href);
    aTitle.innerHTML = "Indice";
    offcanvasTitle.append(aTitle);

    const dismissButton = document.createElement("button");
    dismissButton.setAttribute("type", "button");
    dismissButton.classList.add("btn-close");
    dismissButton.dataset.bsDismiss = "offcanvas";
    dismissButton.setAttribute("aria-label", "Chiudi");
    offcanvasHeader.append(dismissButton);

    const offcanvasBody = document.createElement("div");
    offcanvasBody.classList.add("offcanvas-body");
    offcanvas.append(offcanvasBody);

    const ul = document.createElement("ul");
    ul.classList.add("nav");
    ul.classList.add("flex-column");
    offcanvasBody.append(ul);

    json.sections.forEach((section) => addSection(section, ul))
}

function buildPreviousNext(previous, symbol, page) {
    const li = document.createElement("li");
    li.classList.add("page-item");

    const a = document.createElement("a");
    a.classList.add("page-link");
    a.setAttribute("href", "../" + page.href);
    a.setAttribute("aria-label", "Previous");
    li.append(a);

    const span_1 = document.createElement("span");
    span_1.classList.add("px-1");
    span_1.setAttribute("aria-hidden", "true");
    span_1.innerHTML = symbol;

    const span_2 = document.createElement("span");
    span_2.classList.add("sr-only");
    span_2.innerHTML = page.title;

    if (previous) {
        a.append(span_1);
        a.append(span_2);
    }
    else {
        a.append(span_2);
        a.append(span_1);
    }

    return li;
}

function buildOffcanvasButton() {
    const li = document.createElement("li");
    li.classList.add("page-item");

    const a = document.createElement("a");
    a.classList.add("page-link");
    a.dataset.bsToggle = "offcanvas";
    a.setAttribute("href", "#section-index")
    a.setAttribute("role", "button")
    a.setAttribute("aria-controls", "offcanvasExample");
    a.innerHTML = "Indice";
    li.append(a);

    return li;
}

function buildPagination(json, prevPage, nextPage) {
    const nav = document.createElement("nav");

    const ul = document.createElement("ul");
    ul.classList.add("pagination");
    ul.classList.add("justify-content-center");
    nav.append(ul);

    if (prevPage != null) {
        ul.append(buildPreviousNext(true, "&laquo;", prevPage));
    }
    ul.append(buildOffcanvasButton());
    if (nextPage != null) {
        ul.append(buildPreviousNext(false, "&raquo;", nextPage));
    }

    return nav;
}

function initPage(json) {
    const urlSplitted = window.location.pathname.split("/")
    const fileName = urlSplitted.pop();
    const sectionName = urlSplitted.pop();
    const sectionIndex = json.sections.findIndex(x => x.href == sectionName + "/index.html");
    const section = json.sections[sectionIndex];
    const pageIndex = section.pages.findIndex(x => x.href == sectionName + "/" + fileName);
    // se non lo trova => pageIndex == -1
    var prevPage = null;
    var nextPage = null;
    if (pageIndex > 0) {
        prevPage = section.pages[pageIndex - 1];
    }
    else if (pageIndex == 0) {
        prevPage = section;
    }
    else {
        if (sectionIndex > 0) {
            const prevSection = json.sections[sectionIndex - 1];
            prevPage = prevSection.pages[prevSection.pages.length - 1];
        }
    }
    if (pageIndex < section.pages.length - 1) {
        nextPage = section.pages[pageIndex + 1];
    }
    else {
        if (sectionIndex < json.sections.length - 1) {
            nextPage = json.sections[sectionIndex + 1];
        }
    }

    initOffcanvas(json);
    initHeader();

    const othelloContent = document.getElementById("othello-content");
    othelloContent.prepend(buildPagination(json, prevPage, nextPage));
    othelloContent.append(buildPagination(json, prevPage, nextPage));
}