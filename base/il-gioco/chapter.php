<!DOCTYPE HTML>

<html lang="it">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Othello: corso interattivo - Il gioco</title>
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

		<h1>Il gioco</h1>

		<p>Othello &egrave; un gioco semplice e affascinante: bastano pochi minuti per imparare le
		regole e subito sarai pronto per sfidare i tuoi amici in partite
		mozzafiato! Ti accorgerai presto di quanto, giocando a Othello, sia importante stare
		attenti e pronti a qualsiasi sorpresa fino all'ultima mossa!</p>

		<p>Imprigiona i dischi avversari fra uno dei tuoi dischi gi&agrave; posati e
		quello che metti sulla tavola, capovolgili per renderli tuoi e
		cerca di averne pi&ugrave; dell'avversario a fine partita!</p>

		<p>Othello &egrave; stato inventato, come variante del più antico gioco inglese Reversi,
		dal nipponico Goro Hasegawa nel 1971; da allora il gioco si &egrave; diffuso in
		tutto il mondo, coinvolgendo sempre pi&ugrave; appassionati; sono stati indetti
		tutti gli anni i Campionati del Mondo e i Campionati delle diverse nazioni,
		fra cui i Campionati Italiani.</p>

        <?php $navigator->pagination() ?>

	</div>
</body>
</html>
