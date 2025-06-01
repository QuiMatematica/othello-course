<h1>Le Stoner trap di tipo C</h1>

<p>Rivediamo, nel diagramma 1, l'esempio base già presentato nella pagina precedente.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="chapter-1.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 1: il bianco gioca una Stoner trap.
    </div>
</div>

<h2>Condizioni per la riuscita dell'attacco</h2>

<p>Affinché una Stoner trap di questo tipo abbia successo sono necessarie diverse condizioni.</p>

<p>Innanzitutto deve esserci una formazione di bordo sbilanciata da attaccare. Nell'esempio è un quattro (diagramma 2), ma nel
seguito vedremo che è possibile attaccare anche altre formazioni.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="stoner-trap-c-2.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 2: una formazione di bordo sbilanciata da attaccare.
    </div>
</div>

<p>L'attaccante (il bianco) deve poter giocare nella casella <b>X</b> opposta allo sbilanciamento (<b>B7</b>)
prendendo il controllo di tutta la diagonale. Dopo tale mossa l'attaccato (il nero) non deve avere accesso
    all'angolo (diagramma 3).</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="stoner-trap-c-3.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 3: il bianco deve poter giocare nella casella X controllando la diagonale.
    </div>
</div>

<p>Dopo la risposta dell'attaccato, l'attaccante (il bianco) deve poter giocare nella casella adiacente alla formazione sbilanciata
    (<b>C8</b>) minacciando l'angolo opposto (<b>H8</b>, diagramma 4).</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="stoner-trap-c-4.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 4: il bianco deve poter giocare nella casella adiacente alla formazione sbilanciata.
    </div>
</div>

<p>Completato l'attacco, se l'attaccato (il nero) gioca nella casella <b>C</b> rimasta libera (<b>B8</b>),
    deve essere costretto a girare anche la casella <b>X</b> (<b>B7</b>) in modo che l'attaccante possa accedere
all'angolo. Per ottenere questo è necessario che sul controbordo adiacente (la colonna <b>B</b>) rimanga
almeno una pedina dell'attaccato.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="stoner-trap-c-5.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 5: se il nero gioca in <b>B8</b> deve girare anche <b>B7</b>.
    </div>
</div>

<p>Ho denominato <b>di tipo C</b> le Stoner trap di questa pagina perché il giocatore attaccato
    dovrebbe giocare in una casella <b>C</b> (<b>B8</b>) per impedire l'accesso all'angolo minacciato.</p>

<h2>Quando l'attacco non funziona</h2>

<p>Quando l'attaccante gioca nella casella <b>X</b> deve prendere il controllo della diagonale.
    Se così non fosse, l'attaccato potrebbe conquistare l'angolo. Sul bordo rimangono due caselle vuote e,
    per parità, il bordo è salvo. Vedi il diagramma 6.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="stoner-trap-c-6.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 6: l'attaccante non controlla la diagonale.
    </div>
</div>

<p>Dopo la risposta dell'attaccato, l'attaccante deve poter chiudere la trappola giocando nella casella adiacente
    alla formazione sbilanciata. In particolare l'attaccante deve stare attento che l'avversario, tagliando la diagonale,
    non riesca a impedirgli la mossa richiesta. Vedi il diagramma 7.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="stoner-trap-c-7.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 7: l'attaccante non accede alla casella adiacente alla formazione di bordo.
    </div>
</div>

<p>Infine, la mossa nella casella <b>C</b> dell'attaccato deve girare la pedina nella casella <b>X</b>.
    E perché questo accada è necessario che almeno una pedina del controbordo adiacente sia dell'attaccato.
    Se così non fosse, l'attaccato riuscirebbe a muovere prima nella casella <b>C</b> (senza girare la pedina nella
    casella <b>X</b>) e poi nell'angolo. Vedi il diagramma 8.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="stoner-trap-c-8.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 8: l'attaccato riesce a giocare nella casella C senza girare la pedina nella casella X.
    </div>
</div>

<p>Va considerata una quarta condizione che, tuttavia, non è fondamentale.
    Se la manovra avviene in una regione pari (come in tutti i diagrammi di questa pagina a parte il 10),
l'attacco è più efficace se, dopo che l'attaccato ha preso l'angolo,
l'attaccante può giocare nella casella <b>C</b> rimasta libera. Così facendo si incunea, chiude una regione e conquista
un tempo di gioco. Nella situazione del diagramma 9, per esempio, il bianco non
riesce a incunearsi e deve quindi prendere subito l'angolo opposto. La casella rimasta libera rimane a disposizione
dell'attaccato che guadagna un tempo di gioco.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="stoner-trap-c-9.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 9: l'attaccante non ha la possibilità di incunearsi.
    </div>
</div>

<p>Se invece l'attacco inizia da una regione dispari, l'attaccante non ha vantaggio a giocare nella casella <b>C</b>
perché così rimane una regione dispari in cui non è vantaggioso giocare. Vedi il diagramma 10.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="stoner-trap-c-10b.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 10: l'attaccante non ha vantaggio a incunearsi.
    </div>
</div>

<h2>Altre formazioni sbilanciate attaccabili</h2>

<p>Il quattro sbilanciato è solo una delle formazioni di bordo attaccabili con una Stoner trap di tipo C.</p>

<div class="row row-cols-1 row-cols-md-3 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="stoner-trap-c-10.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 11.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="stoner-trap-c-11.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 12.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="stoner-trap-c-12.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 13.
			</div>
		</div>

	</div>
</div>

<h2>Tocca a te</h2>

<p>Nel diagramma 14 giochi con il bianco e devi attaccare il quattro sbilanciato
    sul bordo ovest.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="sequence-board" data-file="stoner-trap-c-13.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 14.
	</div>
</div>

<p>Anche nel diagramma 15 giochi con il bianco, ma devi anche decidere
quale bordo sbilanciato attaccare.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="sequence-board" data-file="stoner-trap-c-14.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 15.
	</div>
</div>
