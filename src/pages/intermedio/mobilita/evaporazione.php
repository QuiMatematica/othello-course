		<h1>Evaporazione</h1>

		<p>L'obiettivo dell'Othello è terminare la partita con la maggioranza di pedine del proprio colore.
		Ma questo obiettivo va raggiunto al termine della partita: non è detto che sia necessario, né opportuno,
		girare tante pedine fin dall'inizio della partita.</p>

		<p>Quello che si scopre nel giro di poche partite è che avere poche pedine all'inizio della partita è
		vantaggioso per la mobilità. Il ragionamento è semplice: se sono il nero ho bisogno di una pedina nera di sponda
		e di pedine bianche da girare. Ma una pedina sponda può agire in 8 direzioni diverse. Quindi mi può bastare una
		sola pedina per avere tante mosse a disposizione e quindi una buona mobilità. Dall'altra parte più pedine
		bianche ci sono, pedine dell'avversario, più pedine esterne ho a disposizione e quindi più mosse.</p>

		<p>Partiamo con un esempio estremo. Nel diagramma 1 il nero ha una sola pedina, mentre il bianco ne ha ben
		35. Il nero ha 8 mosse a disposizione, mentre il bianco non ne ha nessuna.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="evaporazione-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1.
			</div>
		</div>

		<p>Più concretamente, osserva la posizione del diagramma 2. Siamo in una situazione di muri contrapposti; il nero
		ha il muro più lungo e inoltre è di turno: è già in svantaggio. Ma i due giocatori hanno stili molto diversi:
		il nero tende a girare tante pedine fin da subito, mentre il bianco cerca di girarne poche. Osserva come evolve
		la situazione.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="evaporazione-diagramma-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2.
			</div>
		</div>

		<p>Quindi all'inizio della partita, in particolare contro giocatori non esperti, è utile girare poche pedine
		per guadagnare tanta mobilità.</p>

		<div class="card border-primary mb-3">
			<div class="card-header">Definizione</div>
			<div class="card-body">
				<p class="card-text">Chiamiamo <b>evaporazione</b> la tendenza di un giocatore a
					ridurre il numero delle proprie pedine.</p>
			</div>
		</div>

		<p>Nel diagramma 3 il giocatore nero si rivela subito essere poco esperto e cerca di girare fin da subito tante
		pedine. Il bianco, capito il carattere dell'avversario, dosa bene la propria evaporazione.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="evaporazione-diagramma-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3.
			</div>
		</div>

		<h2>Sovra-evaporazione</h2>

		<p>Nel diagramma 3 il bianco si è trovato più di una volta con una sola pedina. Ma c'è un rischio,
		che va sempre considerato e tenuto sotto controllo: quello di sovra-evaporare. Ovvero:
		trovarsi con talmente poche pedine che si rischia di perderle tutte.</p>

		<p>Nel diagramma 4 il nero sta giocando molto bene l'evaporazione, ma se sbaglia mossa
		perde 64 a 0. Il diagramma ti mostra la sequenza sbagliata.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="evaporazione-diagramma-4.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4: il nero sbaglia mossa e perde 64 a 0.
			</div>
		</div>

		<p>Ci sono sostanzialmente due modi per sopravvivere alla sovra-evaporazione
		(e vincere la partita):
		</p>
		<ul>
			<li>appoggiarsi a un bordo;</li>
			<li>attraversare parte per parte le pedine dell'avversario.</li>
		</ul>

		<p>Tornando alla posizione di partenza del diagramma 4, il nero non ha la possibilità di
		mettersi in salvo sul bordo, ma può per esempio giocare la mossa D3. Con questa mossa
		tiene le pedine compatte, non forma muri, ma soprattutto le pedine della diagonale D3-F5
		sono tutte nere: il rischio di perdere 64 a 0 è sventato.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="evaporazione-diagramma-5.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 5: il nero gioca bene.
			</div>
		</div>

		<p>Anche nella posizione del diagramma 6 il nero è a rischio sovra-evaporazione. In questa
		situazione, per evitare il rischio, può appoggiarsi al bordo est.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="evaporazione-diagramma-6.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 6: il nero si appoggia al bordo.
			</div>
		</div>

		<h2>Riassumendo</h2>

		<div class="card border-primary mb-3">
			<div class="card-header">Strategia</div>
			<div class="card-body">
				<p class="card-text">All'inizio della partita, per minimizzare la mobilità del tuo
					avversario, puoi tentare di evaporare: ridurre il numero di tue pedine.</p>
				<p class="card-text">Attenzione però a non sovra-evaporare e perdere 64 a 0.</p>
			</div>
		</div>
