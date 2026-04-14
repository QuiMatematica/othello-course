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

<p>La struttura per applicare questo <i>tesuji</i> appare molto presto nel gioco, a volte anche prima del centro
partita.</p>

<p>Nel diagramma <span data-board-ref="diagonale-1"></span> il nero ha sacrificato l'angolo in <b>H8</b>
    per guadagnare un tempo.</p>

<board data-type="show" data-label="diagonale-1" data-file="diagonale-1.json"></board>

<p>Un punto molto importante da tener presente è che lo <i>swindle</i> è stato possibile solo nel momento
    in cui il nero ha tagliato la diagonale. Ad esempio, se il nero avesse giocato <b>A4</b> allora
il bianco non avrebbe potuto rispondere in <b>G1</b> (diagramma <span data-board-ref="diagonale-2"></span>).</p>

<board data-type="show" data-label="diagonale-2" data-file="diagonale-2.json"></board>

<h2>Il <i>pattern</i></h2>

<p>Il <i>pattern</i> (diagramma <span data-board-ref="diagonale-3"></span>) che permette questo <i>tesuji</i>
    prevede la presenza di:</p>
<ul>
    <li>una regione di quattro caselle (riquadro rosso);</li>
    <li>la possibilità di prendere il controllo della diagonale (freccia gialla);</li>
    <li>la possibilità di muovere in una delle due caselle <b>C</b> della stessa regione (freccia viola).</li>
</ul>

<board data-type="show" data-label="diagonale-3" data-file="diagonale-3.json"></board>

<p>Attenzione però: le condizioni elencate sopra sono <b>necessarie</b> per giocare il <i>tesuji</i> ma
non sono <b>sufficienti</b>. Questo significa che anche se sono tutte rispettate è possibile che la posizione
abbia altre caratteristiche che non permettono di chiudere correttamente la manovra.</p>

<p>Per esempio il diagramma <span data-board-ref="diagonale-4"></span> mostra una posizione molto simile
a quella vista sopra. Ma se il bianco gioca in <b>G2</b> il nero ha la possibilità giocare per secondo nella
regione a nord-est.</p>

<board data-type="show" data-label="diagonale-4" data-file="diagonale-4.json"></board>

<p>Questo ci ricorda di verificare sempre che il <i>tesuji</i> sia giocabile con successo fino in fondo, e di non
accontentarsi del <i>pattern</i> che ci suggerisce di applicarlo.</p>
