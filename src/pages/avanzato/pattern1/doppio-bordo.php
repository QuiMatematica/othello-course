<div class="d-flex align-items-center text-muted small mt-3">
  <span>
    da <strong class="text-dark">Brian Rose, Othello: A Minute to Learn... A Lifetime to Master</strong>
    &nbsp;
      <a href="https://www.fngo.it/allegati/brianrose_book(eng).pdf" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-box-arrow-right"></i>
    </a>
  </span>
</div>
<div class="d-flex align-items-center text-muted small">
    <span>
        traduzione di <strong class="text-dark">Alessandro Di Mattei</strong>
    </span>
</div>
<div class="d-flex align-items-center text-muted small mb-3">
    <span>
        adattato da <strong class="text-dark">Claudio Signorini</strong>
    </span>
</div>

<p>Nel diagramma <span data-board-ref="doppio-bordo-1"></span> il bianco ha due bordi sbilanciati, entrambi
rispetto all'angolo in <b>A8</b>.</p>

<board data-type="show" data-label="doppio-bordo-1" data-file="doppio-bordo-1.json"></board>

<p>Questa posizione è letale per il bianco poiché il nero non solo può guadagnare un angolo,
    ma può anche scegliere quale. Il nero ha due possibilità per attaccare: <b>B8</b> o <b>A7</b>.
In entrambi i casi, una volta che il bianco avrà giocato in <b>A8</b>, il nero potrà incunearsi e prendere un angolo
al turno seguente. Le due sequenze sono riportate rispettivamente nei diagrammi
<span data-board-ref="doppio-bordo-2"></span> e <span data-board-ref="doppio-bordo-3"></span>.</p>

<gather>
    <board data-type="show" data-label="doppio-bordo-2" data-file="doppio-bordo-2.json"></board>
    <board data-type="show" data-label="doppio-bordo-3" data-file="doppio-bordo-3.json"></board>
</gather>

<p>La domanda è: quale di queste due sequenze è migliore per il nero?</p>

<p>La questione è capire se per il nero è più importante <b>A1</b> (diagramma <span data-board-ref="doppio-bordo-2"></span>)
o <b>H8</b> (diagramma <span data-board-ref="doppio-bordo-3"></span>).
Anche se <b>H8</b> è sicuramente utile, <b>A1</b> vale molto di più. Non solo perché il nero può raggiungere
immediatamente un altro angolo, ossia <b>H1</b>, ma anche perché gli fa guadagnare una mossa libera in <b>B2</b>.</p>

<p>Quello che va tenuto in mente è che se il nero volesse conquistare <b>A1</b>, dovrebbe cominciare ad attaccare
l'altro angolo, <b>H8</b>, per primo.</p>

<p>Tieni presente che il bianco potrebbe rifiutarsi di prendere l'angolo <b>A8</b> e giocare in un qualsiasi
    altro punto della colonna <b>G</b>. In questo caso il nero ha due possibilità:</p>
<ul>
    <li>può sempre prendere l'angolo <b>H8</b> e giocare al turno successivo in <b>B7</b>,
        sacrificando di nuovo l'angolo <b>A8</b>;</li>
    <li>oppure può giocare direttamente in <b>B7</b>, raddoppiando l'attacco all'angolo <b>A8</b> e ottenendo la parità
    in quella regione.</li>
</ul>

<h2>Il <i>pattern</i></h2>

<p>Il <i>pattern</i> (diagramma <span data-board-ref="doppio-bordo-4"></span>) che permette questo <i>tesuji</i> prevede
    la presenza di due &quot;cinque&quot; sui quali giocare la minaccia (riquadri rossi).</p>

<board data-type="show" data-label="doppio-bordo-4" data-file="doppio-bordo-4.json"></board>
