import {getBoard} from "./page";
import Controls from "./controls";

export default class ClickOnControls extends Controls{

    reset;

    constructor(container, counter) {
        super(container, counter);
        this.reset = this.createButton("Ricomincia", onResetClick);
    }

}

function onResetClick(event) {
    getBoard(event).reset();
}
