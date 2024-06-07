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

		<h1>Guadagnare più tempi di gioco</h1>

		<p>Ovviamente è possibile guadagnare anche più di un tempo di gioco in una regione.
		In questo caso l'avversario rischia di essere messo in seria difficoltà, perché
		è obbligato a giocare diverse mosse aumentando di volta il volta i propri muri.</p>

		<p>Ne è un esempio il diagramma 1. Se il nero gioca A7, il bianco ha una
		posizione molto pericolosa. Questi infatti ha quattro mosse sicure (G6, F2, E2
		e D2) ma solo due pedine di appoggio, quindi potrà giocare solo due di queste
		mosse. Il nero, invece, può guadagnare tre tempi di gioco, muovendo in A7, A3 e
		A2. Guarda la sequenza proposta nel diagramma.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="piu-tempi-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: il nero guadagna tre tempi di gioco.
			</div>
		</div>

		<p>Ora il bianco è costretto a cedere l'angolo A8.</p>

		<h2>Tocca a te</h2>

		<p>Un caso particolare e molto utile di guadagno di due tempi di gioco è quello
		che devi giocare tu nel prossimo diagramma. Sei il bianco: hai due pedine sul
		bordo est e devi formare un quattro guadagnando due tempi di gioco. Non è
		difficile...</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="piu-tempi-diagramma-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 2: guadagna due tempi di gioco e forma un quattro.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
