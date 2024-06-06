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
