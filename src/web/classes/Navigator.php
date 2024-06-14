<?php

class Navigator {

    private $json;
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
        $this->json = json_decode($file, true);

        $sectionIndex = array_search($sectionName . '/', array_column($this->json['sections'], 'href'));
        $this->section = $this->json['sections'][$sectionIndex];

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
        else if ($pageIndex === 0) {
            // sei alla prima pagina di un capitolo
            $this->prevPage = $this->chapter;
            $this->prevPage['href'] = 'chapter.php';
        }
        else {
            if ($chapterIndex > 0) {
                // sei nell'introduzione di un capitolo, e non è il primo capitolo della sezione
                $prevChapter = $this->section['chapters'][$chapterIndex - 1];
                $this->prevPage = $prevChapter['pages'][count($prevChapter['pages']) - 1];
                $this->prevPage['href'] = '../' . $prevChapter['href'] . $this->prevPage['href'];
            }
            else if ($chapterIndex === 0) {
                // sei nell'introduzione del primo capitolo della sezione
                $this->prevPage = $this->section;
                $this->prevPage['href'] = '../section.php';
            }
            else if ($sectionIndex > 0) {
                // sei nell'introduzione di una sezione, e non è la prima sezione
                $prevSection = $this->json['sections'][$sectionIndex - 1];
                $prevChapter = $prevSection['chapters'][count($prevSection['chapters']) - 1];
                $this->prevPage = $prevChapter['pages'][count($prevChapter['pages']) - 1];
                $this->prevPage['href'] = '../' . $prevSection['href'] . $prevChapter['href'] . $this->prevPage['href'];
            }
            // altrimenti sei nell'introduzione della prima sezione o in una pagina ignota all'indice
        }

        if ($this->chapter != null) {
            if ($pageIndex === false) {
                // sei nell'introduzione di un capitolo
                $this->nextPage = $this->chapter['pages'][0];
            }
            else if ($pageIndex < count($this->chapter['pages']) - 1) {
                $this->nextPage = $this->chapter['pages'][$pageIndex + 1];
            }
            else {
                // sei nell'ultima pagina di un capitolo
                if ($chapterIndex < count($this->section['chapters']) - 1) {
                    // il capitolo non è l'ultimo della sezione
                    $this->nextPage = $this->section['chapters'][$chapterIndex + 1];
                    $this->nextPage['href'] = '../' . $this->nextPage['href'] . 'chapter.php';
                }
                else if ($sectionIndex < count($this->json['sections']) - 1) {
                    // il capitolo è l'ultimo della sezione, ma non sei nell'ultima sezione
                    $this->nextPage = $this->json['sections'][$sectionIndex + 1];
                    $this->nextPage['href'] = '../../' . $this->nextPage['href'] . 'section.php';
                }
            }
        }
        else {
            // sei all'inizio di una sezione
            $this->nextPage = $this->section['chapters'][0];
            $this->nextPage['href'] = $this->nextPage['href'] . 'chapter.php';
        }
    }

    function header() {
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
        $this->buildOffcanvasButton();
        if ($this->nextPage != null) {
            $this->buildPreviousNext(false);
        }
        echo "</ul>";
        echo "</nav>";
    }

    private function buildPreviousNext($prev) {
        echo "<li class='pages-item'>";
        if ($prev) {
            echo "<a class='pages-link' aria-label='Previous' href='{$this->prevPage['href']}'>";
            echo "<span class='px-1' aria-hidden='true'>&laquo;</span>";
            echo "<span class='sr-only'>{$this->prevPage['title']}</span>";
            echo "</a>";
        }
        else {
            echo "<a class='pages-link' aria-label='Next' href='{$this->nextPage['href']}'>";
            echo "<span class='sr-only'>{$this->nextPage['title']}</span>";
            echo "<span class='px-1' aria-hidden='true'>&raquo;</span>";
            echo "</a>";
        }
        echo "</li>";
    }

    private function buildOffcanvasButton() {
        echo "<li class='pages-item'>";
        echo "<a class='pages-link' data-bs-toggle='offcanvas' href='#section-index' role='button' aria-controls='offcanvasExample'>Indice</a>";
        echo "</li>";
    }

    function offcanvas() {
        echo "<div class='offcanvas offcanvas-start' tabindex='-1' id='section-index' aria-labelledby='offcanvasLabel'>";
        echo "<div class='offcanvas-header'>";
        echo "<h5 class='offcanvas-title' id='offcanvasLabel'>Indice</h5>";
        echo "<button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Chiudi'></button>";
        echo "</div>";

        echo "<div class='offcanvas-body'>";

        foreach ($this->json['sections'] as $section) {
            $this->addSection($section);
        }

        echo "</div>";

        echo "</div>";
    }

    private function addSection($section) {
        $sectionHref = ($this->inChapter) ? '../../' : '../';
        $sectionHref = $sectionHref . $section['href'] . 'section.php';
        echo "<h5>";
        echo "<a class='link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover' href='{$sectionHref}'>";
        echo "{$section['title']}";
        echo "</a>";
        echo "</h5>";

        echo "<ul class='nav flex-column'>";

        foreach ($section['chapters'] as $chapter) {
            $this->addChapter($section, $chapter);
        }

        echo "</ul>";
    }

    private function addChapter($section, $chapter) {
        $chapterHref = ($this->inChapter) ? '../../' : '../';
        $chapterHref = $chapterHref . $section['href'] . $chapter['href'] . 'chapter.php';
        echo "<li class='nav-item pb-3'>";
        echo "<a class='link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover' href='{$chapterHref}'>";
        echo "{$chapter['title']}";
        echo "</a>";

        echo "<ul>";

        foreach ($chapter['pages'] as $page) {
            $this->addPage($section, $chapter, $page);
        }

        echo "</ul>";

        echo "</li>";
    }

    private function addPage($section, $chapter, $page) {
        $pageHref = ($this->inChapter) ? '../../' : '../';
        $pageHref = $pageHref . $section['href'] . $chapter['href'] . $page['href'];
        echo "<li class='nav-item'>";
        echo "<a class='link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover' href='{$pageHref}'>";
        echo "{$page['title']}";
        echo "</a>";
    }

}