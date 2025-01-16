    <h1>Cinque attaccabili</h1>

    <p>Finora abbiamo prestato attenzione al controbordo adiacente, la colonna G secondo la nostra posizione di studio.
        Ma anche il controbordo del cinque, la riga 7, è molto importante.
        Negli <a href="cinque-non-attaccabili.php">esempi visti finora</a> nella riga 7 era presente almeno una pedina
        nera. Proprio per la presenza di tale pedina,
    quando il nero giocava in G7, la pedina F7 diventava nera, e questo permetteva al bianco di giocare in G8.</p>

    <p>Se invece la riga 7 è tutta bianca, ovvero se il cinque è pieno, la pedina F7 rimane bianca
    anche dopo l'attacco. E cosa succede?</p>

	<h2>Cinque pieno, controbordo adiacente dell'attaccante</h2>

    <p>Studia la sequenza del diagramma 1.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-ai-5-funzionano-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: l'attacco al cinque funziona.
			</div>
		</div>

	<p>Per parare l'attacco il bianco avrebbe dovuto giocare in G8, ma non può perché la pedina F7 è
	rimasta bianca. L'attacco ha funzionato, anche se l'intera colonna G era di pedine nere!</p>

	<h2>Cinque pieno, controbordo adiacente dell'attaccato</h2>

    <p>Studia la sequenza del diagramma 2.</p>

        <div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-ai-5-funzionano-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 2: l'attacco al cinque funziona.
			</div>
		</div>

	<p>Per parare l'attacco il bianco avrebbe dovuto giocare prima in H8 e poi in G8,
	ma, poiché la pedina F7 è rimasta bianca anche dopo l'attacco, il nero ha sempre a disposizione
	l'accesso a G8.</p>

        <div class="card border-primary mb-3">
			<div class="card-header">Tattica</div>
			<div class="card-body">
				<p class="card-text">Se il cinque è pieno, è sempre attaccabile.</p>
			</div>
		</div>

	<h2>Tocca a te</h2>

	<p>Nel diagramma 3 giochi con il nero. Il bianco ha un cinque pieno sul lato
	est, che quindi è attaccabile. Tuttavia non hai la possibilità di muovere nella
	casella X. Devi trovare il modo di poter attaccare e conquistare il lato
	est in 7 mosse!</p>

        <div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="attacchi-ai-5-funzionano-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 3: attacca il cinque.
			</div>
		</div>
