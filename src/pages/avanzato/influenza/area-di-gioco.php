<h1>Area di gioco e area di appoggio</h1>
<p><b>adattato da: Francesco Marconi, <i>Teoria dell'Othello - prima parte</i>, Othello News - anno X - n. 1 - 1994.</b></p>

<p>Prendiamo in esame i diagrammi 1 e 2.</p>

<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="definizione-influenza-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="definizione-influenza-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2.
			</div>
		</div>

	</div>
</div>

<p>Non vogliamo soffermarci su noiosi calcoli matematico-statistici, ma vogliamo porre l'accento, invece,
sulla forma che hanno le due posizioni. In particolare ci soffermeremo sul colore nero.</p>

<p>I diagrammi 1 e 2 sono replicati nei diagrammi 3 e 4.
    Ma questa volta, al posto delle singole pedine, sono stati rappresentati gli <i>insiemi di pedine</i>,
    come se fossero un blocco compatto.
E vogliamo soffermandoci solo sulla forma che questi insiemi hanno sulla tavola.</p>

<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="area-di-gioco-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="area-di-gioco-4.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4.
			</div>
		</div>

	</div>
</div>

<p>Molto spesso si tende a eseguire determinate mosse solo a
seguito di un calcolo molto accurato, apparentemente più sicuro, cercando così di prevedere in che modo potrà
evolvere la partita. Ma è importante anche saper prendere in esame degli elementi più astratti come può essere la
creazione, magari anche solo mentale, di una forma, di un disegno geometrico da dare alle pedine sulla tavola.
    Così facendo notiamo infatti nei diagrammi 3 e 4 due posizioni strutturate in modo molto diverso.</p>

<p>La prima differenza che ci colpisce è la diversa compattezza che hanno le pedine nere: scarsa nel diagramma 3
e fortissima nel diagramma 4. Inoltre, e ci soffermeremo su questo concetto, nel diagramma 4 notiamo il nero
al <i>centro</i>, tra due insiemi di pedine bianche.</p>

<p>Per muovere abbiamo bisogno di una casella vuota dove posizionare la nuova pedina e di una pedina di
sponda: tra questi due estremi devono trovarsi le pedine avversarie.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Chiamiamo <b>area di appoggio</b> di un colore
            un gruppo di pedine di quel colore
            che possono essere usate come pedine di sponda.</p>
		<p class="card-text">Chiamiamo <b>area di gioco</b> di un colore una regione di tavola formata da case libere,
        vicina alle pedine esterne avversarie, e in cui quel colore può muovere.</p>
	</div>
</div>

<p>Proprio perché stiamo ragionando per forme, le aree di appoggio e le aree di gioco non sono
    rappresentate da singole caselle, bensì da regioni di tavola
    che hanno tali caratteristiche.</p>

<p>Nel diagramma 4 il nero ha un'unica grande area di appoggio rappresentata da tutta la regione
tinta di nero. Ha inoltre ben quattro aree di gioco, rappresentate dagli angoli della tavola visto che,
con azioni ed effetti diversi, può agire in tutti e quattro le direzioni. Non è, invece, area di gioco
del nero il bordo nord, perché non ha alcuna mossa a disposizione in quella regione.</p>

<p>Per muovere abbiamo bisogno di un'area di appoggio e un'area di gioco. Possiamo congiungere le due
aree con un vettore (una freccia) che indica come sono tra loro legate tali aree.
Otteniamo così i diagrammi 5 e 6.</p>

<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="area-di-gioco-5.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 5.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="area-di-gioco-6.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 6.
			</div>
		</div>

	</div>
</div>

<p>Questi vettori indicano la <i>direzione di gioco</i> in quanto è in quel senso, in quella
direzione, che il giocatore dovrà sviluppare il proprio gioco.</p>

<p>Confrontando i diagrammi 5 e 6, come si differenziano le due aree di gioco del nero?</p>

<p>Nel 5 abbiamo una configurazione <b>centripeta</b>, ossia i vettori partono da diverse aree
di appoggio e si incontrano nelle stesse aree di gioco.</p>

<p>Nel diagramma 6 la situazione è opposta: la configurazione è <b>centrifuga</b>, con vettori che
    partono da una stessa area di appoggio e si dirigono verso diverse aree di gioco.</p>

<p>Notiamo inoltre che non tutte le aree di gioco hanno lo stesso valore. Nel diagramma 6
    le due aree di gioco a nord sono più ampie di quelle a sud. Inoltre le aree a nord daranno
    facilmente accesso anche al bordo libero, andando a formare così un'unica ampia direzione
    di gioco. Perciò il gioco futuro di bianco e nero,
se non da subito, molto presto si concentrerà su queste direzioni, ed è perciò molto importante
    poter sviluppare su di esse
    il proprio gioco. Chi ci riuscirà si sarà assicurato un buon numero di mosse.</p>

<p>I diagramma 5 e 6 rappresentano due casi limite del nostro discorso, ma ci permettono di spiegare e capire in modo
alternativo il concetto di influenza. Infatti (diagramma 5) <b>l'influenza tende a essere alta qualora
        la configurazione della posizione tenda a essere centripeta</b>, tendente verso un unico punto partendo da zone diverse.
Infatti quando eseguirò una mossa su questa area di gioco avrò diverse pedine di appoggio che da diverse zone
della tavola avranno influenza sulle stesse case, e mi troverò a girare più pedine esterne secondo le diverse
direzioni.</p>

<p>Mentre (diagramma 6) <b>l'influenza sarà minore se la configurazione delle direzioni di gioco sarà centrifuga</b> con
il risultato che all'atto dell'esecuzione di una mossa le pedine che avranno influenza proverranno da un solo punto.</p>

<p>In generale il possesso di una <b>posizione di centro</b> ci assicura un'area di gioco di tipo centrifugo, mentre, al
    contrario, una <b>posizione estremamente spezzettata</b> originerà un'area di gioco di tipo centripeta, con conseguente
aumento della propria influenza.</p>

<p>Da ultimo notiamo che una posizione di cui abbiamo il possesso del centro sarà sempre <b>compatta</b> (ossia le pedine
del proprio colore una vicina all'altra), altrimenti, se sparpagliata, non potremo avere il centro. Cio è anche
evidente in quanto il centro della posizione è un unico punto.</p>

<p>Attenzione però: quando parliamo di centro non dobbiamo intendere il centro della tavola, bensì il centro
delle pedine disposte sulla tavola. Non sempre le due cose coincidono. Infatti il centro della tavola
è formato dal quadrato più interno di gioco, ma nel diagramma 7 il centro delle pedine in realtà è leggermente
spostato verso il bordo sinistro ed è in possesso del bianco.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="area-di-gioco-7.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 7.
    </div>
</div>
