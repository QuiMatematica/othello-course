import Square from "./square";

class NullIso {
    constructor() {
    }
    position(grid) {
        return grid;
    }
    square(square) {
        return square;
    }
}

export const NULL_ISO = new NullIso();

export class R180Iso {
    constructor() {
    }
    position(grid) {
        const newGrid = [];
        for (let x = 0; x < 8; x++) {
            const row = [];
            newGrid.push(row);
            for (let y = 0; y < 8; y++) {
                row.push(grid[7 - x][7 - y]);
            }
        }
        return newGrid;
    }
    square(square) {
        return new Square(7 - square.x, 7 - square.y);
    }
}

export class WDiaIso {
    constructor() {
    }
    position(grid) {
        const newGrid = [];
        for (let x = 0; x < 8; x++) {
            const row = [];
            newGrid.push(row);
            for (let y = 0; y < 8; y++) {
                row.push(grid[y][x]);
            }
        }
        return newGrid;
    }
    square(square) {
        return new Square(square.y, square.x);
    }
}

export class BDiaIso {
    constructor() {
    }
    position(grid) {
        const newGrid = [];
        for (let x = 0; x < 8; x++) {
            const row = [];
            newGrid.push(row);
            for (let y = 0; y < 8; y++) {
                row.push(grid[7 - y][7 - x]);
            }
        }
        return newGrid;
    }
    square(square) {
        return new Square(7 - square.y, 7 - square.x);
    }
}

export function getIso(json) {
    let iso = NULL_ISO;
    if (json.iso != null) {
        // lettura dell'isometria
        if (json.iso === 'random') {
            const classes = [NullIso, R180Iso, WDiaIso, BDiaIso];
            const n = Math.floor(Math.random() * 4);
            const c = classes[n];
            iso = new c();
        }
        else if (json.iso === 'r180') {
            iso = new R180Iso();
        }
        else if (json.iso === 'wDia') {
            iso = new WDiaIso();
        }
        else if (json.iso === 'bDia') {
            iso = new BDiaIso();
        }
    }
    return iso;
}