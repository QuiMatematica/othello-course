import {getBoard} from "./page";
import Controls from "./controls";

export default class SequenceControls extends Controls {

    computer;

    constructor(container, counter) {
        super(container, counter);
        this.addFirstButton().addPrevButton().addComputerButton();
    }

    addComputerButton() {
        this.computer = this.createButton("Muove il computer", onComputerClick);
        return this;
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

function onComputerClick(event) {
    getBoard(event).moveComputer();
}
