<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

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

		<h1>Ottenere una mossa</h1>

		<h2>Teoria</h2>

		<p>Per poter giocare in una casella &egrave; necessario avere sempre una pedina che
		chiuda le pedine avversarie da voltare. Potremmo chiamarla "pedina di sponda". Se si
		vuole giocare in una casella ma non si ha la pedina di sponda appropriata &egrave; possibile
		procurarsela giocando in modo opportuno.</p>

		<p>Per esempio, nei diagrammi 1 e 2 tocca al nero, il quale vorrebbe poter giocare
		nella casella H1. Quella mossa sarebbe molto importante per lui perché le pedine negli
		angoli non possono essere girate; non solo: non sarebbero girabili tutte le pedine della
		colonna H. Tuttavia il nero non pu&ograve; giocare nell'angolo perch&eacute; non ha una pedina di sponda
		lungo la diagonale. Ha dunque due possibilit&agrave;:</p>

		<ul>
		  <li>giocare prima in C6, in modo che la stessa C6 possa essere la pedina di sponda per una
		  successiva mossa in H1 (diagramma 1);</li>
		  <li>giocare prima in B4, in modo da girare la pedina E4 che sar&agrave; di sponda per una
		  successiva mossa nell'angolo (diagramma 2);</li>
		</ul>

		<div class="row row-cols-1 row-cols-md-2 g-4">
  			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="ottenere-una-mossa-esempio-1.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 1: il nero muove in C6.
					</div>
				</div>

			</div>
			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="ottenere-una-mossa-esempio-2.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 2: il nero muove in B4.
					</div>
				</div>

			</div>
		</div>

		<p>Tra le due mosse &egrave; sicuramente migliore la B4, per due motivi: primo, con C6 il nero
		si forma un lungo muro di pedine esterne lungo la riga 6; secondo, mentre la pedina C6 può
		essere nuovamente girata dal bianco impedendo quindi la mossa in H1, la pedina E4 non può
		essere girata, quindi il nero ha la certezza di conquistare l'angolo.</p>

		<h2>Quiz</h2>

		<p>Nel diagramma 3 il nero muove e ottiene la possibilit&agrave; di giocare, nella mossa successiva,
		in C4.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="ottenere-una-mossa-quiz-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: il nero muove e ottiene la possibilità di giocare in C4.
			</div>
		</div>

		<p>Nel diagramma 4 ancora una volta il nero muove e ottiene la possibilit&agrave; di giocare in
		C4.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="ottenere-una-mossa-quiz-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4: il nero muove e ottiene la possibilit&agrave; di giocare in C4.
			</div>
		</div>

		<p>Nel diagramma 5 il nero muove e ottiene la mossa in C6.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="ottenere-una-mossa-quiz-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 5: il nero muove e ottiene la possibilit&agrave; di giocare in C6.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
