import Position, {WHITE} from "./position";
import Board from "./board";
import Score from "./score";
import {boards, isAnimatingFlip} from "./page";
import Square from "./square";
import SequenceControls from "./sequenceControls";
import PositionComment from "./positionComment";

export default class SequenceBoard {

    sequenceFile;
    quizHref;
    sourcePage;

    currentPosition;
    board;
    score;
    controls;
    comment;
    humanColor;

    errorState;

    constructor(container, counter) {
        this.currentPosition = Position.getEmptyPosition();
        this.board = new Board(container, counter, sequenceBoardOnClick);
        this.board.setPosition(this.currentPosition);
        this.score = new Score(container, this.board);
        this.score.takeScore(this.currentPosition);

        this.sequenceFile = container.dataset['file'];

        if (this.sequenceFile === 'by-url') {
            let url = new URL(window.location.href);
            this.sequenceFile = "../" + url.searchParams.get("quiz");
            console.log("Sequence file: " + this.sequenceFile);
            this.sourcePage = "../" + url.searchParams.get("source");
            console.log("Source file: " + this.sourcePage);
        }

        this.controls = new SequenceControls(container, counter, this.sourcePage);
        this.comment = new PositionComment(container);

        fetch(this.sequenceFile)
            .then((response) => response.json())
            .then((json) => this.readMatch(json));
    }

    readMatch(json) {
        this.currentPosition = Position.getPositionFromJSON(json);

        this.humanColor = this.currentPosition.turn;
        this.errorState = false;

        if (this.currentPosition.nextPosition.nextPosition == null) {
            this.controls.prev.remove();
            this.controls.computer.remove();
        }

        this.board.setPosition(this.currentPosition);
        this.score.takeScore(this.currentPosition);
        this.controls.update(this.currentPosition, this.humanColor);
        this.comment.setPositionComment(this.currentPosition);
        this.addHumanComment();
    }

    goToNextPosition() {
        const nextPosition = this.currentPosition.nextPosition;
        this.board.playPosition(nextPosition);
        this.score.takeScore(nextPosition);
        if (nextPosition.nextPosition == null) {
            // QUIZ TERMINATO
            this.comment.setPositionComment(nextPosition);
            if (this.errorState) {
                this.addFinalErrorComment();
            }
            else {
                this.addFinalComment();
            }
        }
        else {
            // IL QUIZ NON E' TERMINATO
            this.comment.setPositionComment(nextPosition);
            if (nextPosition.turn === this.humanColor) {
                this.addHumanComment();
            }
            else {
                this.comment.addComment("<br><i class=\"bi bi-stars\"></i><br><b>Tocca al tuo avversario.</b><br>Clicca <i class=\"bi bi-caret-right-square\"></i> per vedere la sua mossa.");
            }
        }
        this.controls.update(nextPosition, this.humanColor);
        this.currentPosition = nextPosition;
    }

    addHumanComment() {
        this.comment.addComment("<br><i class=\"bi bi-stars\"></i><br><b>Tocca a te e giochi con il " + SequenceBoard.italianColor(this.humanColor) + ".</b><br>Seleziona la tua mossa sulla tavola.");
    }

    addFinalComment() {
        let comment = '<br><i class="bi bi-stars"></i><br><b>Quiz terminato.</b><br>';
        if (this.sourcePage == null) {
            comment += 'Condividilo cliccando su <i class="bi bi-share"></i>';
        }
        else {
            comment += 'Vai alla pagina che contiene il quiz cliccando su <i class="bi bi-file-earmark"></i>';
        }
        this.comment.addComment(comment);
    }

    addFinalErrorComment() {
        let comment = '<br><i class="bi bi-stars"></i><br><b>Analisi terminata.</b><br>Clicca <i class="bi bi-chevron-bar-left"></i> per riprovare.';
        this.comment.addComment(comment);
    }

    static italianColor(color) {
        return color === WHITE ? 'bianco' : 'nero';
    }


    moveComputer() {
        if (this.currentPosition.nextPosition != null) {
            this.goToNextPosition();
        }
    }

    moveHuman(square) {
        if (this.currentPosition.turn === this.humanColor) {
            const expected = this.currentPosition.nextPosition.played;
            if (square.x === expected.x && square.y === expected.y) {
                this.goToNextPosition();
            }
            else {
                this.errorState = true;
                // Cerchiamo la mossa sbagliata tra gli errori caricati
                let wrongPosition = this.currentPosition.searchError(square);
                if (wrongPosition != null) {
                    console.log("Trovato errore tra quelli presenti nel file!");
                    this.errorMove(wrongPosition);
                }
                else {
                    console.log("NON Trovato errore tra quelli presenti nel file!");
                    const wrongPosition = this.currentPosition.playStone(square, true);
                    if (wrongPosition == null) {
                        // L'utente ha selezionato una mossa non valida.
                        this.comment.setComment("<span class=\"text-danger fw-bold\">Mossa non legale.</span>");
                        this.comment.addComment("<br><i class=\"bi bi-stars\"></i><br>");
                        this.comment.addComment(this.currentPosition.comment);
                        this.addHumanComment();
                    } else {
                        this.errorMove(wrongPosition);
                    }
                }
            }
        }
    }

