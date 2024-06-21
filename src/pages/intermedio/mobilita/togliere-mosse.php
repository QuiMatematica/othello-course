		<h1>Togliere mosse all'avversario</h1>

		<p>Hai capito che la mobilità è importante perché maggiore è il numero di mosse
		che un giocatore ha a disposizione e maggiore è la possibilità che fra queste
		ve ne sia una favorevole.</p>

		<p>Inoltre se un giocatore ha a disposizione poche mosse può trovarsi, prima o
		poi, costretto a giocare qualche mossa pericolosa, in una casella C o X, con il
		rischio di perdere un angolo e quindi pedine stabili.</p>

		<h2>Non tutte le mosse sono uguali</h2>

		<p>In una qualunque posizione possiamo dividere le mosse di un colore
		in tre categorie:</p>
		<ul>
			<li><b>mosse pericolose</b>: cedono un angolo all'avversario;</li>
			<li><b>mosse di attacco</b>: cedono un angolo all'avversario ma consentono di
			ottenere un vantaggio maggiore (per esempio un bordo intero);</li>
			<li><b>mosse sicure</b>: tutte le altre mosse.</li>
		</ul>

		<p>Il rischio di avere una bassa mobilità è di ritrovarsi con poche
		mosse sicure o di attacco a disposizione, fino al punto di essere costretti
		(per mancanza di alternative) a giocare una mossa pericolosa.</p>

		<p>Per esempio nel diagramma 1 il bianco ha una sola mossa in B2 ed è una
		mossa pericolosa perché consentirà al nero di accedere all'angolo A1 entro poche
		mosse.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="togliere-mosse-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: il bianco ha solo una mossa pericolosa.
			</div>
		</div>

		<p>In situazioni come quelle del diagramma 1, in cui il bianco ha a disposizione
		solamente mosse pericolose, si dice che il nero è riuscito a <b>chiudere il
		gioco</b> all'avversario.</p>

		<p>Nello stimare la mobilità di un giocatore, quindi, è necessario anche
		tener conto di quali mosse sono pericolose. Minimizzare la mobilità
		dell'avversario non significa necessariamente ridurre il suo numero di mosse,
		ma anche solo ridurre il numero delle sue mosse non pericolose.</p>

		<h2>Tocca a te</h2>

		<p>Nel diagramma 3 giochi con il nero e hai la possibilità di togliere al bianco
			l'unica mossa sicura che ha ancora a disposizione.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="togliere-mosse-diagramma-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 3: blocca il gioco all'avversario.
			</div>
		</div>
