'use strict';

export function loadIndexFromPage() {
    const index = "../../index.json#20240410";
    let json;
    fetch(index)
        .then((response) => response.json())
        .then((json) => initPage(json));
}

function initPage(json) {
    const urlSplitted = window.location.pathname.split("/")
    const fileName = urlSplitted.pop();
    const sectionName = urlSplitted.pop();
    const sectionIndex = json.sections.findIndex(x => x.href == sectionName + "/index.html");
    const section = json.sections[sectionIndex];
    const pageIndex = section.pages.findIndex(x => x.href == sectionName + "/" + fileName);
    // se non lo trova => pageIndex == -1
    var prevPage = null;
    var nextPage = null;
    if (pageIndex > 0) {
        prevPage = section.pages[pageIndex - 1];
    }
    else if (pageIndex == 0) {
        prevPage = section;
    }
    else {
        if (sectionIndex > 0) {
            const prevSection = json.sections[sectionIndex - 1];
            prevPage = prevSection.pages[prevSection.pages.length - 1];
        }
    }
    if (pageIndex < section.pages.length - 1) {
        nextPage = section.pages[pageIndex + 1];
    }
    else {
        if (sectionIndex < json.sections.length - 1) {
            nextPage = json.sections[sectionIndex + 1];
        }
    }

    initOffcanvas(json);
    initHeader();

    const othelloContent = document.getElementById("othello-content");
    othelloContent.prepend(buildPagination(json, prevPage, nextPage));
    othelloContent.append(buildPagination(json, prevPage, nextPage));
}