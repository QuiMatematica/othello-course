'use strict';

import Position from './position.js';
import { Square } from './position.js';

import Board from './board.js';
import { animatingFlip } from './board.js';

import Score from './score.js'

const boards = []

export function init() {
    loadSectionIndex();

    document.querySelectorAll('.static-board').forEach((item) => {
        const staticBoard = new StaticBoard(item, boards.length);
        boards.push(staticBoard);
    });
    document.querySelectorAll('.free-game-board').forEach((item) => {
        const freeGame = new FreeGameBoard(item, boards.length);
        boards.push(freeGame);
    });
    document.querySelectorAll('.match-file-board').forEach((item) => {
        const freeGame = new MatchFileBoard(item, boards.length);
        boards.push(freeGame);
    });
}

class StaticBoard {

    container;
    counter;

    position;
    board;
    score;

    constructor(container, counter) {
        this.container = container;
        this.counter = counter;

        this.position = Position.getPositionFromDataset(container);
        this.board = new Board(container, counter, staticBoardOnClick)
        this.board.setPosition(this.position);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.position);
    }

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
        this.currentPosition.comment = json['00'];
        var curPosition = this.currentPosition;
        json.moves.forEach((move) => {
            const square = Square.fromString(move);
            curPosition = curPosition.playStone(square)
            curPosition.comment = json[move];
        });
        if (json.controls != null) {
            if (!json.controls.previous) {
                this.controls.removePrevious();
            }
            if (!json.controls.last) {
                this.controls.removeLast();
            }
        }
        this.board.setPosition(this.currentPosition);
        this.score.takeScore(this.currentPosition);
        this.controls.update(this.currentPosition);
        this.comment.setComment(this.currentPosition);
    }

}

class MatchControls {

    begin;
    prev;
    next;
    last;

    constructor(container, counter) {
//    <button type="button" class="btn btn-primary">Left</button>
        this.begin = document.createElement("button");
        this.begin.classList.add("btn");
        this.begin.classList.add("btn-primary");
        this.begin.dataset.counter = counter;
        this.begin.appendChild(document.createTextNode("|<"));
        this.begin.addEventListener('click', matchOnBeginClick);

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
        buttonGroup.appendChild(this.begin);
        buttonGroup.appendChild(this.prev);
        buttonGroup.appendChild(this.next);
        buttonGroup.appendChild(this.last);

        const buttonsContainer = document.createElement("div");
        buttonsContainer.classList.add("text-center");
        buttonsContainer.appendChild(buttonGroup);

        container.appendChild(buttonsContainer);
    }

    update(position) {
        this.begin.disabled = (position.prevPosition == null);
        this.prev.disabled = (position.prevPosition == null);
        this.next.disabled = (position.nextPosition == null);
        this.last.disabled = (position.nextPosition == null);
    }

    removePrevious() {
        this.prev.remove();
    }

    removeLast() {
        this.last.remove();
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

function matchOnBeginClick(event) {
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

function loadSectionIndex() {
    const sectionIndex = "index.json";
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

    const togglerIcon = document.createElement("span");
    togglerIcon.classList.add("navbar-toggler-icon");

    const toggler = document.createElement("button");
    toggler.classList.add("navbar-toggler");
    toggler.setAttribute("type", "button");
    toggler.dataset.bsToggle = "collapse";
    toggler.dataset.bsTarget = "#navbarNavAltMarkup";
    toggler.setAttribute("aria-controls", "navbarNavAltMarkup");
    toggler.setAttribute("aria-expanded", "false");
    toggler.setAttribute("aria-label", "Attiva menu");
    toggler.append(togglerIcon);

    const menu_1 = document.createElement("a");
    menu_1.classList.add("nav-link");
    menu_1.classList.add("active");
    menu_1.setAttribute("aria-current", "page");
    menu_1.setAttribute("href", "index.html");
    menu_1.innerHTML = "Il gioco";

    const menu_2 = document.createElement("a");
    menu_2.classList.add("nav-link");
    menu_2.classList.add("disabled");
    menu_2.setAttribute("href", "#");
    menu_2.innerHTML = "Strategie base";

    const menu_3 = document.createElement("a");
    menu_3.classList.add("nav-link");
    menu_3.classList.add("disabled");
    menu_3.setAttribute("href", "#");
    menu_3.innerHTML = "Tutte le strategie";

    const menu = document.createElement("div");
    menu.classList.add("navbar-nav");
    menu.append(menu_1);
    menu.append(menu_2);
    menu.append(menu_3);

    const collapse = document.createElement("div");
    collapse.classList.add("collapse");
    collapse.classList.add("navbar-collapse");
    collapse.setAttribute("id", "navbarNavAltMarkup");
    collapse.append(menu);

    const container = document.createElement("div");
    container.classList.add("container-xxl");
    container.append(brand);
    container.append(toggler);
    container.append(collapse);

    const nav = document.createElement("nav");
    nav.classList.add("navbar");
    nav.classList.add("navbar-expand-lg");
    nav.classList.add("bg-primary");
    nav.dataset.bsTheme = "dark";
    nav.append(container);

    document.body.prepend(nav);

}

function initOffcanvas(json, currentPageIndex) {
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
    offcanvasTitle.innerHTML = json.title;
    offcanvasHeader.append(offcanvasTitle);

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
    ul.classList.add("navbar-nav");
    ul.classList.add("justify-content-end");
    ul.classList.add("flex-grow-1");
    ul.classList.add("pe-3");
    offcanvasBody.append(ul);

    for (var i = 0; i < json.pages.length; i++) {
        const item = json.pages[i];
        const li = document.createElement("li");
        li.classList.add("nav-item");
        ul.append(li);

        const a = document.createElement("a");
        a.classList.add("nav-link");
        if (i == currentPageIndex) {
            a.classList.add("active");
            a.setAttribute("aria-current", "page")
            a.setAttribute("href", "#");
        }
        else {
            a.setAttribute("href", item.href);
        }

        a.innerHTML = item.title;
        li.append(a);
    }

}

function buildPreviousNext(previous, symbol, page) {
    const li = document.createElement("li");
    li.classList.add("page-item");

    const a = document.createElement("a");
    a.classList.add("page-link");
    a.setAttribute("href", page.href);
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
    const filename = window.location.pathname.split("/").pop();
    const pageIndex = json.pages.findIndex(x => x.href == filename);
    var prevPage = null;
    var nextPage = null;
    if (pageIndex > 0) {
        prevPage = json.pages[pageIndex - 1];
    }
    if (pageIndex < json.pages.length - 1) {
        nextPage = json.pages[pageIndex + 1];
    }

    initOffcanvas(json, pageIndex);
    initHeader();

    document.getElementById("othello-content").prepend(buildPagination(json, prevPage, nextPage));
    document.getElementById("othello-content").append(buildPagination(json, prevPage, nextPage));
}