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

<h3>Analisi dei noi A, B e C</h3>
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
