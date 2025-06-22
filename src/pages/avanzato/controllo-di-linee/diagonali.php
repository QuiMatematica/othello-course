<h1>Controllo delle diagonali principali</h1>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>diagonali principali</b> l'insieme delle pedine che vanno da
            <b>A1</b> ad <b>H8</b>, e l'insieme delle pedine che vanno da <b>H1</b> ad <b>A8</b>.</p>
        <p class="card-text">Tenendo presente la posizione delle pedine all'inizio gioco
             possiamo chiamare
            :</p>
        <ul>
            <li><b>diagonale bianca</b> quella che va da <b>A1</b> ad <b>H8</b>;</li>
            <li><b>diagonale nera</b> quella che va da <b>H1</b> ad <b>A8</b>.</li>
        </ul>
	</div>
</div>

Nella posizione di partenza (diagramma <span data-board-ref="inizio-gioco"></span>) sulla diagonale <b>A1</b> ad <b>H8</b>
sono presenti le due pedine bianche, mentre sulla diagonale <b>H1</b> ad <b>A8</b> sono presenti le due pedine nero.
Questo ci offre un buon modo per distinguere tra le due diagonali (diagramma <span data-board-ref="diagonale-bianca-nera"></span>).

<gather>
    <board data-type="show" data-label="inizio-gioco" data-file="diagonali-inizio-gioco.json"
       data-caption="La posizione di partenza."></board>
    <board data-type="show" data-label="diagonale-bianca-nera" data-file="diagonali-bianca-nera.json"
       data-caption="La diagonale bianca e la diagonale nera."></board>
</gather>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Chiamiamo <b>diagonale bianca</b> la diagonale principale che va da <b>A1</b> ad <b>H8</b>.</p>
        <p class="card-text">Chiamiamo <b>diagonale nera</b> la diagonale principale che va da <b>H1</b> ad <b>A8</b>.</p>
	</div>
</div>

<p>Attenzione che in questo caso il colore si riferisce alle diagonali, non alle pedine che sono presenti sulle stesse.</p>

<h2>Controllare la diagonale e mantenere il controllo</h2>

<p>Il controllo delle diagonali diventa estremamente importante nei finali delle partite. Capita spesso, infatti,
che si giunga alle ultime mosse senza che nessuno dei due giocatori sia riuscito a conquistare un angolo.</p>

<p>Per esempio nel diagramma <span data-board-ref="dimattei-1"></span> (esempio tratto dal corso scritto da Alessandro
Di Mattei) tocca al bianco. Ormai non c'è più alcuna casella <i>sicura</i> dove giocare e al bianco rimangono solo
due mosse: <b>B7</b> e <b>H7</b>. Ma sono entrambi caselle <b>X</b>.</p>

<board data-type="show" data-label="dimattei-1" data-file="diagonali-dimattei-1.json"></board>

<p>Quando abbiamo parlato di pedine stabili abbiamo visto quanto possa essere pericoloso giocare in una casella <b>X</b>.
Anche se si ottiene il controllo della diagonale l'avversario può cercare il modo di <i>tagliare</i> la diagonale
e ottenere così un accesso all'angolo. Per esempio, nel diagramma <span data-board-ref="diagonale-tagliata"></span>
il bianco gioca nella casella <b>X</b> convinto di avere il controllo della diagonale, ma il nero la taglia e ottiene
l'accesso all'angolo.</p>

<board data-type="show" data-label="diagonale-tagliata" data-file="diagonali-diagonale-tagliata.json"
       data-caption="Il nero taglia la diagonale controllata dal bianco."></board>

<p>Abbiamo già visto due eccezioni alla pericolosità delle caselle <b>X</b>:</p>
<ul>
    <li>possiamo usare una casella <b>X</b> per attaccare un bordo sbilanciato, come un cinque;</li>
    <li>possiamo usare una casella <b>X</b> e il controllo anche solo temporaneo della diagonale per una Stoner trap.</li>
</ul>

