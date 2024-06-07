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

		<h1>La prima mossa</h1>

		<p>Ogni partita di Othello inizia con le quattro pedine posizionate come nel diagramma 1.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="prima-mossa-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1: la posizione di partenza.
			</div>
		</div>

		<p>La prima mossa spetta sempre al nero, il quale ha quattro possibilità:
		D3, C4, E6 ed F5. In qualunque casella giochi la posizione generata è sempre
		la stessa, ruotata o riflessa rispetto a una delle due diagonali o rispetto al
		centro della scacchiera (diagrammi 2-5).</p>

		<div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="prima-mossa-diagramma-2.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 2: D3.
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="prima-mossa-diagramma-3.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 3: C4.
					</div>
				</div>

            </div>
        </div>

		<div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="prima-mossa-diagramma-4.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 4: F5.
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="prima-mossa-diagramma-5.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 5: E6.
					</div>
				</div>

            </div>
        </div>

		<p>Data la simmetria della prima mossa, avremo che qualunque sequenza di
		apertura può presentarsi in quattro posizioni differenti, ma sostanzialmente
		identiche. Diventa molto importante, allora, imparare a riconoscere una
		determinata sequenza in qualunque posizione si presenti, qualunque sia
		stata la prima mossa del nero, senza bisogno di allungare il collo o
		girare la scacchiera (cosa, ovviamente, vietata in torneo).</p>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
