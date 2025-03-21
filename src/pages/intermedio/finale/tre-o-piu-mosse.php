<H1>Il finale perfetto con tre o più caselle vuote</H1>

<p>Ora complichiamo leggermente la situazione e analizziamo un finale con tre caselle vuote.</p>
<p>Guarda il diagramma 1.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="free-game-board" data-file="tre-o-piu-mosse-1.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 1: mossa al bianco.
	</div>
</div>

<p>Il modo migliore per rappresentare tutte le possibili sequenze è disegnare
    l'<b>albero delle mosse</b>.</p>

<h2>Cos'è un albero delle mosse?</h2>

<ul>
    <li>Un <i>albero</i> è una struttura gerarchica formata da <b>nodi</b> (posizioni di gioco)
        e <b>rami</b> (mosse che collegano una posizione all'altra).</li>
    <li>Il nodo principale è chiamato <b>radice</b> e rappresenta la posizione di partenza.</li>
    <li>I nodi terminali (le <i>foglie</i>) rappresentano le posizioni di fine partita,
        con il relativo punteggio finale.</li>
</ul>

<p>La figura 1 mostra l'albero delle mosse della posizione
del diagramma 1.</p>
<ul>
    <li>Ogni nodo rappresenta una posizione.</li>
    <li>Ogni ramo è una mossa.</li>
    <li>Nelle foglie troviamo il punteggio finale.</li>
</ul>

<div class="card mx-auto my-3" style="width: fit-content; max-width: 100%;">
	<div class="card-body">
		<img src="albero1.gif" alt="L'albero delle mosse" class="card-img-top img-fluid">
	</div>
	<div class="card-footer text-body-secondary text-center">
		Figura 1: l'albero delle mosse.
	</div>
</div>

<p>Ci sono 5 sequenze possibili e 3 di queste portano alla vittoria del bianco.
    Ma come devono giocare i due colori per ottenere il miglior
risultato possibile?</p>

<h2>Analisi del finale perfetto</h2>

<p>Per analizzare il finale bisogna partire dalle foglie e andare a ritroso
verso la radice.</p>

<h3>Analisi dei nodi AA, AB, BA, BB, CA</h3>
<ul>
    <li>In queste posizioni il bianco ha una sola mossa obbligata.</li>
    <li>Questo significa che, se il bianco arriva in uno di questi nodi, dovrà
        necessariamente giocare l'unico ramo disponibile.</li>
    <li>Possiamo dunque associare a tali nodi il punteggio finale (figura 2).</li>
</ul>

<div class="card mx-auto my-3" style="width: fit-content; max-width: 100%;">
	<div class="card-body">
		<img src="albero2.gif" alt="L'albero delle mosse" class="card-img-top img-fluid">
	</div>
	<div class="card-footer text-body-secondary text-center">
		Figura 2: analisi del terzo livello.
	</div>
</div>

<h3>Analisi dei nodi A, B e C</h3>
<ul>
    <li><b>Nodo A:</b> il nero ha due possibilità:
        <ul>
            <li><b>G2</b> → Perde 30 a 34.</li>
            <li><b>H1</b> → Vince 33 a 31.</li>
            <li>Il nero sceglierà <b>H1</b> perché gli garantisce la vittoria:
                evidenzio la mossa migliore.</li>
            <li>Il nodo A porta al risultato 33-31 con vittoria del nero: lo scrivo nel nodo.</li>
        </ul>
    </li>
    <li><b>Nodo B:</b> il nero ha due possibilità:
        <ul>
            <li><b>G1</b> → Perde 30 a 34.</li>
            <li><b>H1</b> → Perde 31 a 33.</li>
            <li>Il nero sceglierà <b>H1</b> che minimizza la sconfitta:
                evidenzio la mossa migliore.</li>
            <li>Il nodo B porta al risultato 31-33 con vittoria del bianco: lo scrivo nel nodo.</li>
        </ul>
    </li>
    <li><b>Nodo C:</b> il nero ha una sola mossa obbligata:
        <ul>
            <li><b>G2</b> → Vince 34 a 30.</li>
            <li>Il nodo C porta al risultato 34-30 con vittoria del nero: lo scrivo nel nodo.</li>
        </ul>
    </li>
</ul>

<div class="card mx-auto my-3" style="width: fit-content; max-width: 100%;">
	<div class="card-body">
		<img src="albero3.gif" alt="L'albero delle mosse" class="card-img-top img-fluid">
	</div>
	<div class="card-footer text-body-secondary text-center">
		Figura 2: analisi del secondo livello.
	</div>
</div>

<h3>Analisi della radice</h3>
<ul>
    <li><b>G1</b> → Bianco perde 33 a 31.</li>
    <li><b>G2</b> → Bianco vince 31 a 33.</li>
    <li><b>H1</b> → Bianco perde 34 a 30.</li>
    <li>Il bianco sceglierà <b>G2</b> che lo porta al risultato migliore:
                evidenzio la mossa migliore.</li>
    <li>La radice porta al risultato 31-33 con vittoria del bianco: lo scrivo nella radice.</li>
</ul>

<p>Il <i>finale perfetto</i> è dato dalla sequenza <b>G2 → H1 → G1</b> con vittoria del bianco
    31 a 33.</p>

<p>La figura 4 mostra il diagramma finale con l’analisi completa.</p>

<div class="card mx-auto my-3" style="width: fit-content; max-width: 100%;">
	<div class="card-body">
		<img src="albero4.gif" alt="L'albero delle mosse" class="card-img-top img-fluid">
	</div>
	<div class="card-footer text-body-secondary text-center">
		Figura 2: analisi del primo livello e finale perfetto.
	</div>
</div>

<h2>Come un essere umano calcola il finale perfetto</h2>

<p>Il procedimento che ti ho spiegato rispecchia il modo in cui i computer calcolano il finale perfetto.</p>
<p>Per sintetizzare, il processo usato dai computer è di tipo <i>bottom-up</i>, perché parte dal fondo dell'albero
delle mosse e confronta i risultati delle singole sequenze risalendo l'albero.</p>

<p>Noi esseri umani abbiamo bisogno di un processo equivalente, ma che sia maggiormente alla nostra portata.
Un processo che non ci costringa a ricordare tutte le alternative. Abbiamo bisogno di un processo <i>top-down</i>:
che parta dall'alto (la posizione che abbiamo davanti) e ci permetta di capire il risultato finale.</p>

<p>Per comodità di analisi riporto nel diagramma 2 la stessa posizione del diagramma 1, ma questa volta non potrai
giocare le mosse e proveremo a capire il finale perfetto del bianco senza piazzare nè girare le pedine.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="tre-o-piu-mosse-1.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 2: mossa al bianco.
	</div>
</div>

<p>Tocca al bianco; ci sono tre caselle vuote; e il bianco può giocare in tutte e tre le caselle. Analizziamo le
alternative una alla volta.</p>

<div class="border-start border-4 border-primary ps-3">
    <p>Il bianco gioca in <b>G1</b>.</p>
    <p>
        Contiamo quante pedine ottiene il bianco con questa mossa:
        aggiunge la pedina <b>G1</b> e volta la pedina in <b>F1</b>.
        Quindi <b>+2</b>.</p>
    <p>Tocca al nero che ha due alternative: <b>G2</b> e <b>H1</b>.</p>

    <p>Se il nero gioca in <b>G2</b>, il bianco perde le pedine da <b>G3</b> a <b>G7</b>, quindi <b>-5</b>.
        Tocca al bianco che ha una mossa obbligata in <b>H1</b>.
        Con questa mossa piazza una pedina e volta 2 pedine in verticale e 4 in diagonale; quindi questa mossa vale <b>+7</b>.
        Quindi con la sequenza <b>G1 → G2 → H1</b> il bianco guadagna <b>+2 -5 +7 = +4</b> pedine rispetto alla posizione di partenza.</p>

    <p>Se invece il nero gioca in <b>H1</b>, il bianco perde le pedine da <b>B1</b> a <b>G1</b>, quindi <b>-6</b>.
        Tocca al bianco che ha la mossa obbligata in <b>G2</b>.
        Con questa mossa piazza una pedina e volta una pedina in orizzontale e 3 in diagonale; quindi questa mossa vale <b>+5</b>.
        Quindi con la sequenza <b>G1 → H1 → G2</b> il bianco guadagna <b>+2 -6 +5 = +1</b> pedina rispetto alla posizione di partenza..</p>

    <p>Tra le due alternative il nero deve scegliere quella più vantaggiosa per lui, quindi sceglierà di muovere in <b>H1</b>.
        Quindi, giocando in <b>G1</b>, il bianco guadagnerà 1 pedina rispetto alla situazione attuale. Al momento ha 30 pedine,
        quindi perderebbe per 33 a 31.</p>
</div>

<p>Con la prima mossa analizzata il bianco non vince, quindi è necessario che proceda con le altre possibilità.</p>

<div class="border-start border-4 border-primary ps-3">
    <p>Il bianco gioca in <b>G2</b>.</p>
    <p>
        Contiamo quante pedine ottiene il bianco con questa mossa:
        aggiunge la pedina <b>G2</b> e volta le pedina <b>F2</b>, <b>F3</b>, <b>E4</b> e <b>D5</b>.
        Quindi <b>+5</b>.</p>
    <p>Tocca al nero che ha due alternative: <b>G1</b> e <b>H1</b>.</p>

    <p>Se il nero gioca in <b>G1</b>, il bianco perde le pedine da <b>G2</b> a <b>G7</b> e la pedina <b>F2</b>, quindi <b>-7</b>.
        Tocca al bianco che ha una mossa obbligata in <b>H1</b>.
        Con questa mossa piazza una pedina e volta 2 pedine in verticale, 2 in orizzontale e una in diagonale; quindi questa mossa vale <b>+6</b>.
        Quindi con la sequenza <b>G2 → G1 → H1</b> il bianco guadagna <b>+5 -7 +6 = +4</b> pedine rispetto alla posizione di partenza.</p>

    <p>Se invece il nero gioca in <b>H1</b>, il bianco perde le pedine da <b>C6</b> a <b>G2</b>, quindi <b>-5</b>.
        Tocca al bianco che ha la mossa obbligata in <b>G1</b>.
        Con questa mossa piazza una pedina e volta una pedina in orizzontale e una in verticale; quindi questa mossa vale <b>+3</b>.
        Quindi con la sequenza <b>G2 → H1 → G1</b> il bianco guadagna <b>+5 -5 +3 = +3</b> pedine rispetto alla posizione di partenza.</p>

    <p>Tra le due alternative il nero deve scegliere quella più vantaggiosa per lui, quindi sceglierà di muovere in <b>H1</b>.
        Quindi, giocando in <b>G2</b>, il bianco guadagnerà 3 pedine rispetto alla situazione attuale.
        Al momento ha 30 pedine, quindi vincerà per 33 a 31.</p>
</div>

<p>Il nero ha trovato una mossa che gli garantisce la vittoria. Se si accontenta di vincere, può giocare <b>G2</b> e prepararsi a esultare.</p>

<p>Tuttavia se vuole la certezza di aver scelto la mossa matematica migliore, deve analizzare anche l'ultima alterntiva.</p>

<div class="border-start border-4 border-primary ps-3">
    <p>Il bianco gioca in <b>H1</b>.</p>
    <p>
        Contiamo quante pedine ottiene il bianco con questa mossa:
        aggiunge la pedina <b>H1</b> e volta le pedina <b>H2</b> e <b>H3</b>.
        Quindi <b>+3</b>.</p>
    <p>Tocca al nero che ha un'unica alternativa: <b>G2</b>.</p>

    <p>Il nero gioca in <b>G2</b>; il bianco perde le pedine da <b>G3</b> a <b>G7</b>, quindi <b>-5</b>.
        Tocca al bianco che ha una mossa obbligata in <b>G1</b>.
        Con questa mossa piazza una pedina e volta solo la pedina <b>F1</b>; quindi questa mossa vale <b>+2</b>.
        Quindi con la sequenza <b>H1 → G2 → G1</b> il bianco guadagna <b>+3 -5 +2 = 0</b> pedine rispetto alla posizione di partenza.</p>

    <p>Quindi, giocando in <b>H1</b>, il bianco non guadagna pedine rispetto alla situazione attuale.
        Al momento ha 30 pedine che non sono abbastanza per vincere.</p>
</div>

<p>Quindi è confermato: la mossa perfetta per il bianco è <b>G2</b>, che gli permette di vincere per 33 a 31.</p>

<h2>Conclusioni</h2>

<p><b>Attenzione!</b> Questo è il procedimento per calcolare il finale perfetto partendo una posizione e analizzando
tutte le possibile sequenze. <b>Ma non è sempre necessario fare tutto questo lavoro.</b></p>
<ul>
    <li>Se hai accumulato <u>un buon vantaggio</u> rispetto all'avversario, ti basta trovare una sequenza vincente e giocare quella.
    Possiamo lasciare la perfezione ai computer... e ai giapponesi!</li>
    <li>Se hai accumulato <u>poco vantaggio</u>, potresti utilizzare dei trucchi (in gergo matematico: <i>euristiche</i>)
    per evitare di dover analizzare tutte le possibili sequenze. Li vedremo nelle prossime pagine.</li>
    <li>Ma se la posizione è <u>molto equilibrata</u>... ahimè: non c'è altro da fare che calcolare tutte le sequenze.</li>
</ul>

<p>Ora che hai capito il metodo, puoi applicarlo a qualsiasi numero di caselle vuote.
    Naturalmente, più caselle libere ci sono, più grande sarà l’albero delle mosse.</p>

<p>Noi umani troviamo difficile analizzare alberi con più di 5-6 mosse.
I computer, invece, possono calcolare finali perfetti con 20-25 caselle libere in pochi secondi.
Ecco perché è così difficile battere un software nel finale di partita!</p>

<p>Nel caso analizzato, il finale perfetto è unico. Tuttavia, in alcune situazioni possono
    esserci più sequenze vincenti che portano allo stesso risultato. Sarà indifferente
    giocare l'una o l'altra.</p>

<p>Infine, in teoria, un computer potrebbe costruire l’intero albero della partita perfetta
    fin dalla prima mossa. Perché questo non è ancora stato fatto? Lo scopriremo
    <a href="complessita-othello.php">nell’ultima pagina</a> del capitolo!</p>

<h2>Tocca a te</h2>

<p>Il diagramma 3 mostra una posizione tratta dal libro di Brian Rose.
    Prenditi tutto il tempo necessario per costruire il diagramma di tutte le sequenze e
    determina il finale perfetto.
E poi giocalo. Riuscirai a vincere questa partita?</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="sequence-board" data-file="tre-o-piu-mosse-2.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 3: trova il finale perfetto e giocalo.
	</div>
</div>
