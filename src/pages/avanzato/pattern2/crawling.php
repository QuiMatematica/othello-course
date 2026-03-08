<p>Questo pattern è conosciuto come <b>strisciare lungo i bordi</b>, in inglese
<i>crawling on the edges</i>.</p>

<p>   L'esempio è tratto dalla master class di Makoto Suekuni
    <a href="https://www.youtube.com/watch?v=adk3sTpatQ8" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>.
</p>

<p>Nel diagramma <span data-board-ref="crawling"></span> il bianco ha preso tre bordi su quattro. Tocca al nero
che deve cercare la strategia corretta per massimizzare il guadagno.</p>

<p>Il nero non può giocare il <a href="vittoria-senza-angoli.php">pattern precedente</a> perché il bianco non
ha il controllo di due controbordi adiacenti. Ma il nero può comunque sfruttare l'unico controbordo controllato
dall'avversario: quello a sud.</p>

<board data-type="show" data-label="crawling" data-file="crawling.json"></board>

<board data-type="show" data-label="crawling2" data-file="crawling2.json"></board>
