<p>La manovra semi-Landau consiste nel sacrificare un angolo e un bordo facendo in modo di
giocare in due mosse successive nelle caselle X e C adiacenti allo stesso
angolo ceduto. Per fare questo è necessario che il controbordo del lato attaccato
    sia controllato dall'attaccante, mentre il controbordo del lato adiacente sia
    controllato dal colore attaccante.</p>

<h2>Primo esempio</h2>

<p>Il diagramma <span data-board-ref="semi-landau-1"></span>
    presenta la situazione dopo la 39-esima mossa della partita giocata tra
Suekuni (nero) e Brightwell (bianco) al Paris International 2000. &Egrave; di turno il bianco
che sfrutta la situazione per giocare una manovra semi-Landau.</p>

<board data-type="show" data-label="semi-landau-1" data-file="semi-landau-1.json"></board>

<p>Per comprendere meglio la manovra, nel diagramma
    <span data-board-ref="semi-landau-1-controbordi"></span>
    è riportata la posizione dopo l'attacco del bianco.</p>

<board data-type="show" data-label="semi-landau-1-controbordi" data-file="semi-landau-1-controbordi.json"></board>

<p>La manovra funziona perché:</p>

<ul>
    <li>la colonna <b>G</b> (controbordo del bordo attaccato) è controllata dal bianco (colore attaccante);</li>
    <li>la riga <b>2</b> (controbordo del bordo adiacente) è controllata dal nero (colore attaccato).</li>
</ul>

<p>Solo la combinazione di questi due fattori consente all'attaccante (il bianco) di giocare
la manovra.</p>

<h2>Contro altre formazioni di bordo</h2>

<p>La manovra è giocabile con diverse formazioni di bordo. Sopra abbiamo visto il caso
di un "tre sbilanciato più uno", qui sotto vediamo la manovra con un cinque
    (diagramma <span data-board-ref="semi-landau-2"></span>) e un quattro bilanciato
    (diagramma <span data-board-ref="semi-landau-3"></span>).</p>

<gather>
    <board data-type="show" data-label="semi-landau-2" data-file="semi-landau-2.json"></board>
    <board data-type="show" data-label="semi-landau-3" data-file="semi-landau-3.json"></board>
</gather>

<h2>Un'eccezione</h2>

<p>Analizzando più approfonditamente la manovra, si può notare che è possibile ammettere
un'eccezione alla prima condizione: ovvero che l'attaccante controlli il controbordo.
    Infatti può essere sufficiente che la
condizione si verifichi dopo la conquista della casella <b>X</b>.</p>

<p>Il diagramma <span data-board-ref="semi-landau-4"></span>
    presenta la stessa situazione del diagramma <span data-board-ref="semi-landau-1"></span>,
    in cui, però, è stata
    cambiata di colore la pedine <b>G3</b>. La manovra ha comunque effetto.</p>

<board data-type="show" data-label="semi-landau-4" data-file="semi-landau-4.json"></board>

<h2>Anche i campioni subiscono la manovra Landau</h2>

<p>Per mostrare ancora una volta l'importanza di una manovra di questo tipo, riportiamo il caso della
finale del Campionato Giapponese 2004. I giocatori sono Sakaguchi (nero) e Tamenori (bianco). I
diagrammi <span data-board-ref="semi-landau-5"></span> e <span data-board-ref="semi-landau-6"></span>
    riportano la posizione dopo la mossa 44. Il nero ha bisogno di almeno un tempo di
gioco e deve provare a conquistarlo giocando nello spazio dispari a nord-ovest.
    Il diagramma <span data-board-ref="semi-landau-5"></span>
    riporta la sequenza effettivamente giocata: il nero gioca in <b>B3</b>, ma non si accorge che sta per
andare in contro a una manovra semi-Landau che vanifica il suo tentativo.
    Il diagramma <span data-board-ref="semi-landau-6"></span> riporta
invece la sequenza corretta che porta a un pareggio.</p>

<gather>
    <board data-type="show" data-label="semi-landau-5" data-file="semi-landau-5.json"></board>
    <board data-type="show" data-label="semi-landau-6" data-file="semi-landau-6.json"></board>
</gather>