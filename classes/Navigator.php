<?php

class Navigator {

    public $inChapter;
    public $section;
    public $chapter;
    public $page;
    public $prevPage;
    public $nextPage;

    public function __construct() {
        $uri = $_SERVER['REQUEST_URI'];
        $path = parse_url($uri, PHP_URL_PATH);
        $pathLevels = explode('/', trim($path, '/'));

        $pageName = $pathLevels[count($pathLevels) - 1];
        $sectionName = null;
        $chapterName = null;

        if ($pageName === 'section.php') {
            $indexHref = '../index.json';
            $sectionName = $pathLevels[count($pathLevels) - 2];
            $this->inChapter = false;
        }
        else {
            $indexHref = '../../index.json';
            $chapterName = $pathLevels[count($pathLevels) - 2];
            $sectionName = $pathLevels[count($pathLevels) - 3];
            $this->inChapter = true;
        }

        $file = file_get_contents($indexHref);
        $json = json_decode($file, true);

        $sectionIndex = array_search($sectionName . '/', array_column($json['sections'], 'href'));
        $this->section = $json['sections'][$sectionIndex];

        $chapterIndex = -1;
        $pageIndex = -1;

        if ($this->inChapter) {
            $chapterIndex = array_search($chapterName . '/', array_column($this->section['chapters'], 'href'));
            $this->chapter = $this->section['chapters'][$chapterIndex];

            $pageIndex = array_search($pageName, array_column($this->chapter['pages'], 'href'));
            $this->page = $this->chapter['pages'][$pageIndex];
        }

        if ($pageIndex > 0) {
            $this->prevPage = $this->chapter['pages'][$pageIndex - 1];
        }
        else if ($pageIndex == 0) {
            // sei alla prima pagina di un capitolo
            $this->prevPage = $this->chapter;
            $this->chapter['href'] = 'chapter.php';
        }
        else {
            if ($chapterIndex > 0) {
                // sei nell'introduzione di un capitolo, e non è il primo capitolo della sezione
                $prevChapter = $this->section['chapters'][$chapterIndex - 1];
                $this->prevPage = $prevChapter['pages'][count($prevChapter['pages']) - 1];
            }
        }

        if ($this->chapter != null) {

        }
        else {
            // sei all'inizio di una sezione
            $this->nextPage = $this->section['chapters'][0];
            $this->nextPage['href'] = 'chapter.php';
        }
    }

    function initHeader() {
        $index_href = ($this->inChapter) ? '../../index.php' : '../index.php';
        echo "<nav class='navbar navbar-expand-lg bg-primary' data-bs-theme='dark'>";
        echo "<div class='container-xxl'>";
        echo "<a class='navbar-brand h1' href='{$index_href}'>Othello: corso interattivo</a>";
        echo "</div>";
        echo "</nav>";
    }

    function pagination() {
        echo "<nav class='my-3'>";
        echo "<ul class='pagination justify-content-center'>";
        if ($this->prevPage != null) {
            $this->buildPreviousNext(true);
        }
//        $this->buildOffcanvasButton();
        if ($this->nextPage != null) {
            $this->buildPreviousNext(false);
        }
        echo "</ul>";
        echo "</nav>";
    }

    private function buildPreviousNext($prev) {
        echo "<li class='page-item'>";
        if ($prev) {
            echo "<a class='page-link' aria-label='Previous' href='{$this->prevPage['href']}'>";
            echo "<span class='px-1' aria-hidden='true'>&laquo;</span>";
            echo "<span class='sr-only'>{$this->prevPage['title']}</span>";
            echo "</a>";
        }
        else {
            echo "<a class='page-link' aria-label='Previous' href='{$this->nextPage['href']}'>";
            echo "<span class='sr-only'>{$this->nextPage['title']}</span>";
            echo "<span class='px-1' aria-hidden='true'>&raquo;</span>";
            echo "</a>";
        }
        echo "</li>";
    }

}