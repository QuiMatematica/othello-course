<!DOCTYPE HTML>

<html lang="it">
<head>
	<title>Othello: corso interattivo - Aperture basate sulla diagonale</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../tao/othello.css#20240531">
    <script type="module">
        import { init } from "../../tao/othello.js#20240531";
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

		<h1>Aperture basate sulla diagonale</h1>

		<div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="barca-a-vela.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 1: apertura Mucca<br>nella variante Barca a Vela.
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="heath.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 2: apertura Heath.
					</div>
				</div>

            </div>
        </div>

		<div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="camino.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 3: apertura Mucca<br>nella variante Camino.
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="bufalo.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 4: apertura Bufalo.
					</div>
				</div>

            </div>
        </div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
