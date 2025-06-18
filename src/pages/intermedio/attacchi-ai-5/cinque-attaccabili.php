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

    <h2>Ma c'è sempre un'eccezione!</h2>

    <p>Sì, ok, un cinque pieno è sempre attaccabile... purché possa essere effettivamente attaccato.</p>

    <p>Osserva il diagramma 3: il bianco ha il solito cinque pieno a sud. Ma in questo caso le pedine in F6, G6 e H6
        sono tutte nere. Quindi il nero non ha la possibilità di giocare nella casella X G7 e il cinque risulta essere
    salvo.</p>

        <div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-ai-5-funzionano-2b.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 3: un cinque pieno non attaccabile.
			</div>
		</div>

	<h2>Tocca a te</h2>

	<p>Nel diagramma 4 giochi con il nero. Il bianco ha un cinque pieno sul lato
	est, che quindi è attaccabile. Tuttavia non hai la possibilità di muovere nella
	casella X. Devi trovare il modo di poter attaccare e conquistare il lato
	est in 7 mosse!</p>

        <div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="attacchi-ai-5-funzionano-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 4: attacca il cinque.
			</div>
		</div>

    <p>Nel diagramma 5 giochi con il nero. Hai un cinque pieno a ovest che rischia di essere attaccato.
    Ma con l'opportuna minaccia lo puoi mettere in sicurezza.</p>

        <div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="attacchi-ai-5-funzionano-5.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 5: metti in sicurezza il tuo cinque pieno.
			</div>
		</div>
