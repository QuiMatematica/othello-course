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
giocare le mosse e proveremo a capire il finale perfetto del bianco senza giocare le mosse.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="free-game-board" data-file="tre-o-piu-mosse-1.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 2: mossa al bianco.
	</div>
</div>

<p>Tocca al bianco; ci sono tre caselle vuote; e il bianco può giocare in tutte e tre le caselle. Analizziamo le
alternative una alla volta.</p>

<ul>
    <li>Il bianco gioca in <b>G1</b>. Contiamo quante pedine ottiene con questa mossa: aggiunge una pedina e ne volta
        una (<b>F1</b>). Quindi <b>+2</b>. Tocca al nero che ha due alternative.
        <ul>
            <li>Il nero gioca in <b>G2</b>. Il bianco perde le pedine da <b>G3</b> a <b>G7</b>, quindi <b>-5</b>.
                Tocca al bianco che ha la mossa obbligata.
                <ul>
                    <li>Il bianco gioca in <b>H1</b>. Aggiunge una pedina e volta pedine in verticale e in diagonale:
                        <b>+7</b>. Sommiamo le variazioni: <b>+2 -5 +7 = +4</b>.</li>
                </ul>
            </li>
            <li>Il nero gioca in <b>H1</b>. Il bianco perde le pedine da <b>B2</b> a <b>G2</b>, quindi <b>-6</b>.
                Tocca al bianco che ha la mossa obbligata.
                <ul>
                    <li>Il bianco gioca in <b>G2</b>. Aggiunge una pedina e volta pedine in orizzontale e in diagonale:
                        <b>+5</b>. Sommiamo le variazioni: <b>+2 -6 +5 = +1</b>.</li>
                </ul>
            </li>
            <li>Tra le due alternative il nero sceglie quella più vantaggiosa per lui, quindi sceglie di muovere in
            <b>H1</b>. Quindi la mossa <b>G1</b> del bianco consente di guadagnare 1 pedina rispetto alla situazione
                attuale: troppo poco per vincere.</li>
        </ul>
    </li>
</ul>

<h2>Il finale perfetto con più caselle vuote</h2>

<p>Ora che hai capito il metodo, possiamo applicarlo a qualsiasi numero di caselle vuote.
    Naturalmente, più caselle libere ci sono, più grande sarà l’albero delle mosse.</p>

<p>Gli umani trovano difficile analizzare alberi con più di 5-6 mosse.
I computer, invece, possono calcolare finali perfetti con 20-25 caselle libere in pochi secondi.
Ecco perché è così difficile battere un software nel finale di partita!</p>

<p>Nel caso analizzato, il finale perfetto è unico. Tuttavia, in alcune situazioni possono
    esserci più sequenze vincenti che portano allo stesso risultato. Sarà indifferente
    giocare l'una o l'altra.</p>

<p>Infine, in teoria, un computer potrebbe costruire l’intero albero della partita perfetta
    fin dalla prima mossa. Perché questo non è ancora stato fatto? Lo scopriremo
    <a href="complessita-othello.php">nell’ultima pagina</a> del capitolo!</p>

<h2>Tocca a te</h2>

<p>Il diagramma 2 mostra una posizione tratta dal libro di Brian Rose.
    Prenditi tutto il tempo necessario per costruire il diagramma di tutte le sequenze e
    determina il finale perfetto.
E poi giocalo. Riuscirai a vincere questa partita?</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="sequence-board" data-file="tre-o-piu-mosse-2.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 2: trova il finale perfetto e giocalo.
	</div>
</div>
