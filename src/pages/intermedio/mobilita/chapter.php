        <h1>La mobilità</h1>

        <p>Confronta le posizioni dei diagrammi 1 e 2. Se tu fossi il bianco quale delle due posizioni preferiresti?</p>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="index-diagramma-1.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 1.
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="index-diagramma-2.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 2.
					</div>
				</div>

            </div>
        </div>

		<p>Le due posizioni sono apparentemente molto simili: dopotutto cambiano solo due pedine.</p>

		<p>Ma nel diagramma 1 il bianco ha solo una mossa a disposizione: G8. E tale mossa non è
		buona: poi il nero può prendere l'angolo H8 e stabilizzare il lato sud.
		Il diagramma 3 presenta una possibile prosecuzione della posizione.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="index-diagramma-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: una possibile prosecuzione del diagramma 1.
			</div>
		</div>

		<p>Nel diagramma 2, invece, il bianco ha 5 mosse a disposizione: C2, D2, E2, C3 e G8.
		Ovviamente eviterà di giocare G8 che cede l'angolo H8 al nero. La posizione non è
		favorevole (e in questo sezione capiremo perché), ma la partita è ancora giocabile.
		Il diagramma 4 presenta una possibile prosecuzione della posizione.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="index-diagramma-4.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4: una possibile prosecuzione del diagramma 2.
			</div>
		</div>

		<p>Quindi, per concludere, la differenza tra le posizioni dei diagrammi 1 e 2 è data dalla
		quantità di mosse a disposizione.</p>

		<div class="card border-primary mb-3">
			<div class="card-header">Definizione</div>
			<div class="card-body">
				<p class="card-text">Indichiamo con <b>mobilità</b> la disponibilità di mosse di un certo colore.</p>
			</div>
		</div>

		<p>La mobilità può essere misurata con la quantità di mosse a disposizione. Ma le mosse non sono tutte uguali,
		per cui non tutte hanno lo stesso valore. Per esempio nel diagramma 2 la mossa G8 (che è una pessima mossa)
		non può essere conteggiata come C3 (che è una mossa discreta). Per cui si preferisce <b>dare alla mobilità
		un valore qualitativo: alta, media o bassa</b>.</p>

		<p>Nel diagramma 1 il bianco ha una bassissima mobilità, infatti ha una sola mossa a disposizione.
		Nel diagramma 2 il bianco ha una discreta mobilità, infatti ha ancora diverse mosse tra cui scegliere.
		Al contrario, in entrambe le posizioni, il nero ha un'alta mobilità perché ha molte mosse a disposizione.</p>

		<p>Gli esempi sono indicativi: non è buono avere una bassa mobilità. Il nostro avversario può
		prendere il controllo della partita e costringerci a una disfatta.</p>

		<div class="card border-primary mb-3">
			<div class="card-header">Strategia</div>
			<div class="card-body">
				<p class="card-text">Devi cercare di <b>diminuire la mobilità dell'avversario</b> e,
					al tempo stesso, stare attento a <b>non perdere la tua mobilità</b>.</p>
			</div>
		</div>

		Ma come ottenere questo? Lo vedremo nelle prossime pagine.
