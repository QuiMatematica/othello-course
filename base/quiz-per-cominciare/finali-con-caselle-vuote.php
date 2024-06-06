<!DOCTYPE HTML>

<html lang="it">
<head>
	<title>Othello: corso interattivo - Finali con caselle vuote</title>
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

		<h1>Finali con caselle vuote</h1>

		<h2>Teoria</h2>

		<p>Le partite terminano quando nessuno dei due giocatori ha a disposizione delle mosse.
		Questo succede, solitamente, quando tutte le caselle sono occupate, ma non &egrave; necessario.
		Per esempio la partita mostrata nel diagramma 1 &egrave; terminata, malgrado le caselle vuote.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="finali-con-caselle-vuote-esempio.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: il bianco ha mosso in H2.
			</div>
		</div>

		<h2>Quiz</h2>

		<p>Nel diagramma 2 il nero ha la possibilit&agrave; di chiudere anticipatamente la partita.
		Trova e gioca la mossa.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="finali-con-caselle-vuote-quiz-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 2: il nero muove, termina la partita e vince.
			</div>
		</div>

		<p>Nel diagramma 3 tocca al bianco muovere. Con una mossa pu&ograve; terminare
		e vincere la partita. Trova la mossa e giocala.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="finali-con-caselle-vuote-quiz-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 3: il bianco muove, termina la partita e vince.
			</div>
		</div>

		<p>Un caso particolare &egrave; quello in cui tutte le pedine diventano tutte dello
		stesso colore. Dalle regole la vittoria &egrave; considerata per 64 a 0.
		Nel diagramma 4 il bianco muove e vince 64 a 0. Trova la mossa e giocala.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="finali-con-caselle-vuote-quiz-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 4: il bianco muove e vince 64 a 0.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
