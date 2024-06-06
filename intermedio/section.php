<!DOCTYPE HTML>

<html lang="it">
<head>
	<title>Othello: corso interattivo - Livello intermedio</title>
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

        <h1>Livello intermedio</h1>

        <p>Questa sezione contiene una trattazione completa delle strategie fondamentali
        dell'Othello. In particolare parleremo di:</p>

        <ul>
            <li><a href="pedine-stabili/chapter.php">pedine stabili</a>: l'importanza strategica degli angoli:</li>
            <li><a href="mobilita/chapter.php">mobilità</a>: perché è importante avere tante mosse a disposizione;</li>
<!--            <li>bordi: come sfruttarli e come attaccarli;</li>-->
            <li><a href="tempi-di-gioco/chapter.php">tempi di gioco</a>: come gestire zone ristrette della scacchiera;</li>
            <li><a href="apertura/chapter.php">apertura</a>: come giocare le prime mosse di ogni partita;</li>
<!--            <li>parità: perché è importante muovere per ultimo;</li>-->
<!--            <li>finale: cos'è il finale perfetto e come si trova.</li>-->
        </ul>

        <?php $navigator->pagination() ?>

    </div>

</body>
</html>
