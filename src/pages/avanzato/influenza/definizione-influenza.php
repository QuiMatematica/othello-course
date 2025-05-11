<h1>La definizione di influenza</h1>
<p><b>adattato da: Francesco Marconi, <i>Teoria dell'Othello - prima parte</i>, Othello News - anno X - n. 1 - 1994.</b>
<a href="https://www.fngo.it/allegati/OthelloNews%20Anno%20X%20n.1.pdf" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a></p>

<p>Abbiamo visto che è importante avere <a href="../../intermedio/mobilita/chapter.php">mobilità</a>:
è vantaggioso cioè avere molte mosse a disposizione.
    Quindi un criterio che ci può guidare nella scelta della prossima mossa da giocare può essere quello di vedere
    il numero di mosse che essa lascia a noi e al nostro avversario.
    Cercheremo di raggiungere posizioni che ci lascino il maggior numero di mosse a
    disposizione e che ne lascino il minimo al nostro avversario.</p>

<p>Vediamo ora in che modo raggiungere questo obiettivo.</p>

<p>Dobbiamo innanzitutto tener conto di quanto ci dicono le regole del gioco:
per poter eseguire una mossa è necessario porre una pedina dal lato del proprio colore su una casa vuota
della tavola in modo tale che tra la pedina posta e una o più pedine già presenti in quel momento
rimangono incastrate in una o più direzioni una o più pedine avversarie.
Ciò significa che:</p>

<ol>
    <li>Per muovere in una casella questa dovrà confinare con una casa in cui sia
    presente una pedina avversaria. In generale esiste una correlazione tra quantità
    di pedine esterne avversarie e il numero di mosse a mia disposizione: all'aumentare dell'una aumenta
    anche l'altro. Allora è necessario, quando noi eseguiamo una mossa, far sì che siano poche
        le pedine esterne dell'avversario che andiamo a voltare.</li>
    <li>Una mossa può essere eseguita solo grazie a pedine proprie di appoggio già presenti. Va da sè che
    tanto minore è il numero di pedine di appoggio in mio possesso, tanto minore tenderà a essere la
    quantità di mosse a mia disposizione, e viceversa.</li>
</ol>

<p>Ti sarai accorto che al punto 1 si afferma implicitamente che avere tante pedine non è cosa buona,
mentre al punto 2 si afferma che avere tante pedine è una cosa buona. Ciò è dovuto al fatto che, in realtà,
    il nostro scopo dovrebbe essere quello di <b>trovare un giusto equilibrio tra pedine esterne
        (dell'avversario) e pedine di appoggio (proprie)</b>.</p>

<p>Prendiamo in esame i diagrammi 1 e 2. In entrambi deve muovere il nero. In
entrambi le situazioni sia il nero che il bianco hanno lo stesso numero di pedine. Però nel diagramma
1 il nero è in svantaggio, mentre nel diagramma 2 è in vantaggio. Cosa cambia tra le due posizioni?</p>

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

<p>Notiamo che il nero nel diagramma 1 ha ben 11 mosse contro le 10 del diagramma 2.
Le pedine di appoggio del nero sono 7 nel il diagramma 1, e 9 nel il diagramma 2.</p>

<p>Ciò che però è radicalmente diverso tra le due posizioni, come probabilmente avrai già notato,
non sono tanto dei parametri numerici come quelli sopraelencati, bensì il modo con cui sono disposte le pedine
sulla tavola: nel diagramma 1 il nero con una singola mossa rischia di girare contemporaneamente
diverse pedine esterne dell'avversario, cosa che non si verifica nel diagramma 2.</p>

<p>La situazione è esplicitata nel diagramma 3. Con la mossa <b>D2</b>, per fare l'esempio più appariscente,
il nero gira in una sola volta ben quattro delle otto pedine esterne bianche, togliendosi in questo modo un
gran numero di mosse e dando origine a nuove pedine esterne questa volta a vantaggio del bianco.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="definizione-influenza-3.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 3: effetto della mossa in D2.
    </div>
</div>

<p>Questo succede anche con le altre mosse del nero: <b>C2</b> volta due pedine esterne, <b>E2</b> ne volta tre,
<b>B3</b> ne volta cinque. Solo <b>A3</b> volta una sola pedina esterna.</p>

<p>Giocando in <b>D2</b> il nero è costretto a voltare un gran numero di pedine perché sono ben tre le
    direzioni lungo le quali avvengono le volture.
    Giocando in <b>A3</b>, invece, volta una sola pedina esterna perché è una sola la direzione
lungo la quale questa mossa agisce.</p>

<p>Ma il problema del nero non è legato solo al fatto che ha mosse che voltano pedine in più direzioni.
Se infatti avesse una mossa che agisce in più direzioni, ma diverse altre che agiscono in una sola
    direzione, non ci sarebbero difficoltà: basterebbe scegliere le seconde.</p>
<p>Nella posizione che stiamo
analizzando lo svantaggio del nero è negato al fatto che <b>quasi tutte le mosse che ha a disposizione
        voltano pedine in più direzioni</b>. Ne ha una che agisce in una sola direzione, ma una volta
giocata quella... le altre sono tutte dannose.</p>

<p>Diremo che il nero ha <b>una alta influenza</b>.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Data una posizione, l'<b>influenza</b> di un colore è il numero medio di
            direzioni in cui vengono voltate le pedine
            per ciascuna delle mosse possibili di quel colore.</p>
	</div>
</div>

<p>L'influenza ha una connotazione <b>negativa</b>, perché più è alta più la nostra posizione
    tenderà a <i>peggiorare</i>. Quindi è necessario tenere bassa l'influenza delle nostre posizioni.</p>

<p>Vanno fatte subito due precisazioni:</p>
<ul>
    <li>Sebbene la definizione sia quantitativa (e calcolabile), è necessario imparare a valutare
    l'influenza in modo qualitativo. Per cui ci accontenteremo di parlare di <i>alta, media o
        bassa</i> influenza, e dovremo trovare delle tecniche per poterla valutare
    qualitativamente, evitando così di dover fare calcoli.</li>
    <li>Oltre al numero di direzioni non va comunque dimenticato il numero di pedine che vengono voltate.
    La mossa in <b>B3</b> del nero, che volta 5 pedine esterne in 2 direzioni, è sicuramente
    peggiore della mossa in <b>D2</b>, che volta 4 pedine esterne in 3 direzioni. Lo vediamo anche
        in termini di mobilità: dopo <b>D2</b> il nero può ancora giocare in <b>E2</b>,
    cosa che non può fare dopo <b>B3</b>.</li>
</ul>

<p>Sorgono spontanee due domande a cui risponderemo nelle prossime pagine:</p>
<ol>
    <li>Come possiamo valutare qualitativamente la nostra influenza?</li>
    <li>Come dobbiamo giocare per tenere bassa la nostra influenza e cercare di alzare quella
    dell'avversario?</li>
</ol>
