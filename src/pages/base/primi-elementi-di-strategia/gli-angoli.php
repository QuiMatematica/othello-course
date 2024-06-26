		<h1>Gli angoli</h1>

		<p>La prima fondamentale strategia che ogni giocatore di Othello deve conoscere riguarda
		l'importanza degli <b>angoli</b>!</p>

		<p>Le regole affermano che una pedina pu&ograve; essere girata se pu&ograve; essere incastrata (in orizzontale,
		verticale o diagonale) tra due pedine avversarie. La pedina nera in B2 del diagramma 1 pu&ograve;
		essere voltata se incastrata, per esempio, tra due pedine bianche in A3 e C1 (una presente
		e una posizionata in una mossa). La pedina bianca in H2 pu&ograve; essere voltata se incastrata, per
		esempio, tra due pedine nere in H1 e H3. Ma la pedina nera in H8?</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="gli-angoli-pedine-diverse.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1.
			</div>
		</div>

		<p>Le pedine poste negli angoli non possono essere girate perch&egrave; non sono incastrabili in
		alcun modo. Per farlo si dovrebbe porre una pedine fuori dalla tavola, cosa ovviamente
		non consentita. Per questo si dice che le pedine negli angoli sono <b>pedine stabili</b>.</p>

		<p>Ma se le pedine negli angoli sono sicuramente stabili anche altre lo possono diventare.
		Per esempio tutte le pedine nere della riga 1 del diagramma 2 sono stabili, grazie al fatto
		che sono appoggiate a una pedina posta nell'angolo. E anche tutte le pedine bianche a sud
		est sono stabili, per lo stesso identico motivo.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="gli-angoli-pedine-stabili.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2: pedine stabili.
			</div>
		</div>

		<p>&Egrave; evidente, quindi, che gli angoli sono posizioni importantissime e che bisogna orientare
		il proprio gioco in modo da cercare di conquistarli e di non cederli all'avversario.</p>

		<h2>Quando si pu&ograve; conquistare un angolo</h2>

		<p>Riflettendo sulle regole si comprende che per poter conquistare un angolo sono necessarie
		due condizioni:</p>
		<ul>
		  <li>una pedina avversaria &egrave; posta in una casella adiacente all'angolo;</li>
		  <li>una propria pedina permette di incastrare quella avversaria (ed eventualmente altre)
		  con quella che si vuole porre nell'angolo.</li>
		</ul>

		<p>Per esempio, nel diagramma 3, il Bianco pu&ograve; giocare nell'angolo a1 perch&egrave; c'&egrave; una pedine nera
		in a2 e una bianca in a3 che con a1 incastra la a2; pu&ograve; giocare nell'angolo h1 perch&egrave; c'&egrave; una
		pedina nera in g2 e una bianca in e4 che incastra la g2 e la f3.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="gli-angoli-accessi-agli-angoli.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: accessi agli angoli.
			</div>
		</div>

		<p>Quindi, si pu&ograve; conquistare un angolo solo quando l'avversario occupa una delle caselle adiacenti.
		Le caselle adiacenti in orizzontale e verticale vengono chiamate <b>caselle "C"</b>,
		mentre quelle adiacenti in diagonale vengono chiamate <b>caselle "X"</b>.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="gli-angoli-caselle-C-e-X.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4: le caselle C ed X.
			</div>
		</div>

		<h2>Come non cedere angoli</h2>

		<p>A questo punto è evidente che, per impedire al tuo avversario di conquistare un
		angolo, devi evitare di giocare nelle caselle X e C. Se infatti giochi in una casella adiacente a un angolo,
			il tuo avversario ha pronta la pedina di sponda per entrare in quello stesso angolo. Magari non avrà subito
			la possibilità di giocarci dentro, ma l'Othello è un gioco estremamente
		dinamico, e le cose possono cambiare molto in fretta.</p>

		<p>Ne è un esempio il diagramma 5, in cui il bianco gioca in
		una casella X (la G2). Forse pensa che, essendo la diagonale tutta bianca, il Nero non potrà
		giocare nell'angolo. Ma bastano poche mosse perché questa situazione cambi.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="gli-angoli-conquistare-angolo.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 5: conquista di un angolo.
			</div>
		</div>

		<p>Per fortuna ci sono alcune situazioni in cui &egrave; possibile giocare nelle caselle C senza troppo
		pericolo per l'angolo. Non &egrave; garantito che non si perda l'angolo, ma nell'Othello non &egrave; garantito
		quasi nulla...</p>

		<p>Le posizioni del Nero sul bordo nord del diagramma 6 &egrave; chiamata "sei": pur occupando due
		caselle C &egrave; difficilissimo per il Bianco poter prendere gli angoli grazie a quelle due pedine.
		Il pericolo, per&ograve;, &egrave; che se il Bianco prende, per esempio, A1, avr&agrave; accesso automaticamente anche
		a h1. La posizione del Bianco sul bordo sud &egrave; chiamata "cinque" ed &egrave; abbastanza sicura, ma
		certamente meno del sei. Altre formazioni possono garantire una sicurezza momentanea, ma sono
		molto pi&ugrave; pericolose.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="gli-angoli-bordi-sicuri.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 6: bordi "sicuri".
			</div>
		</div>

		<p>Anche per quanto riguarda la casella X possiamo ammettere dei casi in cui non &egrave; pericoloso
		muovervi, ma solo in finale di partita, quando ormai sono occupate quasi tutte le caselle ed
		difficilissimo trovare il modo di girare una pedina sulla diagonale. Ne &egrave; un esempio il diagramma
		7: il Nero non ha nessuna possibilit&agrave; di girare una pedina sulla diagonale e quindi l'angolo
		A1 &egrave; salvo.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="gli-angoli-casella-X-sicura.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 7: B2 &egrave; una casella X sicura.
			</div>
		</div>

		<p>Comunque la regola generale &egrave; e rimane sempre quella: <b>giocare in una casella C o in una casella X
		&egrave; estremamente pericoloso per gli angoli e va fatto solo dopo opportuni controlli</b>.</p>
