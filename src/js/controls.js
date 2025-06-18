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

    createEmptyButton(listener) {
        let button = document.createElement("button");
        button.classList.add("btn");
        button.classList.add("btn-primary");
        button.dataset.counter = this.counter;
        button.addEventListener('click', listener);
        this.buttonGroup.appendChild(button);
        return button;
    }

    createButton(text, listener) {
        let button = this.createEmptyButton(listener);
        button.appendChild(document.createTextNode(text));
        return button;
    }

    createIconButton(icon, listener) {
        let button = this.createEmptyButton(listener);
        button.classList.add("bi");
        button.classList.add(icon);
        return button;
    }

    addFirstButton() {
        this.first = this.createIconButton("bi-chevron-bar-left", onFirstClick);
        return this;
    }

    addPrevButton() {
        this.prev = this.createIconButton("bi-chevron-left", onPrevClick);
        return this;
    }

    addNextButton() {
        this.next = this.createIconButton("bi-chevron-right", onNextClick);
        return this;
    }

    addLastButton() {
        this.last = this.createIconButton("bi-chevron-bar-right", onLastClick);
        return this;
    }

    update(position) {
        if (this.first != null) {
            this.first.disabled = (position.prevPosition == null);
        }
        if (this.prev != null) {
            this.prev.disabled = (position.prevPosition == null);
        }
        if (this.next != null) {
            this.next.disabled = (position.nextPosition == null);
        }
        if (this.last != null) {
            this.last.disabled = (position.nextPosition == null);
        }
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

