<h1>La definizione di influenza</h1>
<p><b>adattato da: Francesco Marconi, <i>Teoria dell'Othello - prima parte</i>, Othello News - anno X - n. 1 - 1994.</b></p>

<p>Abbiamo visto che è importante avere una <a href="../../intermedio/mobilita/chapter.php">alta mobilità</a>:
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
    anche l'altro. Allora è necessario, quando noi eseguiamo una mossa, far sì che non aumenti
    eccessivamente il numero di pedine esterne dell'avversario che andiamo a voltare.</li>
    <li>Una mossa può essere eseguita solo grazie a pedine proprie di appoggio già presenti. Va da sè che
    tanto minore è il numero di pedine di appoggio in mio possesso, tanto minore tenderà a essere la
    quantità di mosse a mia disposizione, e viceversa.</li>
</ol>

<p>Vi sarete subito accorti che al punto 1 si afferma implicitamente che avere tante pedine non è cosa buona,
mentre al punto 2 si afferma che avere tante pedine è una cosa buona. Ciò è dovuto al fatto che, in realtà,
    il nostro scopo dovrebbe essere quello di <b>trovare un giusto equilibrio tra pedine esterne e pedine di appoggio</b>.</p>

<p>Chiariamo meglio questo concetto, identificando una strategia di ottimizzazione tra il
    numero di pedine esterne e il numero di pedine d'appoggio.</p>

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
non sono tanto dei parametri numerici come quelli sopraelencati, bensì il modo con cui sono dispose le pedine
sulla tavola: nel diagramma 1 il nero con una singola mossa rischia di girare contemporaneamente
diverse pedine esterne dell'avversario, cosa che non si veridica nel diagramma 2.</p>

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

<p>Questo succede anche con le altre mosse del nero: <b>C1</b> volta due pedine esterne, <b>E2</b> ne volta tre,
<b>B3</b> ne volta cinque. Solo <b>A3</b> volta una sola pedina esterna.</p>

<p>La causa del gran numero di pedine che il nero è costretto a voltare è legata al numero di direzioni in cui
avvengono questa voltura. Giocando in <b>D2</b> il nero volta pedine in 3 direzioni diverse, aumentando così il numero
esterne che vengono girare. <b>A3</b>, invece, volta una sola pedina esterna perché è una sola la direzione
lungo cui questa mossa agisce.</p>

<p>Ma il problema non è legato solo al fatto che una singola mossa volta pedine in più direzioni. Lo svantaggio
del nero è legato al fatto che quasi tutte le sue mosse voltano pedine in più direzioni.</p>

<p>Diremo che il nero ha <b>una alta influenza</b>.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Data una posizione, <b>influenza</b> di un colore è il numero medio di
            direzioni in cui vengono voltate le pedine
            per ciascuna delle mosse possibili di quel colore.</p>
	</div>
</div>

<p>Notiamo una cosa molto, molto importante; per poter eseguire una mossa, come ritroviamo nella definizione appena
riportata, è indispensabile avere influenza su una casa. Per esempio, sempre nella posizione iniziale del diagramma 3, il bianco può
eseguire la mossa in <b>B3</b> solo perché ha influenza su di essa (con la pedina <b>F7</b>).</p>

<p>Ciò che però cambia tra l'influenza del bianco e quella del nero su <b>D2</b> è la grossa quantità di pedine
esterne girate, e perciò, di conseguenza, il fatto che il nero dopo <b>D2</b> avrà trasformato tante pedine
esterne da bianche in nere, ossia avrà aumentato il suo numero di pedine esterne.</p>

<p>&Egrave; per questo che possiamo parlare di <b>influenza negativa</b> come di quell'influenza che tenderebbe
a <i>peggiorare</i> la nostra posizione. Nel corso di queste pagine ogni volta che parlerò di influenza
ne parlerò con accezione negativa, tranne quando sarà esplicitamente specificato.</p>

<p>Ritroviamo perciò nell'influenza un parametro che, quando troppo elevato, indica quanto cattiva può essere
la nostra posizione. Attenzione, ho detto può essere. Infatti studieremo posizioni in cui nonostante una grossa
influenza un giocatore può avere ugualmente un notevole vantaggio. L'influenza, comunque, è come un tarlo
che impedisce, ma solo a lungo termine, di perseguire una ottimizzazione tra pedine esterne e pedine di appoggio.
&Egrave; un elemento negativo da limitare.</p>
