		<h1>I muri</h1>

		<p>Nel diagramma 1 tocca al nero che ha cinque mosse a disposizione: sono
		tutte nella parte sud della scacchiera e sono tutte pericolose. Sarebbe
		stato importante per lui avere a disposizione qualche mossa nella parte
		nord, ma questo non è possibile perché le pedine della riga 3 sono tutte
		nere (a esclusione di H3 che comunque non darebbe la possibilità di giocare
		a nord).</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="muri-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1: qual è il punto debole del nero?
			</div>
		</div>

		<div class="card border-primary mb-3">
			<div class="card-header">Definizione</div>
			<div class="card-body">
				<p class="card-text">Chiamiamo <b>muro</b> un gruppo di pedine esterne contigue,
					tutte dello stesso colore.</p>
			</div>
		</div>

		<p>Nel digramma 1, le sette pedine della riga 3 formano un muro: una barriera senza
			interruzioni di pedine nere. I muri sono pericolosi perché impediscono ogni mossa
		negli spazi liberi
		adiacenti: a nord la mobilità del nero è nulla!</p>

		<p>Il nero, quindi, è costretto a giocare a sud, cedendo l'angolo A8 oppure l'angolo H8.
		Il bianco, d'altro canto, aspetterà il più possibile a giocare a nord. E quando sarà
		costretto cercherà mosse che offriranno poche pedine esterne.</p>

		<p>Il diagramma 2 mostra una possibile prosecuzione della posizione. Per il nero non
		ci sono molte speranze.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="muri-diagramma-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2: seguito della posizione del digramma 1.
			</div>
		</div>

		<p>Per formare un muro non è necessario che le pedine siano in fila:
		nel diagramma 3 il bianco ha un muro che va dalla pedina in A3 alla pedina
		in F6 e non potrà muovere nell'area nord-est fino a quando il nero non gli
		concederà delle mosse. Nota che le pedine sul bordo non appartengono al
		muro perché non sono esterne.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="muri-diagramma-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: un lungo muro del bianco.
			</div>
		</div>

		<h2>Come comportarsi</h2>

		<p>Gli effetti dei muri si fanno sentire pesantemente a partita inoltrata,
		ma fin dall'apertura bisogna stare attenti che non si formino. </p>

		<p>Se poi si è stati costretto a formare un muro, bisogna cercare di
		obbligare l'avversario a "sfondarlo". Ma di solito è un'impresa ardua.</p>

		<p>Se invece è l'avversario ad aver formato un muro, bisogna cercare di
		"sfondarlo" il più tardi possibile e, quando bisogna farlo, cercare di
		girare il minor numero di pedine possibile, in modo da offrire poche pedine
		esterne.</p>

		<p>Un esempio per tutti i casi: il diagramma 3.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="muri-diagramma-4.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4.
			</div>
		</div>

		<p>Entrambi i giocatori hanno un muro, ma quello del bianco è molto più
		ampio. Tocca al nero che dovrà, per forza di cose, girare almeno una
		pedina del muro avversario. Certamente sono da evitare le mosse C2 e F2:
		che formano un lungo muro nero. Migliori sono le mosse D2 ed E2 che sfondano
		il muro bianco ma offrono solo due pedine esterne e conservano
		parte del muro bianco. Con E2, inoltre, il nero ottiene una pedina interna
		in più. Ma in una situazione come questa le mosse migliori
		sono B5 e G5 che tolgono solo una pedina periferica del muro,
		che rimane quindi compatto. Sembrerebbe che il nero stia espandendo
		il proprio muro, ma è più piccolo di quello avversario e ora il bianco è
		a sua volta costretto a sfondarlo.</p>

		<h2>Muri contrapposti</h2>

		<p>Quando i due colori formano due muri, uno opposto all'altro, e di
		dimensioni simili, allora la situazione è più bilanciata. &Egrave; il caso di
		un'apertura molto conosciuta e giocata: la "Muri Rotanti" (in inglese
		"Rotating Flat", diagramma 5).</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="muri-diagramma-5.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 5: l'apertura "Muri Rotanti".
			</div>
		</div>

		<p>In situazioni come queste i giocatori devono cercare di non sfondare il
		muro avversario. Quando sarà necessario farlo, bisogna cercare di girare il
		minor numero di pedine esterne possibili. Lo sfondamento ha però il
		vantaggio di procurare delle pedine interne che possono essere preziose.</p>

		<h2>Altri esempi</h2>

		<p>Confrontiamo le posizioni dei diagrammi 6, 7 e 8. Per il giocatore bianco,
		quanto pericolosa è nei tre casi la mossa A6?</p>

		<div class="row row-cols-1 row-cols-md-3 g-4">
  			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="muri-diagramma-6.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 6.
					</div>
				</div>

			</div>
			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="muri-diagramma-7.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 7.
					</div>
				</div>

			</div>
			<div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="muri-diagramma-8.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 8.
					</div>
				</div>

			</div>
		</div>

		<p>Nel diagramma 5 la mossa non ha particolari controindicazioni. Nel
		diagramma 6 il bianco forma un muro di quattro pedine che è
		relativamente pericoloso. Nel diagramma 7
		il bianco costruisce un lungo muro che gli toglie tutta la mobilità
		nell'area sud: la mossa è da evitare.</p>

		<p>Nei diagrammi 9 e 10 il nero ha un'ottima mossa in F8 (esempi suggeriti da Paolo Scognamiglio).
			Ma, in entrambe le situazioni, il bianco può "sporcare" tale mossa rendendola
		certamente meno appetibile.</p>

		<div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="muri-diagramma-9a.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 9.
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="muri-diagramma-10a.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 10.
					</div>
				</div>

            </div>
        </div>


		<p>Nel diagramma 11 deve muovere il nero. I due giocatori hanno due muri
		ancora limitati, ma il nero ha l'occasione di mettere in seria difficoltà
		l'avversario, seguendo la sequenza proposta.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="muri-diagramma-9.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 11: obbligare a costruire un muro.
			</div>
		</div>

		<h2>Conclusione</h2>

		<div class="card border-primary mb-3">
			<div class="card-header">Strategia</div>
			<div class="card-body">
				<p class="card-text">Per massimizzare la mobilità devi:</p>
				<ul>
					<li>evitare di formare un muro;</li>
					<li>evitare di sfondare il muro avversario; se proprio devi farlo parti da un estremo e rosicchialo una pedina per volta;</li>
					<li>per evitare di sfondare il muro avversario puoi formare un muro contrapposto: il tuo avversario sarà costretto a ridurlo;</li>
					<li>fare attenzione alle posizioni, come i bordi sbilanciati, che possono costringerti a formare un muro.</li>
				</ul>
			</div>
		</div>
