<p>Ted Landau è stato un campione americano negli anni 80.</p>

<p>La posizione del diagramma <span data-board-def="landau-1"></span> è tratta da un gioco via posta (quando
Internet ancora non esisteva) dove Landau giocava con il nero. Tu dove giocheresti?</p>

<p>Segui la sequenza proposta, passata alla storia come <i>manovra Landau</i>.</p>

<board data-type="show" data-label="landau-1" data-file="landau-1.json"></board>

<p>Una manovra così complessa ha bisogno, chiaramente di diversi elementi che concorrono alla sua riuscita.</p>

<p>L'elemento fondamentale, ed è quello che su poi si incentrano le manovre Landau, è il controllo del
controbordo. E tale controllo non deve essere improvvisato, ma va costruito tipicamente andando a cedere
il bordo relativo.</p>

<p>Quindi, tornando alla posizione di partenza (diagramma <span data-board-ref="landau-1-controbordo"></span>,
    il primo elemento da cogliere è come le mosse in <b>A5</b> e
in <b>A7</b> abbiamo sì concesso il bordo al giocatore attaccato (frecce gialle), ma abbiamo reso possibile il controllo del
controbordo (frecce rosse).</p>

<board data-type="show" data-label="landau-1-controbordo" data-file="landau-1-controbordo.json"></board>

<p>Il secondo elemento (diagramma <span data-board-ref="landau-1-accessi"></span>)
    è dato dalle condizioni adatta per giocare lo swindle vero e proprio una volta che il
bordo è stato ceduto e il controbordo conquistato. In particolare:</p>
<ul>
    <li>il colore attaccato non deve avere mosse a disposizioni nelle caselle rimaste liberi, e questo
    è garantito dal fatto che le pedine della colonna <b>3</b> adiacenti sono tutte del colore attaccato
    (rettangoli giallo);</li>
    <li>il colore attaccante deve aver la possibilità di giocare nelle caselle <b>X</b> senza concedere la
    replica all'avversario nelle caselle <b>C</b> adiacenti, e questo è garantito dal fatto che l'attaccato
    controlla i controbordi (rettangoli rossi).</li>
</ul>

<board data-type="show" data-label="landau-1-accessi" data-file="landau-1-accessi.json"></board>
