<h1>La definizione di influenza</h1>
<p><b>adattato da: Francesco Marconi, <i>Teoria dell'Othello - prima parte</i>, Othello News - anno X - n. 1 - 1994.</b></p>

<p>Un criterio guida nella scelta della mossa da giocare può essere quello di vedere il numero di mosse che essa lascia
    a noi e al nostro avversario. Cercheremo di raggiungere posizioni che ci lascino il maggior numero di mosse a
    disposizione e che ne lascino il minimo al nostro avversario. (<i>&Egrave; la strategia che abbiamo chiamato
        <a href="../../intermedio/mobilita/chapter.php">mobilità</a> - NDR.</i>)</p>

<p>Vediamo ora in che modo raggiungere questo obiettivo.</p>

<p>Dobbiamo innanzitutto tener conto di quanto ci dicono le regole del gioco:
per poter eseguire una mossa è necessario porre una pedina dal lato del proprio colore su una casa vuota
della scacchiera in modo tale che tra la pedina posta e una o più pedine già presenti in quel momento
rimangono incastrate in una o più direzioni una o più pedine avversarie.
Ciò significa che:</p>

<ol>
    <li>Provando a eseguire una mossa si nota come la nostra casa vuota dovrà confinare con una casa in cui sia
    presente una pedine avversaria nell'appropriata direzione. In generale esiste una correlazione tra quantità
    di pedine esterne avversarie e il numero di mosse a mia disposizione: all'aumentare di uno aumenta
    anche l'altro. Sarà allora necessario, quando noi eseguiremo una mossa, far sì che non aumenti
    eccessivamente i numero di pedine esterne dell'avversario.</li>
    <li>Una mossa può essere eseguita solo grazie a pedine proprie di appoggio già presenti. Va da sè che
    tanto minore è il numero di pedine di appoggio in mio possesso, tanto minore tenderà a essere la
    quantità di mosse a mia disposizione, e viceversa.</li>
</ol>

<p>Vi sarete subito accorti che al punto 1 si afferma implicitamente che avere tante pedine non è cosa buona
    (<i><a href="../../intermedio/mobilita/evaporazione.php">evaporazione</a> - NDR</i>),
mentre al punto 2 si afferma che avere tante pedine è una cosa buona. Ciò è dovuto al fatto che, in realtà,
    il nostro scopo dovrebbe essere quello di <b>trovare un giusto equilibrio tra pedine esterne e pedine di appoggio</b>.</p>

<p>Chiariamo meglio questo concetto proseguendo nella nostra opera di generalizzazione e astrazione, identificando i
metodi di approccio a una strategia di ottimizzazione delle proprie pedine esterne/d'appoggio.</p>

<p>Lo facciamo prendendo in esame i digrammi 1 e 2. In entrambi deve muovere il nero. In
entrambi le situazioni sia il nero che il bianco hanno lo stesso numero di pedine. Però nel diagramma
1 il nero è in svantaggio, al contrario del diagramma 2. Cosa cambia tra le due posizioni?</p>

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

<p>Notiamo che il nero nel diagramma 1 ha ben 11 mosse contro le 10 del diagramma 2!
Le pedine di appoggio del nero sono 7 nel il diagramma 1, e 9 nel il diagramma 2.</p>

<p>Ciò che però è radicalmente diverso tra le due posizioni, come probabilmente avrete già notato,
non sono tanto dei parametri numerici come quelli sopraelencati, bensì il modo con cui sono dispose le pedine
sulla scacchiera: nel diagramma 1 il nero con una singola mossa rischia di girare contemporaneamente
diverse pedine esterne dell'avversario, cosa che non si veridica nel diagramma 2.</p>

<p>La situazione è esplicitata nel diagramma 3. Con la mossa <b>D2</b>, per fare l'esempio più appariscente,
il nero gira in una sola volta ben quattro delle sette pedine esterne bianche, togliendosi in questo modo un
gran numero di mosse e dando origine a nuove pedine esterne questa volta a vantaggio del bianco.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="definizione-influenza-3.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 3: effetto della mossa in D2.
    </div>
</div>

<p>Diremo che il nero ha una grossa <b>influenza</b>.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">In una determinata posizione <b>l'influenza di una pedina X su una casa Y</b> è
        la possibilità di eseguire una mossa nella casa Y avendo come pedina di appoggio la pedina X.</p>
        <p class="card-text">L'<b>influenza su una casa Y</b> è il numero di pedine di appoggio all'atto
        dell'esecuzione della mossa nella casa Y.</p>
	</div>
</div>

<p>Per esempio nella posizione di partenza del diagramma 3:</p>
<ul>
    <li>le pedine <b>A5</b>, <b>D5</b> e <b>G5</b> hanno influenza sulla casa <b>D2</b>;</li>
    <li>l'influenza sulla casa <b>D2</b> vale <b>3</b>.</li>
</ul>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>influenza di un colore su un altro</b>, per esempio del nero sul bianco,
            la quantità di pedine bianche che in media il nero potrebbe girare a ogni mossa.</p>
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
