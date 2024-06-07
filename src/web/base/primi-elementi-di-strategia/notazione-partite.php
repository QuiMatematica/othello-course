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

		<h1>Per registrare le partite</h1>

		<p>Per registrare una partita è sufficiente ricordare in quale casella è stata eseguita ciascuna
		mossa. Esiste, infatti, una corrispondenza (biunivoca) tra una mossa e la casella in cui è
		stata giocata.
		Tutto il resto (ovvero le pedine che sono state girate) viene di conseguenza.</p>

		<h2>Il referto</h2>

		<p>La prima modalità consiste nel disegnare una tavola con le quattro pedine iniziali.
		Su ciascuna casella viene indicato il numero progressivo della mossa che è stata giocata in
		quello stesso spazio.</p>

		<p>Per esempio: se alla prima mossa il giocatore nero muove in F5, nella stessa casella
		F5 si scrive un "1". Se il giocatore bianco risponde in F6, si riporta nella
		medesima casella il numero "2". E così via.</p>

		<p>Talvolta si cerchiano le mosse del bianco per distinguerle da quelle del nero, ma non è
		necessario. Se poi il referto
		è stato generato graficamente con un computer, si suole scrivere il numero
		su una pedina del colore di chi ha giocato la mossa.</p>

		<p>Nel diagramma 1 è riportato il referto di una partita. Il diagramma 2 è una tavola
		attiva libera. Prova a ricostruire la partita, se la seguirai correttamente otterrai
		il medesimo risultato.</p>

		<div class="row row-cols-1 row-cols-md-2 g-4">
  			<div class="col">
				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="referee-board" data-file="notazione-partite-diagramma-1.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 1.
					</div>
				</div>
			</div>
  			<div class="col">
				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="free-game-board"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 2.
					</div>
				</div>
			</div>
		</div>

		<p>Questa modalità è quella utilizzata nei tornei.</p>

		<h2>Sequenze di coordinate</h2>

		<p>La seconda notazione consiste nel riportare la sequenza delle coordinate in cui sono
		avvenute le mosse. Questa modalità viene solitamente utilizzata quando si vuole
		descrivere l'evoluzione di una partita da una situazione intermedia.</p>

		<p>Per esempio: nella posizione del diagramma 3 tocca al bianco muovere.
			Premi sul pulsante di avanzamento per vedere l'effetto della sequenza
		D3, C4, F4.</p>

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="notazione-partite-diagramma-3.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 3.
					</div>
				</div>

		<p>Ovviamente le mosse vanno fatte a colori
		alternati (a meno che un giocatore non debba passare).</p>

		<h2>Le pedine non girate</h2>

		<p>Entrambi i metodi presentati sono carenti da un certo punto di vista: se a una mossa non sono state
		girate tutte le pedine previste dalle regole, non è più possibile ricostruire la partita.
		Per fortuna tali situazioni sono rare, quindi non vengono neanche considerate.</p>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
