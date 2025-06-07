<h1>Le Stoner trap di tipo A</h1>

<p>Le Stoner trap che chiamo <i>di tipo A</i> sono quelle che, alla fine
dell'attacco, vedono quattro pedine sul bordo attaccato. Il colore che deve
difendersi potrebbe conquistare tutto il lato giocando in una casella <b>A</b>, ma,
    se l'attacco è condotto bene, questa mossa gira la casella <b>X</b> adiacente,
consentendo all'attaccante di conquistare l'angolo.</p>

<p>Nel diagramma <span data-board-ref="a-1"></span> vediamo il caso più semplice e più comune di questo tipo di attacco.</p>

<board data-type="show" data-label="a-1" data-file="stoner-trap-a-1.json"></board>

<h2>Condizioni per la riuscita dell'attacco</h2>

<p>Deve esserci una formazione di bordo sbilanciata da attaccare. Nell'esempio è un tre (diagramma <span data-board-ref="a-2"></span>), ma vedremo che è
possibile attaccare altre formazioni.</p>

<board data-type="show" data-label="a-2" data-file="stoner-trap-a-2.json"></board>

<p>L'attaccante (il bianco) deve poter giocare nella casella <b>X</b> opposta allo schieramento (<b>B7</b>)
    e deve prendere il controllo di tutta la diagonale (diagramma <span data-board-ref="a-3"></span>).</p>

<board data-type="show" data-label="a-3" data-file="stoner-trap-a-3.json"></board>

<p>Dopo la risposta dell'attaccato, l'attaccante (il bianco) deve poter giocare nella casella adiacente alla
formazione sbilanciata (<b>D8</b>, diagramma <span data-board-ref="a-4"></span>).</p>

<board data-type="show" data-label="a-4" data-file="stoner-trap-a-4.json"></board>

<p>Completato l'attacco, se l'attaccato (il nero) gioca nella casella <b>A</b> rimasta libera (<b>C8</b>),
deve girare anche la casella <b>X</b> (<b>B7</b>) in modo che l'attaccante possa accedere all'angolo.
Affinché accada questo è necessario che la pedina nella casella <b>A</b> sul bordo adiacente (<b>A6</b>) deve essere
dell'attaccato (diagramma <span data-board-ref="a-5"></span>).</p>

<board data-type="show" data-label="a-5" data-file="stoner-trap-a-5.json"></board>

<h2>Se non ci sono tutte le condizioni</h2>

<p>Questo tipo di Stoner trap sono molto più facili da giocare perché non hanno
alcuna condizione necessaria alla riuscita. Se tali condizioni vengono a mancare
non si può più parlare propriamente di una Stoner trap, ma l'attacco ha comunque
effetto. Per contro, le formazioni di bordo attaccabili con queste trappole
sono molto più rare.</p>

<p>Vediamo comunque ciascuna delle condizioni viste per quelle
<a href="stoner-trap-c.php">di tipo C</a> e cerchiamo di capire
perché non sono necessarie. </p>

<p>Giocando nella casella <b>X</b> non è necessario ottenere il controllo della diagonale.
    Infatti anche se l'attaccato conquista l'angolo, sul bordo rimangono tre caselle
vuote e l'attaccante può incunearsi (diagramma <span data-board-ref="a-6"></span>).</p>

<board data-type="show" data-label="a-6" data-file="stoner-trap-a-6.json"></board>

<p>Non è necessario che l'attaccante possa chiudere la trappola giocando sul bordo
accanto alla formazione sbilanciata avversaria. Infatti anche se non ci riesce
e l'attaccato prende l'angolo, rimane uno spazio dispari che permette l'incuneamento
    (diagramma <span data-board-ref="a-7"></span>).

<board data-type="show" data-label="a-7" data-file="stoner-trap-a-7.json"></board>

<p>Non è nemmeno necessario che l'eventuale mossa dell'attaccato nella casella <b>A</b>
    giri la pedina nella casella <b>X</b>. In questo caso l'attacco diventa un normale
attacco a un cinque e come tale va gestito (diagramma <span data-board-ref="a-8"></span>).</p>

<board data-type="show" data-label="a-8" data-file="stoner-trap-a-8.json"></board>

<h2>Altre formazioni sbilanciate attaccabili</h2>

<p>Il tre sbilanciato è solo una delle formazioni di bordo attaccabili con una Stoner trap di tipo A.</p>

<gather>
    <board data-type="show" data-label="a-9" data-file="stoner-trap-a-9.json"></board>
    <board data-type="show" data-label="a-10" data-file="stoner-trap-a-10.json"></board>
</gather>

<h2>Tocca a te</h2>

<p>Nei diagrammi successivi devi verificare che la Stoner trap è giocabile. Se lo è, giocala. Se non lo è,
gioca la mossa che ti viene indicata nel diagramma.</p>

<gather>
    <board data-type="quiz" data-label="n5" data-file="brusca-p150-n5.json"></board>
    <board data-type="quiz" data-label="n6" data-file="brusca-p150-n6.json"></board>
    <board data-type="quiz" data-label="n8" data-file="brusca-p150-n8.json"></board>
</gather>