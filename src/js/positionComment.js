export default class PositionComment {

    div;

    constructor(container) {
        this.div = document.createElement("div");
        this.div.classList.add('text-center');
        container.appendChild(this.div)
    }

    setComment(comment) {
        if (comment == null) {
            this.div.innerHTML = "";
        }
        else {
            this.div.innerHTML = comment;
        }
    }

    setPositionComment(position) {
        if (position.comment == null) {
            this.div.innerHTML = "";
        }
        else {
            this.div.innerHTML = position.comment;
        }
    }

}
