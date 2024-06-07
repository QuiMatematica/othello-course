import {boards} from "./page";

export default class ClickOnControls {

    buttonsContainer;
    reset;

    constructor(container, counter) {
        this.reset = document.createElement("button");
        this.reset.classList.add("btn");
        this.reset.classList.add("btn-primary");
        this.reset.dataset.counter = counter;
        this.reset.appendChild(document.createTextNode("Ricomincia"));
        this.reset.addEventListener('click', resetClickOnClick);

        const buttonGroup = document.createElement("div");
        buttonGroup.classList.add("btn-group");
        buttonGroup.classList.add("btn-group-sm");
        buttonGroup.setAttribute("role", "group");
        buttonGroup.setAttribute("aria-label", "Gruppo di controlli");
        buttonGroup.appendChild(this.reset);

        this.buttonsContainer = document.createElement("div");
        this.buttonsContainer.classList.add("text-center");
        this.buttonsContainer.appendChild(buttonGroup);

        container.appendChild(this.buttonsContainer);
    }

}

function resetClickOnClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const clickOnBoard = boards[counter];
    clickOnBoard.reset();
}