<p>Ma tornando al diagramma <span data-board-ref="dimattei-1"></span>, la situazione è ancora diversa. Siamo in una
fase avanzata della partita, e tutte le caselle sicure sono ormai occupate. Risulta difficile, pertanto, trovare il
modo di tagliare una diagonale. Quindi il bianco può giocare in <b>B7</b>, ottenere il controllo della diagonale nera,
e stare tranquillo che il nero non riuscirà a prendere l'angolo <b>A8</b>.</p>

<p>Anche perché, e lo vediamo nei diagrammi <span data-board-ref="dimattei-1-analisi-diagonale"></span>,
    <span data-board-ref="dimattei-1-analisi-orizzontale"></span> e
    <span data-board-ref="dimattei-1-analisi-verticale"></span>, tutte le pedine della
diagonale sono già incastrate, in qualunque direzione, tra le pedine del nero. Quindi il nero non ha nessuna possibilità
di voltare le pedine presenti sulla diagonale.</p>

<gather>
<board data-type="show" data-label="dimattei-1-analisi-diagonale" data-file="diagonali-dimattei-1-analisi-diagonale.json"
    data-caption="Tutte le pedine della diagonale sono già incastrate tra quelle avversarie."></board>
<board data-type="show" data-label="dimattei-1-analisi-orizzontale" data-file="diagonali-dimattei-1-analisi-orizzontale.json"
    data-caption="Tutte le pedine della diagonale sono già incastrate tra quelle avversarie."></board>
<board data-type="show" data-label="dimattei-1-analisi-verticale" data-file="diagonali-dimattei-1-analisi-verticale.json"
    data-caption="Tutte le pedine della diagonale sono già incastrate tra quelle avversarie."></board>
</gather>

<p>Dopo <b>B7</b> del bianco, il nero può muovere solo in <b>B2</b> che, a differenza della mossa dell'avversario,
non prende il controllo della diagonale. Il bianco quindi può prendere l'angolo <b>A1</b> e vincere facilmente la partita.
Guarda la sequenza nel diagramma <span data-board-ref="dimattei-1-continuazione"></span></p>.

<board data-type="show" data-label="dimattei-1-continuazione" data-file="diagonali-dimattei-1-continuazione.json"></board>

<h2>Allungare il controllo di una diagonale</h2>

<p>Il diagramma <span data-board-ref="dimattei-2"></span> è molto simile a quello dell'esempio precedente (anche questo
esempio è tratto dal corso di Alessandro Di Mattei).</p>

<board data-type="show" data-label="dimattei-2" data-file="diagonali-dimattei-2.json"></board>

<p>Il bianco ha la possibilità di controllare entrambi le diagonali, ma anche il nero ha la stessa possibilità.
Quindi se il bianco muove per controllare una diagonale, il nero risponde controllando l'altra. Quale è la sequenza
giusta per il bianco?</p>

<p>Nei diagrammi <span data-board-ref="dimattei-2-sequenza1"></span> e <span data-board-ref="dimattei-2-sequenza2"></span>
il bianco gioca in <b>B7</b> per controllare la diagonale nera. Il nero quindi risponde in <b>B2</b> per controllare
la diagonale bianca. Al bianco rimangono quindi due mosse: <b>G7</b> (diagramma <span data-board-ref="dimattei-2-sequenza1"></span>)
e <b>G8</b> (diagramma <span data-board-ref="dimattei-2-sequenza2">), entrambi perdenti.</p>

<gather>
    <board data-type="show" data-label="dimattei-2-sequenza1" data-file="diagonali-dimattei-2-sequenza1.json"></board>
    <board data-type="show" data-label="dimattei-2-sequenza2" data-file="diagonali-dimattei-2-sequenza2.json"></board>
</gather>

<p>Nel diagramma <span data-board-ref="dimattei-2-sequenza3"></span>, invece, il bianco muove in <b>G7</b> e controlla
la diagonale bianca. Il nero risponde in <b>G2</b> per controllare la diagonale nera, ma adesso il bianco ha la possibilità
di <b>allungare</b> il controllo della diagonale giocando in <b>B2</b>, e questo gli permetterà di vincere la partita.</p>

<board data-type="show" data-label="dimattei-2-sequenza3" data-file="diagonali-dimattei-2-sequenza3.json"></board>

