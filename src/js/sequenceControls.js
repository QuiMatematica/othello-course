import {getBoard} from "./page";
import Controls from "./controls";

export default class SequenceControls extends Controls {

    // showComputerTooltip = true;

    computer;
    share;

    constructor(container, counter, sourceFile) {
        super(container, counter);
        this.addFirstButton().addPrevButton().addComputerButton().addShareButton();
        if (sourceFile != null) {
            this.addGoToSourceButton();
        }
    }

    addComputerButton() {
        // this.computer = this.createButton("Muove il computer", onComputerClick);
        this.computer = this.createIconButton("bi-caret-right-square", onComputerClick);
        // this.computer.setAttribute("data-bs-toggle", "tooltip");
        // this.computer.setAttribute("data-bs-placement", "top");
        // this.computer.setAttribute("title", "Clicca qui per vedere la risposta alla tua mossa");
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

    update(position, humanColor) {
        this.first.disabled = (position.prevPosition == null);
        this.prev.disabled = (position.prevPosition == null);
        this.computer.disabled = (position.nextPosition == null || position.turn === humanColor);
        // if (this.showComputerTooltip && !this.computer.disabled) {
        //     const tooltip = new bootstrap.Tooltip(this.computer);
        //     setTimeout(() => {
        //         tooltip.show();
        //
        //         // Nasconde il tooltip dopo 3 secondi
        //         setTimeout(() => {
        //             tooltip.hide();
        //         }, 3000);
        //     }, 3000);
        //     this.showComputerTooltip = false;
        // }
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

function onShareClick(event) {
    getBoard(event).share();
}

function onGoToSourceClick(event) {
    getBoard(event).goToSource();
}