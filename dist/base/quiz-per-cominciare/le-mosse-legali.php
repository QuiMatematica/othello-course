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

		<h1>Le mosse legali</h1>

		<h2>Teoria</h2>

		<p>Riassumendo, &egrave; possibile giocare una pedina in una casella se:</p>

		<ul>
			<li>la casella &egrave; libera;</li>
			<li>la casella &egrave; adiacente a una pedina di colore avversario;</li>
			<li>&egrave; presente almeno un disco avversario incastrato tra la pedina
			che si vuole porre e quelle gi&agrave; presenti del proprio colore.</li>
		</ul>

		<p>In ogni posizione scorri con gli occhi il
		perimetro della formazione di pedine per trovare tutte le mosse consentite al
		colore giocante.</p>

		<p>Per esempio, nella posizione del diagramma 1 il bianco ha a disposizione le seguenti mosse:
			A3, A4, A5, A6, B3, E1, F1, G2, G3, G5 e G6.</p>

		<p>C3 non è una mossa legale, perch&eacute; la casella non è libera.</p>

		<p>C2 non è una mossa legale, perché non c'&egrave; alcuna pedina avversaria adiacente.</p>

		<p>H4 non è una mossa legale, perché non c'&egrave; alcuna pedina avversaria incastrata.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="le-mosse-legali-esempio.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: esempio.
			</div>
		</div>

		<p>Come in molti altri giochi, una volta appoggiata una pedina non si pu&ograve;
		ritirare la mossa. Tanto pi&ugrave; che, nell'Othello, a ogni mossa
		sono molte le pedine coinvolte. Bisogna quindi pensare bene prima di
		muovere.</p>

		<h2>Quiz</h2>

		<p>Nei diagrammi seguenti clicca su tutte (e sole) le caselle in cui il colore indicato
		nella didascalia pu&ograve; giocare.</p>

		<div class="row row-cols-1 row-cols-md-3 g-4">
  			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="click-on-board" data-file="le-mosse-legali-quiz-1.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 2: clicca le mosse legali del bianco.
					</div>
				</div>

			</div>
			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="click-on-board" data-file="le-mosse-legali-quiz-2.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 3: clicca le mosse legali del bianco.
					</div>
				</div>

			</div>
			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="click-on-board" data-file="le-mosse-legali-quiz-3.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 4: clicca le mosse legali del nero.
					</div>
				</div>

			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
