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

		<h1>Usare caselle X per la mobilità</h1>

		<p>Quando la partita è avanzata, le mosse a disposizioni cominciano a essere poche. E
		se un giocatore ha poca mobilità comincia a trovarsi nei guai. Un modo efficace e,
		lasciatemelo dire, spettacolare di finire una partita è sfruttare le caselle X
		per costringere l'avvesario a fare mosse dannose.</p>

		<p>Nel diagramma 1 si contrappongono un bianco che ha conquistato tutti i bordi, e
		possiede la maggioranza delle pedine in gioco. Il nero ha poche pedine, ma sono
		compatte e centrali. Ma sopratutto ha a disposizione la mossa definitiva. Prima di
		scorrere le mosse sul diagramma, prova a trovare da solo la mossa corretta.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="usare-caselle-x-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1
			</div>
		</div>

		<p>L'elemento che ha permesso al nero di giocare in G2 è stata la diagonale che va da B7 a G2
		interamente occupata da pedine nere. Inoltre il bianco non ha la possibilità di 'tagliare'
		questa diagonale.</p>

		<p>La posizione del diagramma 2 è tratta dalla partita del
		Campionato del Mondo del 1984 tra il giapponese Taniguchi e il francese Ralle,
		vinta da quest'ultimo per 48 a 15 (esempio tratto da un articolo del 1988
		del maestro Mauro Perotti). Tocca al nero che ha 8 mosse a disposizione,
		mentre il bianco ne ha 9. La mobilità sembra praticamente pari. Eppure il nero
		riesce presto a chiudere il gioco all'avversario.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="usare-caselle-x-diagramma-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 2: Taniguchi - Ralle (Campionato del Mondo 1984)
			</div>
		</div>

		<p>Come mai una situazione che sembrava equilibrata, in verità è
		stata così disastrosa per il nero?</p>

		<p>Il motivo è che il conteggio fatto non distingueva le mosse sicure
		da quelle pericolose. Nella posizione di partenza ben quattro delle otto mosse
		del nero erano pericolose (G2, B7, G7 e H7). E, a ogni mossa successiva,
		il nero perde una mossa sicura e mantiene solo quelle pericolose.</p>

		<p>Ma per ottenere questo risultato il bianco ha dovuto sfruttare il controllo
			della diagonale B7-G2.</p>

		<div class="card border-primary mb-3">
			<div class="card-header">Strategia</div>
			<div class="card-body">
				<p class="card-text">Tieni sotto controllo le diagonali, in particolare verifica
				se le puoi controllare o se il tuo avversario le può controllare.</p>
			</div>
		</div>

		<h2>Tocca a te</h2>

		<p>Nel diagramma 3 giochi con il bianco. Il nero ha poca mobilità: devi
		sfruttare questo vantaggio e costringere l'avversario a passare entro tre mosse.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="usare-caselle-x-quiz-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: costringi l'avversario a passare.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
