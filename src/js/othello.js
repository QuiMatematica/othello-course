'use strict';

import {boards} from "./page";
import FreeGameBoard from "./freeGameBoard";
import MatchFileBoard from "./matchFileBoard";
import ClickOnBoard from "./clickOnBoard";
import SequenceBoard from "./sequenceBoard";
import RefereeBoard from "./refereeBoard";

export function init() {
    console.log("init(): inizio")
    document.querySelectorAll('.free-game-board').forEach((item) => {
        const freeGame = new FreeGameBoard(item, boards.length);
        boards.push(freeGame);
    });
    document.querySelectorAll('.match-file-board').forEach((item) => {
        const matchFile = new MatchFileBoard(item, boards.length);
        boards.push(matchFile);
    });
    document.querySelectorAll('.click-on-board').forEach((item) => {
        const clickOn = new ClickOnBoard(item, boards.length);
        boards.push(clickOn);
    });
    document.querySelectorAll('.sequence-board').forEach((item) => {
        const sequence = new SequenceBoard(item, boards.length);
        boards.push(sequence);
    });
    document.querySelectorAll('.referee-board').forEach((item) => {
        const referee = new RefereeBoard(item, boards.length);
        boards.push(referee);
    });
    console.log("init(): fine")
}

console.log("Attivazione scacchiere");
init();