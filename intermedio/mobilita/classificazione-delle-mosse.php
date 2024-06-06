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

		<h1>Classificazione delle mosse</h1>

		<p>Vediamo qui una possibile classificazione delle mosse prestando un occhio
		di riguardo alla mobilità. Non è possibile dire qual è il tipo di mossa
		migliore: ognuna ha i suoi vantaggi e i suoi svantaggi e ciascuna posizione
		va analizzata singolarmente.</p>

		<h2>Mosse ideali</h2>

		<p>Di questo tipo di mosse si parla più estesamente nella
		<a href="mosse-ideali.php">pagina precedente</a>, a cui si rimanda.</p>

		<h2>Mosse difensive</h2>

		<p>Sono mosse che impediscono all'avversario di poter giocare una mossa ideale.
		Anche di queste si è già parlato nella
		<a href="mosse-ideali.php">pagina precedente</a>.

		<h2>Mosse offensive</h2>

		<p>Sono mosse che creano una possibile futura mossa ideale.

		<h2>Mosse d'attesa</h2>

		<p>Sono mosse che girano una sola pedina esterna, senza cambiare sostanzialmente
		la situazione. Vengono giocate quando si pensa che l'avversario sarà costretto
		a peggiore la sua situazione con la prossima mossa. Talvolta danno l'avvio a
		una formazione di muri contrapposti (diagramma 1).</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="classificazione-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1: le mosse di attesa
			</div>
		</div>

		<p>Le mosse di attesa non aiutano a mantenere la compattezza, per cui sono
		generalmente da evitare quando l'avversario ha a disposizione delle mosse ideali.
		&Egrave; il caso del diagramma 2, dove una mossa d'attesa del bianco in D7, seguita
		dalla ideale E6 avversaria, genererebbe una situazione in cui il nero, avendo il
		controllo del centro, ha un buon margine di vantaggio. In situazioni come questa
		è preferibile giocare una mossa difensiva (come B3 o C3).</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="classificazione-diagramma-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2: mossa al bianco.
			</div>
		</div>

		<h2>Mosse centrali</h2>

		<p>Sono mosse che girano una fila di pedine, il più possibile interne o centrali,
		in un'unica direzione. Le mosse centrali permettono di conquistare il centro
		della scacchiera, favorendo la compattezza delle pedine.</p>

		<p>Prima di giocarle bisogna stare attenti che non creino mosse ideali per
		l'avversario, o che questi abbia a disposizione un'analoga mossa centrale.
		Talvolta una mossa centrale è anche una mossa d'attacco, e il tal caso la sua
		forza aumenta.</p>

		<p>Nel diagramma 3, ad esempio, il bianco ha a disposizione due mosse centrali
		in C6 e D7; entrambe creano una mossa ideale per il nero (B3 e E3 rispettivamente),
		ma la prima è sicuramente migliore perché crea anche una mossa ideale per il
		bianco in E3 (vd. sequenza).</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="classificazione-diagramma-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: le mosse centrali
			</div>
		</div>

		<h2>Mettendo tutto insieme</h2>

		<p>Nel diagramma 4 il bianco, giocando la mossa centrale in B5, riesce non solo
		a insediarsi al centro, ricollegando tutti i suoi pezzi e dividendo a metà
		quelli neri, ma anche ad annullare all'avversario la sua mossa ideale in E3 e
		a crearsi lui stesso una mossa ideale in quella stessa casella. Il nero potrebbe
		tentare di impedire tale mossa ideale, tentativo che viene vanificato dalla
		risposta del bianco in B4 (vedi la sequenza nel diagramma).

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="classificazione-diagramma-4.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4: una mossa centrale, difensiva e offensiva.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
