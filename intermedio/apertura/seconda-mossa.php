<!DOCTYPE HTML>

<html lang="it">
<head>
	<title>Othello: corso interattivo - La seconda mossa</title>
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

		<h1>La seconda mossa</h1>

		<p>La partita entra nel suo vivo alla seconda mossa: il bianco ha
		tre possibilità tra cui scegliere.</p>

		<p>Per non essere ripetitivo, in questa pagina e nelle successiva tutte le
		aperture iniziano con la mossa C4 del
		nero. Per ottenere le altre sequenze è sufficiente eseguire lo stesso tipo
		di mosse in modo simmetrico.</p>

		<p>Dopo la prima mossa del nero, il bianco ha tre possibilità.
		Le tre mosse generano delle posizioni che per la particolare configurazione
		geometrica sono state chiamate "diagonale", "perpendicolare" e "parallela".</p>

		<div class="row row-cols-1 row-cols-md-3 g-4">
  			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="diagonale.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 1: apertura diagonale.
					</div>
				</div>

			</div>
			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="perpendicolare.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 2: apertura perpendicolare.
					</div>
				</div>

			</div>
			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="parallela.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 3: apertura parallela.
					</div>
				</div>

			</div>
		</div>

		<p>Ho notato che i principianti tendono a giocare quasi sempre la
		diagonale; poi, quando si è fatta un po' di esperienza, si sperimenta
		la perpendicolare. Infine, quando si diventa esperti, si sceglie una delle
			due, che diventa il proprio cavallo di battaglia.</p>

		<p>Addirittura ci sono delle vere e proprie "scuole", identificabili anche dalla
		seconda mossa. La scuola romana gioca la diagonale, mentre la scuola
		milanese gioca la perpendicolare.</p>

		<p>L'apertura parallela è sicuramente la meno giocata. Qualche anno fa i
		maestri italiani dicevano che non era ancora stata studiata seriamente.
		Al giorno d'oggi gli studi al computer dicono che porta a posizioni
		vantaggiose per il nero. Probabilmente è vera l'una e l'altra affermazione.
		Certo è che se giochi con il bianco e vuoi prendere in contropiede il
		tuo avversario puoi giocare la parallela; ti troverai così in un terreno
		poco esplorato in cui ciò che vale è la sola capacità di analisi.</p>

		<p>Nelle prossime due pagine ti presento alcune aperture tra le
		più giocate. Usale come base per iniziare a giocare
		e per i tuoi successivi studi.</p>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
