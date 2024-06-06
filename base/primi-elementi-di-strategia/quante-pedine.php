<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php include '../../header.php' ?>
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

        <h1>Quante pedine?</h1>

        <p>Se è vero che obiettivo del gioco è avere il maggior numero di pedine possibile,
        non è detto che per raggiungerlo sia necessario girare fin da subito tante
        pedine! Anzi: l'esperienza dei giocatori bravi dice che <b>all'inizio è
        meglio avere poche pedine</b>: questo faciliterà il compito di girarne tante
        verso la fine.</p>

        <p>La logica è questa: per muovere devi appoggiarti alle pedine dell'avversario. Quindi
        se vuoi avere tante mosse è necessario che l'avversario abbia tante pedine. Ma se ne ha tante
        lui, ne avrai poche tu.</p>

        <h2>Esempio</h2>

        <p>Consideriamo la posizione del diagramma 1, in cui tocca al Nero. Questi ha le seguenti mosse:
        A2, B2, G2, A3, G3, H3, H4, G5, G6, A7, B7, E7, F7, G7. Escludiamo A2, B2, G2, A7, B7 e G7 perché
        sono pericolose per gli angoli. Potremo anche escludere altre mosse perché non controllano
        sufficientemente il centro. Riteniamo che la mossa migliore sia A3 perché mantiene le pedine
        compatte e centrali e gira una sola pedina.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="quante-pedine-esempio.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1.
			</div>
		</div>

        <?php $navigator->pagination() ?>

    </div>

</body>
</html>
