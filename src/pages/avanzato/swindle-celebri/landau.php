<h2>La prima storica manovra Landau</h2>

<p>Ted Landau è stato un campione americano negli anni '80.</p>

<p>La posizione del diagramma <span data-board-def="landau-1"></span> è tratta da una partita per corrispondenza (quando
Internet ancora non esisteva) nella quale Landau giocava con il nero. Dove sceglieresti di giocare?</p>

<p>Segui la sequenza proposta, che è passata alla storia come <b>manovra Landau</b>.</p>

<board data-type="show" data-label="landau-1" data-file="landau-1.json"></board>

<p>Una manovra così complessa necessita, chiaramente, di diversi elementi che concorrono alla sua riuscita.</p>

<p>L'elemento fondamentale è il controllo del
controbordo. Questo controllo si ottiene cedendo un bordo e uno o due angoli all'avversario. &Egrave; questa
    la caratteristica delle manovre Landau.</p>

<p>Quindi, tornando alla posizione di partenza (diagramma <span data-board-ref="landau-1-controbordo"></span>),
    il primo elemento da cogliere è come le mosse in <b>A5</b> e
in <b>A7</b> abbiano sì concesso il bordo al giocatore attaccato (frecce gialle), ma abbiano reso possibile il controllo del
controbordo (frecce rosse).</p>

<board data-type="show" data-label="landau-1-controbordo" data-file="landau-1-controbordo.json"></board>

<p>Il secondo elemento (diagramma <span data-board-ref="landau-1-accessi"></span>)
    è dato dalle condizioni adatte per giocare lo swindle vero e proprio una volta che il
bordo è stato ceduto e il controbordo conquistato. In particolare:</p>
<ul>
    <li>il colore attaccato non deve avere mosse a disposizione nelle caselle rimaste libere, e questo
    è garantito dal fatto che le pedine della colonna <b>C</b> adiacenti sono tutte del colore dell'attaccato
    (bordi gialli);</li>
    <li>il colore attaccante deve aver la possibilità di giocare nelle caselle <b>X</b> senza concedere la
    replica all'avversario nelle caselle <b>C</b> adiacenti, e questo è garantito dal fatto che l'attaccato
    controlla i controbordi (bordi rossi).</li>
</ul>

<board data-type="show" data-label="landau-1-accessi" data-file="landau-1-accessi.json"></board>

<p>Ma c'è un altro elemento che vale la pena sottolineare. Il bordo che il nero ha ceduto al bianco risulta
essere completamente passivo. Infatti quelle otto pedine (che, essendo stabili, il bianco terrà fino
alla fine della partita) non offrono alcuna mossa e, considerata la conformazione degli altri bordi e i
tempi di gioco che perderà, il bianco non avrà la possibilità di ottenere nuove pedine centrali. C'è il forte rischio
    che alla fine della partita avrà solo quelle otto pedine.</p>

<h2>Manovre Landau con altre formazioni di bordo</h2>

<p>Abbiamo visto una manovra Landau partendo da un tre più uno su un bordo. La stessa manovra è attuabile anche
con altre formazioni.</p>

<p>Una situazione, più frequente di quanto si possa immaginare, è quella data dal diagramma
<span data-board-ref="landau-4"></span>.</p>

<board data-type="show" data-label="landau-4" data-file="landau-4.json"></board>

<h2>Tocca a te</h2>

<board data-type="quiz" data-label="landau-quiz" data-file="landau-quiz.json"></board>
