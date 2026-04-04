<p>Questo <i>tesuji</i> è conosciuto come <b>strisciare lungo i bordi</b>, in inglese
<i>crawling on the edges</i>.</p>

<p>L'esempio è tratto dalla master class di Makoto Suekuni
    <a href="https://www.youtube.com/watch?v=adk3sTpatQ8" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>.
</p>

<p>Nel diagramma <span data-board-ref="crawling"></span> il bianco ha preso tre bordi su quattro. Tocca al nero
che deve cercare la strategia corretta per massimizzare il guadagno.</p>

<p>Il nero non può giocare il <a href="vittoria-senza-angoli.php"><i>tesuji</i> precedente</a> perché il bianco non
ha il controllo di due controbordi adiacenti. Ma il nero può comunque sfruttare l'unico controbordo controllato
dall'avversario: quello a sud.</p>

<board data-type="show" data-label="crawling" data-file="crawling.json"></board>

<h2>Il <i>pattern</i></h2>

<p>Anche in questo caso sono necessarie diverse condizioni per rendere possibile un <i>tesuji</i> così complesso.</p>

<p>Il <i>pattern</i> (diagramma <span data-board-ref="crawling-3"></span>) che permette questo <i>tesuji</i>
    prevede la presenza di:</p>
<ul>
    <li>due regioni di quattro caselle in cui il bianco non ha accesso (riquadri rossi);</li>
    <li>un bordo pieno, ovvero con il controllo del controbordo da parte del colore attaccato (riquadro blu);</li>
    <li>la possibilità di muovere in entrambi le caselle <b>X</b> (freccie gialle);</li>
    <li>la possibilità di muovere nelle due caselle <b>C</b> della regione in alto (frecce viola).</li>
</ul>

<board data-type="show" data-label="crawling-3" data-file="crawling-3.json"></board>

<p>&Egrave; importante sottolineare, in particolare, come sia necessario poter giocare tutte e tre le mosse nella regione
superiore. Il diagramma <span data-board-ref="crawling2"></span>, per esempio, mostra cosa accade se la pedina
    <b>C3</b> è nera.</p>

<board data-type="show" data-label="crawling2" data-file="crawling2.json"></board>