<h2>Un modo diverso per prendere il controllo di una diagonale</h2>

<p>Anche nel diagramma <span data-board-ref="dimattei-3"></span> (altro esempio del corso di Alessandro Di Mattei)
tocca al bianco che, però, non ha la possibilità di prendere il controllo di una diagonale principale giocando in
una casella <b>X</b>. Però il bianco può prendere il controllo della diagonale nera con una mossa nera, e nel farlo
attacca il cinque sul bordo nord. Studia la sequenza proposta nel diagramma.</p>

<board data-type="show" data-label="dimattei-3" data-file="diagonali-dimattei-3.json"></board>

<h2>Preparare il controllo di una diagonale</h2>

<p>Se il controllo di una diagonale è così importante, è giusto approfittarne ogni volta che si presenta l'occasione.
Ma è strategicamente importante anche andare a <b>preparare il controllo</b> di una diagonale, e non aspettare di
ritrovarsela casualmente davanti.</p>

<p>Il diagramma <span data-board-ref="suekuni-1"></span> è il primo esempio portato da Makoto Suekuni
    alla master class che ha tenuto nel 2024 all'EGP di Roma (è disponibile una sintesi in italiano a cura di Paolo
    Scognamiglio<a href="https://www.youtube.com/watch?v=adk3sTpatQ8" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>).</p>

<board data-type="show" data-label="suekuni-1" data-file="diagonali-suekuni-1.json"></board>

<p>Il bianco si trova in una situazione a prima vista non positiva, a causa del muro verso sud. Tuttavia la sua mobilità
è ancora buona e può sfruttare bene l'area di gioco a ovest per ottenere dei vantaggi. Ma a quali vantaggi deve puntare?</p>

<p>Una possibilità è proprio quella di cercare di ottenere il controllo di una diagonale, in particolare una diagonale
che sia facilmente allungabile. Ora, controllare la diagonale nera risulta complesso, in particolare per la pedina
    <b>E4</b> che non sembra facilmente voltabile. Sembra invece più semplice prendere il controllo della diagonale
bianca.</p>

<p>Il bianco deve quindi voltare la pedina <b>C3</b> e la pedina <b>F6</b>, ma non può farlo con una singola mossa.
Non possiamo usare da subito le caselle <b>X</b>, quindi dobbiamo prima usare altre caselle.</p>

<p>Per voltare <b>F6</b> possiamo muovere in <b>F8</b>.</p>

<p>Per voltare <b>C3</b> possiamo muovere in <b>A3</b> o in <b>A5</b>. Se però il bianco muove in <b>A3</b>
il nero può rispondere in <b>A5</b> vanificando l'intenzione. Quindi l'opzione migliore è <b>A5</b>.</p>

<p>Quale delle due mosse è meglio fare per prima?</p>

<p>Il problema è che tutte e due le mosse offrono la possibilità al nero di prendere il controllo della diagonale
prima che il bianco riesca a concludere la manovra.</p>

<p>In particolare se il bianco gioca in <b>F8</b> il nero può rispondere in <b>G7</b> prendendo il controllo della
diagonale e attaccando il quattro più uno del bordo est. Nel diagramma <span data-board-ref="suekuni-1-F8"></span>
puoi vedere una possibile continuazione di questa situazione.</p>

<board data-type="show" data-label="suekuni-1-F8" data-file="diagonali-suekuni-1-F8.json"></board>

<p>Se invece il bianco gioca in <b>A5</b> il nero non ha nessun vantaggio a prendere il controllo della diagonale in
<b>B2</b> perché il bianco può tagliare la diagonale facilmente e il nero si ritrova a perdere sia il bordo nord sia
il bordo ovest. Nel diagramma <span data-board-ref="suekuni-1-A5"></span> puoi vedere una possibile continuazione
di questa situazione.</p>

<board data-type="show" data-label="suekuni-1-A5" data-file="diagonali-suekuni-1-A5.json"></board>

<h2>Tocca a te</h2>

<board data-type="quiz" data-label="quiz-1" data-file="diagonali-quiz-1.json"></board>
