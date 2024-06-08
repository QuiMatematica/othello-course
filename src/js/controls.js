import {getBoard} from "./page";

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
        this.buttonGroup.appendChild(button);
        return button;
    }
    addFirstButton() {
        this.first = this.createButton("|<", onFirstClick);
        return this;
    }

    addPrevButton() {
        this.prev = this.createButton("<", onPrevClick);
        return this;
    }

    addNextButton() {
        this.next = this.createButton(">", onNextClick);
        return this;
    }

    addLastButton() {
        this.last = this.createButton(">|", onLastClick);
        return this;
    }

    update(position) {
        this.first.disabled = (position.prevPosition == null);
        this.prev.disabled = (position.prevPosition == null);
        this.next.disabled = (position.nextPosition == null);
        this.last.disabled = (position.nextPosition == null);
    }

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

