<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php include '../../section/chapter/header.php' ?>
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

		<h1>Sacrifici e vantaggi</h1>

		<p>Riassumo gli ultimi punti cui siamo arrivati.</p>

		<ul>
			<li>Gli angoli e le pedine adiacenti a essi sono stabili.</li>
			<li>Quindi, conquistare un angolo è strategicamente importante.</li>
			<li>Quindi, può essere pericoloso giocare nelle caselle X e nelle caselle C.</li>
		</ul>

		<p>Attenzione però: non è vero in assoluto che conquistare un angolo porti alla vittoria,
		come non è vero in assoluto che giocare in una casella X porti alla sconfitta.</p>

		<p>Spesso può essere estremamente vantaggioso sacrificare un angolo per ottenere dei vantaggi
		maggiori, soprattutto se in termini di pedine stabili.</p>

		<p>Guarda, per esempio, la partita di diagramma 1.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="pedine-stabili-diagramma-9.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: sacrificio di un angolo in cambio di pedine stabili.
			</div>
		</div>

		<p>La mossa che il nero ha giocato è un attacco alle cinque pedine bianche
		del lato sud. Nell'Othello, quasi tutti gli attacchi prevedono il sacrificio di un angolo
		in cambio di un considerevole numero di pedine stabili (o di una posizione migliore).</p>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
