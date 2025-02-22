export default class PositionComment {

    div;

    constructor(container) {
        this.div = document.createElement("div");
        this.div.classList.add('text-center');
        this.div.classList.add('m-2');
        this.div.classList.add('p-1');
        this.div.classList.add('overflow-auto');
        this.div.classList.add('bg-white');
        this.div.style.height = '125px';
        container.appendChild(this.div)
    }

    addComment(comment) {
        if (comment != null) {
            this.div.innerHTML += comment;
            this.div.scrollTo({ top: 0, behavior: "smooth" });
        }
    }

    setComment(comment) {
        if (comment == null) {
            this.div.innerHTML = "";
            this.div.scrollTo({ top: 0, behavior: "smooth" });
        }
        else {
            this.div.innerHTML = comment;
            this.div.scrollTo({ top: 0, behavior: "smooth" });
        }
    }

    setPositionComment(position) {
        if (position.comment == null) {
            this.div.innerHTML = "";
            this.div.scrollTo({ top: 0, behavior: "smooth" });
        }
        else {
            this.div.innerHTML = position.comment;
            this.div.scrollTo({ top: 0, behavior: "smooth" });
        }
    }

}
