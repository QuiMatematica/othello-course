import {boards} from "./page";

export default class MatchControls {

    first;
    prev;
    next;
    last;

    constructor(container, counter) {
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

        let buttonsContainer = document.createElement("div");
        buttonsContainer.classList.add("text-center");
        buttonsContainer.appendChild(buttonGroup);

        container.appendChild(buttonsContainer);
    }

    update(position) {
        this.first.disabled = (position.prevPosition == null);
        this.prev.disabled = (position.prevPosition == null);
        this.next.disabled = (position.nextPosition == null);
        this.last.disabled = (position.nextPosition == null);
    }

}


function matchOnNextClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    matchFileBoard.goToNextPosition();
}

function matchOnPrevClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    matchFileBoard.goToPreviousPosition();
}

function matchOnFirstClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    matchFileBoard.goToFirstPosition();
}

function matchOnEndClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const matchFileBoard = boards[counter];
    matchFileBoard.goToLastPosition();
}

