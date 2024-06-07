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

		<h1>Le pedine stabili</h1>

		<p>Nell'Othello vince il giocatore che, al termine delle mosse
		legali, ha il maggior numero di pedine.</p>

		<p>Attenzione: per determinare il vincitore, le pedine vanno contate "al termine delle mosse legali".
			Non è richiesto che durante tutta la partita si abbia il maggior numero di pedine.</p>

		<p>Eppure i principianti tendono a trasformare
		questo obiettivo "a lungo termine" in un obiettivo "a breve termine": a ogni mossa
		girano quante più pedine possibili. Questa è chiamata <b>tecnica della
		massimizzazione</b>.</p>

		<p>Dopo un po' di partite con giocatori più esperti si comprende, tuttavia, che questa
		non è la strategia migliore.</p>

		<p>Un classico esempio è quello del diagramma 1. Il bianco ha 59 pedine,
		mentre il nero ne ha solo una. Chi vincerà?</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="pedine-stabili-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: il nero muove e...
			</div>
		</div>

		<p>Il nero vince per 40 a 24!</p>

		<p>Questo è chiaramente un esempio estremo, ma è comunque indicativo. E deve farci riflettere.</p>

		<ul>
		  <li>Perché il nero ha potuto girare tutte quelle pedine?</li>
		  <li>&Egrave; possibile, in qualche modo, garantirsi che alcune pedine non vengano più girate?</li>
		</ul>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
