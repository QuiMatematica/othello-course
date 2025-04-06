export const boards = []

export function getBoard(event) {
    const div = event.currentTarget;
    const counter = div.dataset.counter;
    return boards[counter];
}

let animatingFlip = false;

export function isAnimatingFlip() {
    return animatingFlip;
}

export function setAnimatingFlip(value) {
    animatingFlip = value;
}

export const xmlns = 'http://www.w3.org/2000/svg';

export function createStone() {
    const svg = document.createElementNS(xmlns, 'svg');
    svg.setAttributeNS(null, 'viewBox', '0 0 100 100');

    // The circle of the stone itself.
    const circle = document.createElementNS(xmlns, 'circle');
    circle.classList.add('stone');
    circle.setAttributeNS(null, 'cx', '50');
    circle.setAttributeNS(null, 'cy', '50');
    circle.setAttributeNS(null, 'r', '45');
    svg.appendChild(circle);

    return svg;
}

export function createSquare() {
    const svg = document.createElementNS(xmlns, 'svg');
    svg.setAttributeNS(null, 'viewBox', '0 0 100 100');

    // The circle of the stone itself.
    const square = document.createElementNS(xmlns, 'rect');
    square.classList.add('stone');
    square.setAttributeNS(null, 'width', '100');
    square.setAttributeNS(null, 'height', '100');
    svg.appendChild(square);

    return svg;
}
