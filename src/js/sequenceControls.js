import {getBoard} from "./page";
import Controls from "./controls";

export default class SequenceControls extends Controls {

    computer;
    share;
    help;

    constructor(container, counter, sourceFile) {
        super(container, counter);
        this.addFirstButton().addComputerButton().addShareButton();
        if (sourceFile != null) {
            this.addGoToSourceButton();
        }
    }

    addComputerButton() {
        this.computer = this.createIconButton("bi-caret-right-square", onComputerClick);
        return this;
    }

    addShareButton() {
        this.share = this.createIconButton("bi-share-fill", onShareClick);
        return this;
    }

    addGoToSourceButton() {
        this.share = this.createIconButton("bi-file-earmark", onGoToSourceClick);
        return this;
    }

    addHelpButton() {
        this.help = this.createIconButton("bi-lightbulb", onHelpClick);
        return this;
    }

    update(position, humanColor) {
        this.first.disabled = position.prevPosition == null;
        // this.prev.disabled = (position.prevPosition == null);
        this.computer.disabled = position.nextPosition == null || position.turn === humanColor;
        if (this.help != null) {
            this.help.disabled = position.nextPosition != null && position.turn !== humanColor;
        }
    }

    wrong() {
        this.first.disabled = false;
        // this.prev.disabled = false;
        this.computer.disabled = true;
        if (this.help != null) {
            this.help.disabled = true;
        }
    }

}

function onComputerClick(event) {
    getBoard(event).moveComputer();
}

function onShareClick(event) {
    getBoard(event).share();
}

function onGoToSourceClick(event) {
    getBoard(event).goToSource();
}

function onHelpClick(event) {
    getBoard(event).showHelp();
}