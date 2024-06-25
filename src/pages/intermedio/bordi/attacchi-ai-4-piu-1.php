<h1>Gli attacchi ai quattro più uno</h1>

<p>Il "quattro più uno" è una formazione sbilanciata in cui si ha, su un bordo,
un quattro sbilanciato di un colore, una casella B vuota e la rimanente casella C occupata
dall'altro colore. Anche queste formazioni possono essere attaccate con una tecnica simile
a quella usata contro i
<a href="attacchi-ai-5.php">cinque</a>.
Bisogna giocare in una casella X (o in una casella C) in modo da offrire un angolo.
Se l'attaccato prendo l'angolo, l'attaccante si incunea nella casella B rimasta
libera e conquista l'angolo opposto in una mossa successiva.</p>

<p>Il quattro più uno è una formazione doppiamente sbilanciata, quindi l'attacco
può essere fatto sia da un colore da una parte sia dal colore opposto dall'altra. Questa infatti è
la situazione più comune: quando un giocatore attacca, l'avversario risponde con l'attacco
simmetrico.</p>

<p>Il diagramma 1 riporta sul bordo sud un quattro più uno. Il bianco muove per primo che
attacca giocando in B7, poi il nero risponde contrattaccando dall'altra parte in G7.
Se poi il bianco prende l'angolo H8 il nero può muovere dapprima incuneandosi in C8,
per poi prendere l'angolo A8. Similmente, a colori inverti, sarebbe successo se il nero
avesse per primo preso l'angolo A8: il bianco si sarebbe incuneato e avrebbe poi preso
l'angolo H8.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="attacchi-ai-4-piu-1-1.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 1: un doppio attacco al quattro più uno.
    </div>
</div>

<p>A prima vista può sembrare che l'attacco si risolva in un semplice scambio di angoli, ma
non è solo questo. Nel diagramma 1, per esempio, il bianco prende l'angolo per primo; il
nero ha poi la possibilità di guadagnare due tempi di gioco, il primo in C8, il secondo in
A8. Fin che il nero prende possesso del bordo, quindi, il bianco è costretto a muovere in
una diversa parte della scacchiera, rischiando di chiudersi il gioco.</p>

<p>Come per tutti gli attacchi, bisogna sempre controllare che tutto possa funzionare
perfettamente. In particolare chi attacca un quattro più uno deve sempre stare attento a
poter accedere alla casella centrale libera in cui incunearsi. Per esempio, nella
situazione del diagramma 2 se il bianco attacca giocando in B7 gira anche la pedina
C7, perdendo l'accesso alla casella B libera. Il nero può dunque prendere l'angolo,
sicuro che alla mossa successiva potrà giocare anche in C8.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="attacchi-ai-4-piu-1-2.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 2: un attacco al quattro più uno fallito.
    </div>
</div>

<p>Un secondo pericolo, anche se più raro, è che incuneandosi si vada a girare anche
la casella X da cui si stava attaccando, consentendo così all'avversario di prendere
entrambi gli angoli. Ne è mostrato un esempio nel diagramma 3.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="attacchi-ai-4-piu-1-3.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 3: un attacco al quattro più uno parzialmente fallito.
    </div>
</div>

<h2>Gli attacchi ai tre più due</h2>

<p>La formazione del <b>tre più due</b> è composta da un tre sbilanciato di un colore, una casella
A vuota e un due sbilanciato dell'altro colore. Anche questa formazione è attaccabile
similmente ai quattro più uno. Si veda il diagramma 4.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="attacchi-ai-4-piu-1-4.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 4: un attacco a un tre più due.
    </div>
</div>