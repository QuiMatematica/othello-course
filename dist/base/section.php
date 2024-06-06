<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php include '../header.php' ?>
</head>

<body>

    <?php
    include '../classes/Navigator.php';

    $navigator = new Navigator();

    $navigator->header();
    $navigator->offcanvas();
    ?>

	<div id="othello-content" class="container-xxl mt-4">

        <?php $navigator->pagination() ?>

        <h1>Livello base</h1>

        <h3>Capitoli</h3>
        <ul>
            <li><a href="il-gioco/chapter.php">Il gioco</a>: le regole, alcune precisazioni, e una scacchiera dove giocare;</li>
            <li><a href="quiz-per-cominciare/chapter.php">Piccoli quiz per cominciare</a>: per allenare l'occhio a individuare tutte le mosse a disposizione e i loro effetti;</li>
            <li><a href="primi-elementi-di-strategia/chapter.php">Primi elementi di strategia</a>: per cominciare a orientarsi nella scelta delle mosse e vincere le tue prime partite.</li>
        </ul>

        <?php $navigator->pagination() ?>

    </div>

</body>
</html>
