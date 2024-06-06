<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php include '../../header.php' ?>
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
