    <h1>Gli attacchi ai cinque: quando non funzionano</h1>

    <p>Nella pagina precedente abbiamo visto una caso abbastanza generale di attacco a un cinque.
    Fai però attenzione: non sempre l'attacco funziona, ci sono cioè delle situazioni in cui
    il colore attaccato riesce a salvare l'intero lato e a conquistare anche l'angolo ceduto.</p>

    <p>In questa pagina e nelle successive vedremo sempre posizioni in cui le caselle F7 e G6 sono
    occupate. Queste situazioni sono le più comuni e le più facili da analizzare tanto
    che riusciremo a formulare alcune <a href="attacchi-ai-5-riassunto.php">regole</a>,
    seguendo le quali l'attacco funziona sempre. Nella pagina
        <a href="attacchi-ai-5-esempi.php">Gli attacchi ai cinque: altri esempi</a>
        vedremo alcuni esempi in cui tali caselle non sono occupate:
    sono posizioni su cui non è possibile estrapolare delle regole generali e vanno analizzate di
    volta in volta.</p>

    <p>Cominciamo dunque a vedere le due situazioni più tipiche in cui l'attacco non funziona.</p>

	<h2>Tutte le pedine della colonna G sono nere</h2>

	<p>Il diagramma 1 presenta una situazione molto simile a quella della pagina precedente,
	ma tutte le pedine della colonna G sono nere. Cosa succede se il nero decide di attaccare
	il cinque?</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-ai-5-non-funzionano-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: l'attacco al cinque fallisce.
			</div>
		</div>

    <p>Cosa è successo? Semplice: siccome tutte le pedine della colonna G sono nere, quando il bianco
    gioca in G8 non gira la pedina G7. L'angolo non può essere preso dal nero, ma solo dal bianco! L'attacco
    è fallito.</p>

    <h2>Tutte le pedine della colonna G sono bianche</h2>

    <p>Questa volta, nella situazione del diagramma 2, tutte le pedine della colonna G sono bianche.</p>

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

	<h2>Tocca a te</h2>

	<p>Nei due diagrammi successivi tu giochi con il nero e sei appena stato
	attaccato. Nel diagramma 3 è facile vedere che l'attacco non funziona:
	cerca il modo di salvare tutto il lato nord. Il diagramma 4 è un po'
	più difficile: l'attacco sembra funzionare, ma con un po' di furbizia
	riuscirai a bloccarlo!</p>

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
                        <div class="sequence-board" data-file="attacchi-ai-5-non-funzionano-4.json"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma 4: attacco che sembra funzionare.
                    </div>
                </div>

            </div>
        </div>