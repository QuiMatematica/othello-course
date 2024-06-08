import {boards} from "./page";

export default class ClickOnControls {

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

        let buttonsContainer = document.createElement("div");
        buttonsContainer.classList.add("text-center");
        buttonsContainer.appendChild(buttonGroup);

        container.appendChild(buttonsContainer);
    }

}

function resetClickOnClick(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    const clickOnBoard = boards[counter];
    clickOnBoard.reset();
}
