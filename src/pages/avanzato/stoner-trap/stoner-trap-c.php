<h1>Le Stoner trap di tipo C</h1>

<p>Rivediamo, nel diagramma <span data-board-ref="chapter-1"></span>, l'esempio base già presentato nella pagina precedente.</p>

<board data-type="show" data-label="chapter-1" data-file="chapter-1.json" data-caption="Il bianco gioca una Stoner trap."></board>

<h2>Condizioni per la riuscita dell'attacco</h2>

<p>Affinché una Stoner trap di questo tipo abbia successo sono necessarie diverse condizioni.</p>

<p>Innanzitutto deve esserci una formazione di bordo sbilanciata da attaccare. Nell'esempio è un quattro (diagramma
    <span data-board-ref="c-2"></span>), ma nel
seguito vedremo che è possibile attaccare anche altre formazioni.</p>

<board data-type="show" data-label="c-2" data-file="stoner-trap-c-2.json" data-caption="Una formazioni di bordo sbilanciata da attaccare."></board>

<p>L'attaccante (il bianco) deve poter giocare nella casella <b>X</b> opposta allo sbilanciamento (<b>B7</b>)
prendendo il controllo di tutta la diagonale. Dopo tale mossa l'attaccato (il nero) non deve avere accesso
    all'angolo (diagramma <span data-board-ref="c-3"></span>).</p>

<board data-type="show" data-label="c-3" data-file="stoner-trap-c-3.json" data-caption="Il bianco deve poter giocare nella casella X controllando la diagonale."></board>

<p>Dopo la risposta dell'attaccato, l'attaccante (il bianco) deve poter giocare nella casella adiacente alla formazione sbilanciata
    (<b>C8</b>) minacciando l'angolo opposto (<b>H8</b>, diagramma <span data-board-ref="c-4"></span>).</p>

<board data-type="show" data-label="c-4" data-file="stoner-trap-c-4.json"
       data-caption="Il bianco deve poter giocare nella casella adiacente alla formazione sbilanciata."></board>

<p>Completato l'attacco, se l'attaccato (il nero) gioca nella casella <b>C</b> rimasta libera (<b>B8</b>),
    deve essere costretto a girare anche la casella <b>X</b> (<b>B7</b>) in modo che l'attaccante possa accedere
all'angolo. Per ottenere questo è necessario che sul controbordo adiacente (la colonna <b>B</b>) rimanga
    almeno una pedina dell'attaccato (diagramma <span data-board-ref="c-5"></span>).</p>

<board data-type="show" data-label="c-5" data-file="stoner-trap-c-5.json"
       data-caption="Se il nero gioca in <b>B8</b> deve girare anche <b>B7</b>."></board>

<p>Ho denominato <b>di tipo C</b> le Stoner trap di questa pagina perché il giocatore attaccato
    dovrebbe giocare in una casella <b>C</b> (<b>B8</b>) per impedire l'accesso all'angolo minacciato.</p>

<h2>Quando l'attacco non funziona</h2>

<p>Quando l'attaccante gioca nella casella <b>X</b> deve prendere il controllo della diagonale.
    Se così non fosse, l'attaccato potrebbe conquistare l'angolo. Sul bordo rimangono due caselle vuote e,
    per parità, il bordo è salvo. Vedi il diagramma <span data-board-ref="c-6"></span>.</p>

<board data-type="show" data-label="c-6" data-file="stoner-trap-c-6.json"
       data-caption="L'attaccante non controlla la diagonale."></board>

<p>Dopo la risposta dell'attaccato, l'attaccante deve poter chiudere la trappola giocando nella casella adiacente
    alla formazione sbilanciata. In particolare l'attaccante deve stare attento che l'avversario, tagliando la diagonale,
    non riesca a impedirgli la mossa richiesta. Vedi il diagramma <span data-board-ref="c-7"></span>.</p>

<board data-type="show" data-label="c-7" data-file="stoner-trap-c-7.json"
       data-caption="L'attaccante non accede alla casella adiacente alla formazione di bordo."></board>

<p>Infine, la mossa nella casella <b>C</b> dell'attaccato deve girare la pedina nella casella <b>X</b>.
    E perché questo accada è necessario che almeno una pedina del controbordo adiacente sia dell'attaccato.
    Se così non fosse, l'attaccato riuscirebbe a muovere prima nella casella <b>C</b> (senza girare la pedina nella
    casella <b>X</b>) e poi nell'angolo. Vedi il diagramma <span data-board-ref="c-8"></span>.</p>

<board data-type="show" data-label="c-8" data-file="stoner-trap-c-8.json"
       data-caption="L'attaccato riesce a giocare nella casella C senza girare la pedina nella casella <b>X</b>."></board>

<p>Va considerata una quarta condizione che, tuttavia, non è fondamentale.
    Se la manovra avviene in una regione pari (come in tutti i diagrammi di questa pagina a parte il <span data-board-ref="c-10b"></span>),
l'attacco è più efficace se, dopo che l'attaccato ha preso l'angolo,
l'attaccante può giocare nella casella <b>C</b> rimasta libera. Così facendo si incunea, chiude una regione e conquista
    un tempo di gioco. Nella situazione del diagramma <span data-board-ref="c-9"></span>, per esempio, il bianco non
riesce a incunearsi e deve quindi prendere subito l'angolo opposto. La casella rimasta libera rimane a disposizione
dell'attaccato che guadagna un tempo di gioco.</p>

<board data-type="show" data-label="c-9" data-file="stoner-trap-c-9.json"
       data-caption="L'attaccante non ha la possibilità di incunearsi."></board>

<p>Se invece l'attacco inizia da una regione dispari, l'attaccante non ha vantaggio a giocare nella casella <b>C</b>
    perché così rimane una regione dispari in cui non è vantaggioso giocare. Vedi il diagramma <span data-board-ref="c-10b"></span>.</p>

<board data-type="show" data-label="c-10b" data-file="stoner-trap-c-10b.json"
       data-caption="L'attaccante non ha vantaggio a incunearsi."></board>

<h2>Altre formazioni sbilanciate attaccabili</h2>

<p>Il quattro sbilanciato è solo una delle formazioni di bordo attaccabili con una Stoner trap di tipo C.</p>

<gather>
    <board data-type="show" data-label="c-10" data-file="stoner-trap-c-10.json"></board>
    <board data-type="show" data-label="c-11" data-file="stoner-trap-c-11.json"></board>
    <board data-type="show" data-label="c-12" data-file="stoner-trap-c-12.json"></board>
</gather>

<h2>Tocca a te</h2>

<p>Nel diagramma <span data-board-ref="c-13"></span> giochi con il bianco e devi attaccare il quattro sbilanciato
    sul bordo ovest.</p>

<board data-type="quiz" data-label="c-13" data-file="stoner-trap-c-13.json"></board>

<p>Anche nel diagramma <span data-board-ref="c-14"></span> giochi con il bianco, ma devi anche decidere
quale bordo sbilanciato attaccare.</p>

<board data-type="quiz" data-label="c-14" data-file="stoner-trap-c-14.json"></board>

<p>Nei diagrammi successivi devi verificare che la Stoner trap è giocabile. Se lo è, giocala. Se non lo è,
gioca la mossa che ti viene indicata nel diagramma.</p>

<gather>
    <board data-type="quiz" data-label="n1" data-file="brusca-p150-n1.json"></board>
    <board data-type="quiz" data-label="n4" data-file="brusca-p150-n4.json"></board>
    <board data-type="quiz" data-label="n3" data-file="brusca-p150-n3.json"></board>
</gather>
