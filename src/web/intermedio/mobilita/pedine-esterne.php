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

		<h1>Le pedine esterne</h1>

		<div class="card border-primary mb-3">
			<div class="card-header">Definizione</div>
			<div class="card-body">
				<p class="card-text">Si chiamano <b>esterne</b> (o perimetrali) le pedine che hanno almeno una
				casella adiacente vuota e che non si trovano sul bordo.</p>
				<p class="card-text">Si chiamano <b>interne</b> le pedine
				che hanno tutte le caselle adiacenti occupate.</p>
			</div>
		</div>

		<p>La quantità di pedine esterne di un colore ha un impatto diretto sulla quantità di mosse a disposizione
		del colore avversario. Il giocatore bianco ha bisogno di almeno una pedina esterna nera per poter muovere.
		Quindi se il nero ha poche pedine esterne, il bianco ha una bassa mobilità, mentre se il nero ha molte pedine
		esterne, il bianco ha un'alta mobilità. E, ovviamente, vale il viceversa a colori scambiati.</p>

		<p>Nel diagramma 1 il nero ha 3 pedine esterne, e il bianco ha una bassa mobilità.
		Invece il bianco ha 9 pedine esterne, e il nero ha un'alta mobilità.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="pedine-di-appoggio-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1.
			</div>
		</div>

		<p>Come se non bastasse, spesso fare una mossa va a peggiorare la propria mobilità. Muovendo, infatti,
		si ottengono due effetti:</p>

		<ul>
			<li>si volta una pedina esterna dell'avversario, quindi la propria mobilità diminuisce;</li>
			<li>spesso aumenta il numero delle proprie pedine esterne, quini aumenta la mobilità dell'avversario.</li>
		</ul>

		<p>Per questo spesso ci si accorge che la miglior mossa sarebbe... <i>non muovere</i>! Ma il regolamento
		parla chiaro: a meno di mancanza di mosse legali, è obbligatorio muovere.</p>

		<p>Tornando alla posizione del diagramma 1, purtroppo tocca al bianco. Egli ha già una bassa mobilità. Ogni
		mossa va solo a peggiorare la situazione. Nel diagramma 2 puoi vedere una possibile
		continuazione della partita, e ti viene mostrato il conteggio delle mosse del bianco e delle pedine estern
		del nero.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="pedine-di-appoggio-diagramma-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2
			</div>
		</div>

		<p>Sicuramente non ti è sfuggito che nella definizione di pedina esterna abbiamo escluso
		le pedine sui bordi. Dopotutto i bordi sono regioni molto vicine agli angoli: la loro
		conquista e il loro attacco sono manovre tattiche che vanno analizzate molto attentamente.</p>

		<h2>Massimizzare la mobilità</h2>

		<p>Osserva il diagramma 3: è una posizione d'apertura molto conosciuta e
		considerata bilanciata.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="pedine-di-appoggio-diagramma-7.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: l'apertura Tamenori.
			</div>
		</div>

		<p>Confrontiamo le mosse A6 e B6. Se il bianco gioca A6 utilizza la
		pedina esterne B5, e in una mossa successiva potrà giocare B6
		utilizzando la pedina esterne C6. Se, invece, il bianco gioca B6
		gira sia la pedina B5 sia la pedina C6 e successivamente non potrà
		più giocare in A6. Con questa seconda mossa, cioè, si è "bruciato" una
		mossa in più. Tra le due possibilità è, quindi, sicuramente migliore
		A6.</p>

		<div class="card border-primary mb-3">
			<div class="card-header">Strategia</div>
			<div class="card-body">
				<p class="card-text">Preferire mosse che voltano poche pedine esterne dell'avversario (preferibilmente
					una sola);</p>
				<p class="card-text">Preferire mosse che creano poche pedine esterne del proprio colore.</p>
			</div>
		</div>

		<h2>Tocca a te</h2>

		<p>Nel diagramma 4, seleziona le pedine esterne del nero.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="click-on-board" data-file="pedine-di-appoggio-quiz-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4: seleziona le pedine esterne del nero.
			</div>
		</div>

		<p>Nel diagramma 5 giochi con il bianco. Escludi subito le mosse che
			cedono un angolo all'avversario. Tra le mosse rimaste,
			gioca quella che utilizza il minor numero di pedine esterne.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="pedine-di-appoggio-quiz-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 5.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
