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

		<h1>Per ottenere una pedina</h1>

		<h2>Teoria</h2>

		<p>Talvolta pu&ograve; succedere che si voglia ottenere una determinata pedina
		per particolari scopi. Bisogna allora capire qual &egrave; la mossa giusta che
		consente di ottenerla. Nel diagramma 1 il nero desidera conquistare la
		pedina in E5: per farlo deve giocare in F6.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="ottenere-una-pedina-esempio.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1.
			</div>
		</div>

		<h2>Quiz</h2>

		<p>Nel diagramma 2 muove il bianco. Gioca la mossa che permette di ottenere
		la pedina in E5.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="ottenere-una-pedina-quiz-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2.
			</div>
		</div>

		<p>Nel diagramma 3 muove il bianco. Quali mosse ha a disposizione per conquistare
		la pedina C4? Clicca su tutte le caselle in cui pu&ograve; giocare per ottenere ci&ograve;.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="click-on-board" data-file="ottenere-una-pedina-quiz-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3.
			</div>
		</div>

		<p>Nel diagramma 4, invece, giochi con il nero e devi muovere in modo da
		conquistare la pedina F4 senza per&ograve; girare la pedina in E4.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="ottenere-una-pedina-quiz-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
