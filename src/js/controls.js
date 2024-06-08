import {boards} from "./page";

export default class Controls {

    buttonGroup;
    counter;
    first;
    prev;
    next;
    last;

    constructor(container, counter) {
        this.counter = counter;

        this.buttonGroup = document.createElement("div");
        this.buttonGroup.classList.add("btn-group");
        this.buttonGroup.classList.add("btn-group-sm");
        this.buttonGroup.setAttribute("role", "group");
        this.buttonGroup.setAttribute("aria-label", "Gruppo di controlli");

        let buttonsContainer = document.createElement("div");
        buttonsContainer.classList.add("text-center");
        buttonsContainer.appendChild(this. buttonGroup);

        container.appendChild(buttonsContainer);
    }

    createButton(text, listener) {
        let button = document.createElement("button");
        button.classList.add("btn");
        button.classList.add("btn-primary");
        button.dataset.counter = this.counter;
        button.appendChild(document.createTextNode(text));
        button.addEventListener('click', listener);
        return button;
    }
    addFirstButton() {
        this.first = this.createButton("|<", onFirstClick);
        this.buttonGroup.appendChild(this.first);
        return this;
    }

    addPrevButton() {
        this.prev = this.createButton("<", onPrevClick);
        this.buttonGroup.appendChild(this.prev);
        return this;
    }

    addNextButton() {
        this.next = this.createButton(">", onNextClick);
        this.buttonGroup.appendChild(this.next);
        return this;
    }

    addLastButton() {
        this.last = this.createButton(">|", onLastClick);
        this.buttonGroup.appendChild(this.last);
        return this;
    }

    update(position) {
        this.first.disabled = (position.prevPosition == null);
        this.prev.disabled = (position.prevPosition == null);
        this.next.disabled = (position.nextPosition == null);
        this.last.disabled = (position.nextPosition == null);
    }

}

function getBoard(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    return boards[counter];
}

function onNextClick(event) {
    getBoard(event).goToNextPosition();
}

function onPrevClick(event) {
    getBoard(event).goToPreviousPosition();
}

function onFirstClick(event) {
    getBoard(event).goToFirstPosition();
}

function onLastClick(event) {
    getBoard(event).goToLastPosition();
}

