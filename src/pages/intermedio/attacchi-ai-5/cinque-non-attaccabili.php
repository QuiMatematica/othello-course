    <h1>Cinque non attaccabili</h1>

    <p>In questa pagina vedrai due situazioni in cui il cinque non è pieno, ovvero il controbordo non
    è occupato completamente da pedine del colore attaccato.</p>

	<h2>Le pedine del controbordo adiacente al cinque sono dell'attaccante</h2>

	<p>Il diagramma 1 presenta una situazione molto simile a quella dell'introduzione,
	ma tutte le pedine della colonna G (controbordo adiacente) sono nere (colore dell'attaccante).
        Cosa succede se il nero attacca? Studia la sequenza proposta nel diagramma.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-ai-5-non-funzionano-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: l'attacco al cinque fallisce.
			</div>
		</div>

    <p>Cosa è successo? Semplice: siccome tutte le pedine della colonna G erano nere, il bianco
    ha potuto giocato in G8 senza girare la pedina G7. Quindi il nero non ha accesso all'angolo! L'attacco
    è fallito.</p>

        <div class="card border-primary mb-3">
			<div class="card-header">Tattica</div>
			<div class="card-body">
				<p class="card-text">Se il cinque non è pieno e tutte le pedine del controbordo adiacente al cinque
                    sono del colore attaccante,
                    il cinque non è attaccabile.</p>
			</div>
		</div>

    <h2>Le pedine del controbordo adiacente al cinque sono dell'attaccato</h2>

    <p>Questa volta, nella situazione del diagramma 2, tutte le pedine della colonna G (controbordo adiacente) sono
        bianche (colore dell'attaccato). Studia la sequenza proposta nel diagramma.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-ai-5-non-funzionano-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 2: l'attacco al cinque fallisce.
			</div>
		</div>

	<p>Questa volta l'assenza di pedine nere nella colonna G impedisce al nero di accedere alla
	casella G8, vanificando così l'attacco.</p>

        <div class="card border-primary mb-3">
			<div class="card-header">Tattica</div>
			<div class="card-body">
				<p class="card-text">Se il cinque non è pieno e tutte le pedine del controbordo adiacente al cinque
                    sono del colore attaccato,
                    il cinque non è attaccabile.</p>
			</div>
		</div>

	<h2>Tocca a te</h2>

	<p>Nei diagrammi successivi giochi con il nero e sei appena stato
	attaccato, ma è facile vedere che gli attacchi non funzionano:
	cerca il modo di salvare tutto il bordo con il cinque.</p>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

                <div class="card mx-auto board-card my-3">
                    <div class="card-body">
                        <div class="sequence-board" data-file="attacchi-ai-5-non-funzionano-3.json"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma 3: attacco che non funziona.
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
                    <div class="card-body">
                        <div class="sequence-board" data-file="attacchi-ai-5-non-funzionano-5.json"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma 4: attacco che non funziona.
                    </div>
                </div>

            </div>
        </div>