    errorMove(wrongPosition) {
        this.board.playPosition(wrongPosition);
        this.score.takeScore(wrongPosition);
        this.comment.setComment("<span class=\"text-danger fw-bold\">Mossa errata.</span><br>");
        if (wrongPosition.comment != null) {
            this.comment.addComment(wrongPosition.comment);
            this.comment.addComment("<br><i class=\"bi bi-stars\"></i>");
            if (wrongPosition.nextPosition != null) {
                this.comment.addComment("<br>Clicca <i class=\"bi bi-caret-right-square\"></i> per analizzare l'errore.")
            }
            else{
                this.comment.addComment("<br>Clicca <i class=\"bi bi-chevron-bar-left\"></i> per riprovare.");
            }
        }

        this.controls.update(wrongPosition, null);
        this.currentPosition = wrongPosition;
    }

    goToPreviousPosition() {
        const prevPosition = this.currentPosition.prevPosition;
        if (prevPosition != null) {
            this.board.setPosition(prevPosition);
            this.score.takeScore(prevPosition);
            this.comment.setPositionComment(prevPosition);
            if (prevPosition.turn === this.humanColor) {
                this.addHumanComment();
            }
            else {
                this.comment.addComment("<br><i class=\"bi bi-stars\"></i><br><b>Tocca al tuo avversario.</b><br>Clicca <i class=\"bi bi-caret-right-square\"></i> per vedere la sua mossa.");
            }
            this.controls.update(prevPosition, this.humanColor);
            this.currentPosition = prevPosition;
        }
    }

    goToFirstPosition() {
        let curPosition = this.currentPosition;
        let prevPosition = curPosition.prevPosition;
        if (prevPosition != null) {
            while (prevPosition != null) {
                curPosition = prevPosition;
                prevPosition = curPosition.prevPosition;
            }
            this.board.setPosition(curPosition);
            this.score.takeScore(curPosition);
            this.comment.setPositionComment(curPosition);
            if (curPosition.turn === this.humanColor) {
                this.addHumanComment();
            }
            else {
                this.comment.addComment("<br><i class=\"bi bi-stars\"></i><br><b>Tocca al tuo avversario.</b><br>Clicca <i class=\"bi bi-caret-right-square\"></i> per vedere la sua mossa.");
            }
            this.controls.update(curPosition, this.humanColor);
            this.currentPosition = curPosition;
        }
        this.errorState = false;
    }

    async share() {
        const shareData = {
            title: "Un quiz di Othello",
            text: "Prova a risolvere questo quiz di Othello!",
            url: this.getQuizPageHref()
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
            "event_label": "Share quiz",
            "page_path": "/" + this.quizHref
        });
        console.log("Condivisione registrata su GA.");
    }

    getQuizPageHref() {
        // Ottieni l'URL corrente
        let url = new URL(window.location.href);

        // Suddividi il percorso in segmenti
        let pathSegments = url.pathname.split('/').filter(segment => segment !== '');

        // Salva gli ultimi due livelli
        let savedLevels = pathSegments.slice(-3);

        // Rimuovi gli ultimi tre livelli
        if (pathSegments.length >= 3) {
            pathSegments = pathSegments.slice(0, -3);
        } else {
            pathSegments = []; // Se ci sono meno di tre livelli, vai alla radice
        }

        // Aggiungi "quiz.php"
        pathSegments.push("pratica");
        pathSegments.push("quiz.php");

        this.quizHref = `${savedLevels.slice(0, 2).join('/')}/${this.sequenceFile}`;

        // Ricostruisci il nuovo URL
        let newUrl = `${url.origin}/${pathSegments.join('/')}?quiz=${this.quizHref}&source=${savedLevels.join('/')}`;

        // Stampa il nuovo URL in console
        console.log(newUrl);

        return newUrl;
    }

    goToSource() {
        window.location.href = this.sourcePage;
    }
}

function sequenceBoardOnClick(event) {
    // Ignore if we're still animating the last move.
    if (isAnimatingFlip()) {
        return;
    }

    // Find the coordinates of the clicked square.
    const div = event.currentTarget;
    const {counter, x, y} = div.dataset;  // NOTE: strings, not ints
    const sequenceBoard = boards[counter];
    const square = new Square(parseInt(x), parseInt(y));
    sequenceBoard.moveHuman(square);
}
