<!DOCTYPE HTML>

<html lang="it">
<head>
	<title>Othello: corso interattivo - Livello base</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
