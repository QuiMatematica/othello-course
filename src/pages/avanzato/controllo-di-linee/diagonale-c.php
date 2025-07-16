<h1>Controllo delle diagonali C</h1>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>diagonale C</b> l'insieme delle caselle in diagonale che vanno da una
            casella C alla casella C opposta, come evidenziato
            nel diagramma <span data-board-ref="definizione"></span>.</p>
	</div>
</div>

<board data-type="show" data-label="definizione" data-file="diagonale-c-definizione.json"
       data-caption="Le diagonali C."></board>

<p>Come per le altre linee, il controllo di una diagonale C impedisce all'avversario di voltare pedine
lungo quella linea. Inoltre, se non ci sono altre direzioni lungo cui voltare,
    il controllo impedisce all'avversario di giocare nelle caselle libere della linea.</p>

<p>Oltre a questo, le diagonali C hanno un'altra caratteristica interessante:
    ognuna di esse taglia una diagonale
principale, come evidenziato nel diagramma <span data-board-ref="taglio-diagonale"></span>.</p>

<board data-type="show" data-label="taglio-diagonale" data-file="diagonale-c-taglio-diagonale.json"
       data-caption="Le diagonali C tagliano le diagonali principali."></board>

<p>Ovviamente vale anche la relazione contraria: ciascuna diagonale principale taglia due diagonali C.</p>

<h2>Primo esempio</h2>

<p>Nel diagramma <span data-board-ref="suekuni-7-start"></span>
    (adattato dalla master class di Makoto Suekuni.
    <a href="https://www.youtube.com/watch?v=adk3sTpatQ8" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>)
    il nero è apparentemente in difficoltà.</p>

<board data-type="show" data-label="suekuni-7-start" data-file="diagonale-c-suekuni-7-start.json"
       data-caption="Vincere controllando una diagonale C."></board>

<ul>
    <li>Il nero ha poche pedine, quindi deve darsi da fare per voltarne abbastanza per vincere.</li>
    <li>La regione a sud-ovest è pari e solo il nero può giocare per primo. Inoltre il nero non ha
    accesso all'angolo <b>A8</b> quindi sembra costretto a giocare in <b>B8</b>.</li>
    <li>La casella <b>E1</b> rappresenta una regione dispari, ma se il nero ci gioca consente al
    bianco la facile risposta in <b>C1</b>.</li>
    <li>Anche la regione a nord-ovest è dispari e sembra la più interessante per il nero. Ma da
    quale mossa iniziare? E riuscirà a costringere il bianco a passare e magari giocare l'ultima
    mossa?</li>
</ul>

<p>Studia la sequenza proposta nel diagramma <span data-board-ref="suekuni-7"></span>.</p>

<board data-type="show" data-label="suekuni-7" data-file="diagonale-c-suekuni-7.json"
       data-caption="Vincere controllando una diagonale C."></board>

<p>Abbiamo visto quindi diversi effetti legati alle diagonali C.</p>
<ul>
    <li>La mossa in <b>B1</b>, lungo la diagonale C, ha permesso di tagliare la diagonale nera e
    ottenere così l'accesso all'angolo <b>A8</b>.</li>
    <li>La mossa nell'angolo <b>A8</b> volta una pedina sulla diagonale C <b>B3-G8</b>.
    Visto che questa era l'unica pedina bianca della diagonale C, il nero ne prende il controllo.</li>
    <li>Il controllo da parte del nero della diagonale C <b>B3-G8</b> (insieme al fatto che la pedina
    <b>B2</b> è bianca) impedisce al bianco di giocare in <b>A2</b>.</li>
</ul>

<p>Inoltre, in questo stesso esempio, dopo la mossa nell'angolo <b>A1</b>
    il bianco ha il controllo del controbordo nord. Questo,
insieme al fatto che le pedine <b>A3</b> e <b>B3</b> sono nere, impedisce al nero di giocare
in <b>A2</b>. Quindi per poter fare questa mossa il nero è stato costretto a tagliare il
controbordo, risultato ottenuto con la mossa in <b>E1</b>.</p>

<h2>Secondo esempio</h2>

<p>Anche nel diagramma <span data-board-ref="suekuni-3-start"></span> tocca al nero, che
ovviamente vorrebbe trovare il modo per vincere. Questo esempio è tratto dalla già citata
master class di Suekuni.</p>

<board data-type="show" data-label="suekuni-3-start" data-file="diagonale-c-suekuni-3-start.json"></board>

<board data-type="show" data-label="suekuni-3-G7" data-file="diagonale-c-suekuni-3-G7.json"
       data-caption="Vincere controllando una diagonale C."></board>

<board data-type="show" data-label="suekuni-3-H1" data-file="diagonale-c-suekuni-3-H1.json"
       data-caption="Vincere controllando una diagonale C."></board>

<board data-type="show" data-label="suekuni-3-H2" data-file="diagonale-c-suekuni-3-H2.json"
       data-caption="Vincere controllando una diagonale C."></board>

<board data-type="show" data-label="suekuni-3-G1-controbordo" data-file="diagonale-c-suekuni-3-G1-controbordo.json"
       data-caption="Vincere controllando una diagonale C."></board>

<board data-type="show" data-label="suekuni-3" data-file="diagonale-c-suekuni-3.json"
       data-caption="Vincere controllando una diagonale C."></board>

<h2>Terzo esempio</h2>

<board data-type="show" data-label="suekuni-6" data-file="diagonale-c-suekuni-6.json"
       data-caption="Vincere controllando una diagonale C."></board>

<h2>Tocca a te</h2>

<p>L'esercizio del diagramma <span data-board-ref="finale-5"></span> è piuttosto difficile. Ma può diventare più
semplice se ti concentri sul fatto che ti serve controllare una diagonale C per poter vincere la partita.</p>

<board data-type="quiz" data-label="finale-5" data-file="diagonale-c-finale-5.json"></board>
