import {boards} from "./page";

export default class SequenceControls {

    first;
    prev;
    computer;

    constructor(container, counter) {
        this.first = document.createElement("button");
        this.first.classList.add("btn");
        this.first.classList.add("btn-primary");
        this.first.dataset.counter = counter;
        this.first.appendChild(document.createTextNode("|<"));
        this.first.addEventListener('click', sequenceOnFirstClick);

        this.prev = document.createElement("button");
        this.prev.classList.add("btn");
        this.prev.classList.add("btn-primary");
        this.prev.dataset.counter = counter;
        this.prev.appendChild(document.createTextNode("<"));
        this.prev.addEventListener('click', sequenceOnPrevClick);

        this.computer = document.createElement("button");
        this.computer.classList.add("btn");
        this.computer.classList.add("btn-primary");
        this.computer.dataset.counter = counter;
        this.computer.appendChild(document.createTextNode("Muove il computer"));
        this.computer.addEventListener('click', sequenceOnComputerClick);

        const buttonGroup = document.createElement("div");
        buttonGroup.classList.add("btn-group");
        buttonGroup.classList.add("btn-group-sm");
        buttonGroup.setAttribute("role", "group");
        buttonGroup.setAttribute("aria-label", "Gruppo di controlli");
        buttonGroup.appendChild(this.first);
        buttonGroup.appendChild(this.prev);
        buttonGroup.appendChild(this.computer);

        let buttonsContainer = document.createElement("div");
        buttonsContainer.classList.add("text-center");
        buttonsContainer.appendChild(buttonGroup);

        container.appendChild(buttonsContainer);
    }

    update(position, humanColor) {
        this.first.disabled = (position.prevPosition == null);
        this.prev.disabled = (position.prevPosition == null);
        this.computer.disabled = (position.nextPosition == null || position.turn === humanColor);
    }

    wrong() {
        this.first.disabled = false;
        this.prev.disabled = false;
        this.computer.disabled = true;
    }

}

function sequenceOnFirstClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const sequenceBoard = boards[counter];
    sequenceBoard.goToFirstPosition();
}

function sequenceOnPrevClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const sequenceBoard = boards[counter];
    sequenceBoard.goToPreviousPosition();
}

function sequenceOnComputerClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const sequenceBoard = boards[counter];
    sequenceBoard.moveComputer();
}
