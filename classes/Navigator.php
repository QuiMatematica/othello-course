<?php

class Navigator {

    public $section;
    public $chapter;
    public $page;

    public function __construct() {
        $uri = $_SERVER['REQUEST_URI'];
        $path = parse_url($uri, PHP_URL_PATH);
        $pathLevels = explode('/', trim($path, '/'));

//            let inChapter = false;
//    if (fileName == "section.html") {
//        sectionName = urlSplitted.pop();
//    }
//    else {
//        chapterName = urlSplitted.pop();
//        sectionName = urlSplitted.pop();
//        inChapter = true;
//    }

        $fileName = $pathLevels[count($pathLevels) - 1];
        if ($fileName === 'section.php') {
            $indexHref = '../index.json';
        }
        else {
            $indexHref = '../../index.json';
        }

        $file = file_get_contents($indexHref);
        $json = json_decode($file, true);

    }

}