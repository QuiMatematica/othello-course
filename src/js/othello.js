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
document.getElementById("shareBtn").addEventListener("click", async () => {
    const shareData = {
        title: document.title,
        text: "Sto imparando a giocare a Othello e ho trovato questa pagina interessante!",
        url: window.location.href
    };

    if (navigator.share) {
        // Se supportato (mobile o browser compatibile)
        try {
            await navigator.share(shareData);
            console.log("Contenuto condiviso con successo!");
        } catch (err) {
            console.error("Errore nella condivisione:", err);
        }
    } else {
        // Fallback per desktop: apertura client email
        window.location.href = `mailto:?subject=${encodeURIComponent(shareData.title)}&body=${encodeURIComponent(shareData.text + " " + shareData.url)}`;
    }

    gtag("event", "share_click", {
        "event_category": "Interaction",
        "event_label": "Share page",
        "page_path": window.location.pathname
    });
    console.log("Condivisione registrata su GA.");

});