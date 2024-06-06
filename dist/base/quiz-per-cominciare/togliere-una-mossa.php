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

		<h1>Togliere una mossa</h1>

		<h2>Teoria</h2>

		<p>Durante una partita pu&ograve; capitare che si voglia impedire all'avversario di giocare una certa
		mossa. Per esempio, nel diagramma 1 il nero vorrebbe impedire al bianco la mossa in H8 (che,
		come vedremo, &egrave; una mossa molto forte). Per fare questo il nero deve girare la pedina bianca
		in D4, in modo che, diventata nera, non possa più essere usata come sponda per giocare
		nell'angolo. Per girare D4, il nero deve giocare in H4.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="togliere-una-mossa-esempio.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: il nero toglie all'avversario la mossa in H8.
			</div>
		</div>

		<h2>Quiz</h2>

		<p>Nel diagramma 2 giochi con il nero. Devi togliere al tuo avversario la mossa in
		H6.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="togliere-una-mossa-quiz-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 2: togli all'avversario la mossa in H6.
			</div>
		</div>

		<p>Nel diagramma 3 giochi ancora con il nero e devi impedire al bianco di giocare in G4.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="togliere-una-mossa-quiz-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 3: togli all'avversario la mossa in G4.
			</div>
		</div>

		<p>Nel diagramma 4, infine, giochi con il bianco. In questo caso vuoi togliere al tuo
		avversario la mossa in H6. Ma attenzione: sono pi&ugrave; di una le pedine che permettono quella
		mossa nera.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="togliere-una-mossa-quiz-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 3: togli all'avversario la mossa in H6.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
