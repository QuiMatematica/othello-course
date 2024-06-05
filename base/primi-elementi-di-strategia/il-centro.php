<!DOCTYPE HTML>

<html lang="it">
<head>
	<title>Othello: corso interattivo - Il centro</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../tao/othello.css">
    <script type="module">
        import { init } from "../../tao/othello.js";
        document.addEventListener('DOMContentLoaded', init);
    </script>
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

        <h1>Il centro</h1>

        <p>La seconda strategia che è importante imparare è: <b>stare al centro e stare compatti</b>.</p>
        <p>&Egrave; facile capire perché: per muovere devi appoggiarti a una pedina
        avversaria esterna (cioè che ha almeno una casella adiacente vuota),
        quindi perché il tuo colore abbia tante mosse devono esserci tante pedine
        avversarie esterne. E se tu cerchi di stare al centro, le pedine dell'altro
        colore tenderanno ad andare verso l'esterno.</p>
        <p>Un buon modo per vedere se stai tenendo bene il centro è controllare se
        le tue pedine sono tutte vicine tra loro, mentre quelle avversarie sono
        divise. Ne abbiamo un esempio nel diagramma 1: il bianco è più centrale,
        mentre le pedine nere sono divise in tre blocchetti separati.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="il-centro-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1.
			</div>
		</div>

        <h2>Esempio</h2>

        <p>Consideriamo la posizione del diagramma 2, in cui tocca al Nero. Questi ha le seguenti mosse:
        D1, F1, F2, G4, H5, G6, E7, F7, G7. Escludiamo G7 perché rischia di dare l'angolo al Bianco.
        Quale, tra le altre, permette di controllare meglio il centro e di compattare le pedine? Sicuramente
        G4.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="il-centro-diagramma-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2.
			</div>
		</div>

        <?php $navigator->pagination() ?>

    </div>

</body>
</html>
