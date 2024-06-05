<!DOCTYPE HTML>

<html lang="it">
<head>
	<title>Othello: corso interattivo - Tre consigli</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include '../../classes/Navigator.php';

    $navigator = new Navigator();

    $navigator->header();
    $navigator->offcanvas();
    ?>

	<div id="othello-content" class="container-xxl mt-4">

        <?php $navigator->pagination() ?>

		<h1>Primi elementi di strategia</h1>

		<h2>Notazioni</h2>

		<p>Prima di parlare di strategie, facciamo un po' di chiarezza sulle notazioni. In particolare:</p>
		<ul>
			<li><a href="notazione-caselle.php">come indicare le caselle;</a></li>
			<li><a href="notazione-partite.php">come registrare le partite.</a></li>
		</ul>

		<h2>Tre consigli</h2>

		<ul>
			<li><a href="gli-angoli.php">Cerca di conquistare gli angoli e di non darli all'avversario.</a></li>
			<li><a href="il-centro.php">Cerca di tenere le tue pedine compatte e al centro,
				e di spargere le pedine dell'avversario all'esterno.</a></li>
			<li><a href="quante-pedine.php">Cerca di girare poche pedine all'inizio,
				e di girarne tante solo verso la fine della partita.</a></li>
		</ul>

		<p>Se vuoi sapere qual &egrave; la logica di questi consigli clicca sui collegamenti.</p>

		<p>Comincia a giocare cercando di seguire questi consigli e vedrai che il tuo gioco migliorer&agrave;.</p>

		<p>Buon divertimento!</p>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
