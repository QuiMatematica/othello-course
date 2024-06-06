<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php include '../../header.php' ?>
	<link rel="stylesheet" href="../../../tao/othello.css">
    <script type="module">
        import { init } from "../../../tao/othello.js";
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

		<h1>Quante pedine vengono girate</h1>

		<h2>Teoria</h2>

		<p>Obiettivo dell'Othello è arrivare alla fine della partita con la maggioranza delle pedine del proprio colore.
		Quindi una prima strategia, molto istintiva, potrebbe essere quella di girare, fin dalle prime mosse, il maggior numero
		di pedine.</p>

		<p>In verità, come presto capirai, non è questa la strategia migliore. All'inizio della partita, più che badare
			alla quantità di pedine, è necessario badare alla quantità di mosse a disposizione. E, per avere tante mosse,
			può essere opportuno, all'inizio della partita, avere poche pedine e mantenerle compatte al centro della
			tavola. Il problema della quantità di pedine viene rimandato alle ultime mosse.
			Riprenderemo questo concetto nella pagina riguardante la mobilità.

		<p>In questa pagina vorrei farti esercitare sul conteggio delle pedine che si voltano mossa dopo mossa.</p>

		<h2>Quiz</h2>

		<p>Nel diagramma 1 giochi con il nero e devi giocare tre mosse in modo da girare
		il maggior numero di pedine possibile.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="quante-pedine-girare-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1: girare il maggior numero di pedine possibile.
			</div>
		</div>

		<p>Quello
		che ti invito a fare adesso, quindi, &egrave; esattamente il contrario di prima: giocare tre
		mosse nel diagramma 2 in modo da girare il minor numero di pedine possibile.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="quante-pedine-girare-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2: girare il minor numero di pedine possibile.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
