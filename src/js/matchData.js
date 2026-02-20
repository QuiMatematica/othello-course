import {createStone} from "./page";

export default class MatchData {

    scoreContainer;
    scoreElements = {};
    json;

    constructor(container, json) {
        if (json.match.tournament != null) {
            this.scoreContainer = document.createElement('div');
            this.scoreContainer.classList.add('score-container');
            this.scoreContainer.classList.add('text-center');
            this.scoreContainer.classList.add('fw-bold');
            this.scoreContainer.innerHTML = json.match.tournament;
            container.appendChild(this.scoreContainer);
        }

        this.scoreContainer = document.createElement('div');
        this.scoreContainer.classList.add('score-container');
        this.scoreContainer.classList.add('m-1');
        container.appendChild(this.scoreContainer);

        // Create the score board.
        this.scoreElements.black = this.createScore(this.scoreContainer);
        this.scoreElements.white = this.createScore(this.scoreContainer);

        let img = '';
        if (json.match.black.flag != null) {
            img = '<img src="https://flagcdn.com/24x18/' + json.match.black.flag + '.png"> ';
        }
        this.scoreElements.black.innerHTML = img + json.match.black.name;
        if (json.match.white.flag != null) {
            img = '<img src="https://flagcdn.com/24x18/' + json.match.white.flag + '.png"> ';
        }
        this.scoreElements.white.innerHTML = img + json.match.white.name;
    }

    createScore(scoreContainer) {
        // The container for this player's score.
        const span = document.createElement('span');
        span.classList.add('score-wrapper');
        scoreContainer.appendChild(span);

        // Return the container and score span.
        return span;
    }
}
