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

		<h1>Apertura basate sulla perpendicolare</h1>

		<div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="rose.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 1: apertura Rose.
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="inoue.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 2: apertura Inoue.
					</div>
				</div>

            </div>
        </div>

		<div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="tigre.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 3: apertura Tigre.
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="tamenori.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 4: apertura Tamenori.
					</div>
				</div>

            </div>
        </div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
