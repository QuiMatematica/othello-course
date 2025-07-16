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
ovviamente vorrebbe trovare il modo per vincere. Questo esempio è tratto integralmente dalla già citata
master class di Suekuni.</p>

<board data-type="show" data-label="suekuni-3-start" data-file="diagonale-c-suekuni-3-start.json"></board>

<p>La situazione è piuttosto complessa. Il nero non ha la parità e deve trovare qualche modo per ottenere
    più pedine possibili.</p>

<p>Direi di scartare fin da subito <b>G8:</b> il nero sacrificherebbe il bordo sud e il bordo est per ottenere
solo il controbordo sud. Non è una buona idea.</p>

<p>Proviamo a partire da <b>G7</b>: il nero gioca in una regione dispari e mette in salvo tutte le pedine del controbordo
sud. Inoltre dopo <b>H8 - G8</b> il nero stabilizza anche tutte le pedine del bordo sud. Però sacrifica il bordo est.
Verifica nel diagramma
<span data-board-ref="suekuni-3-G7"></span> se è sufficiente per vincere.</p>

<board data-type="show" data-label="suekuni-3-G7" data-file="diagonale-c-suekuni-3-G7.json"
       data-caption="Riuscirà il nero a vincere muovendo in <b>G7</b>?"></board>

<p>In alternativa il nero potrebbe giocare <b>H1</b>. Al bianco non conviene incunearsi in <b>H2</b>, ma deve
rispondere a sud giocando in parità. Guarda il diagramma
<span data-board-ref="suekuni-3-H1"></span>.</p>

<board data-type="show" data-label="suekuni-3-H1" data-file="diagonale-c-suekuni-3-H1.json"
       data-caption="Riuscirà il nero a vincere giocando in <b>H1</b>?"></board>

<p>Riproviamo con <b>H2</b>: se non altro il nero prende tutto il controbordo nord e dovrebbe riuscire a ottenere
anche il bordo nord. Basterà? Guarda il diagramma <span data-board-ref="suekuni-3-H2"></span>.</p>

<board data-type="show" data-label="suekuni-3-H2" data-file="diagonale-c-suekuni-3-H2.json"
       data-caption="Riuscirà il nero a vincere giocando in <b>H2</b>?"></board>

<p>Ci serve qualcosa di più convincente. Proviamo con <b>G1</b>, in modo da controllare tutto il controbordo est?
Vedi il diagramma <span data-board-ref="suekuni-3-G1-controbordo"></span>.</p>

<board data-type="show" data-label="suekuni-3-G1-controbordo" data-file="diagonale-c-suekuni-3-G1-controbordo.json"
       data-caption="Riuscirà il nero a vincere controllando il controbordo est?"></board>

<p>Ci siamo quasi. Ci basterebbe una sola pedina in più.</p>

<p>Siamo nella pagina in cui si parla di controllo di diagonali C. Hai guardato se c'è questa possibilità?</p>

<p>Guarda la diagonale <b>B8-G3</b>: quali mosse servono per controllarla?</p>

<p>Dobbiamo girare la pedina in <b>G3</b> e lo possiamo fare con la mossa in <b>G1</b>.
E dobbiamo girare la pedina in <b>E5</b> e lo possiamo fare giocando in <b>G7</b>.</p>

<p>Cosa otteniamo controllando la diagonale?</p>

<p>Otteniamo che il bianco non è in grado di accedere nella casella <b>H2</b> e questo permette al nero di stabilizzare
tutto il bordo est.</p>

<p>Fai un ultimo sforzo: conta il finale e poi confrontalo con il diagramma
    <span data-board-ref="suekuni-3"></span>.</p>

<board data-type="show" data-label="suekuni-3" data-file="diagonale-c-suekuni-3.json"
       data-caption="Riuscirà il nero a vincere controllando una diagonale C?"></board>

<h2>Terzo esempio</h2>

<p>Anche la posizione del diagramma <span data-board-ref="suekuni-6-start"></span> è
tratta dalla master class di Suekuni.</p>

<board data-type="show" data-label="suekuni-6-start" data-file="diagonale-c-suekuni-6-start.json"
       data-caption="Riuscirà il nero a vincere?"></board>

<p>Non è facile trovare la mossa vincente, ma questa volta facciamoci guidare dal fatto che stiamo parlando di
diagonali C.</p>

<p>Innanzitutto <i>quale</i> diagonale C? L'unica che è interessante è la <b>B1-H7</b> che, in questo momento,
è controllata dal bianco.</p>

<p><i>Come</i> può il nero controllarla? L'unica sequenza che permette in controllo è giocare prima in <b>G8</b>
e dopo in <b>B1</b>.</p>

<p>Ma così sacrifichiamo il bordo sud e cediamo l'angolo <b>A1</b>. Non è che poi il bianco prende anche <b>H1</b>
e tutto il bordo nord?</p>

<p>No, il bianco non riesce a prendere il bordo nord perché con <b>B1</b>, oltre a prendere il controllo della
diagonale C, il nero taglia la diagonale bianca e ottiene l'accesso in <b>H1</b>.</p>

<p>Non resta che contare il finale e giocarlo, come nel diagramma <span data-board-ref="suekuni-6"></span>.</p>

<board data-type="show" data-label="suekuni-6" data-file="diagonale-c-suekuni-6.json"
       data-caption="Vincere controllando una diagonale C."></board>

<h2>Tocca a te</h2>

<p>L'esercizio del diagramma <span data-board-ref="finale-5"></span> è piuttosto difficile. Ma può diventare più
semplice se ti concentri sul fatto che ti serve controllare una diagonale C per poter vincere la partita.</p>

<board data-type="quiz" data-label="finale-5" data-file="diagonale-c-finale-5.json"></board>
