<p>Gli swindle visti nella pagina precedente possono essere estesi a situazioni in cui si ha una regione formata
da quattro caselle. Se un giocatore riesce a giocare tre delle quattro mosse a disposizione, e quindi lascia
all'avversario una sola mossa della regione, ottiene due tempi di gioco, che spesso sono sufficienti per
portare a casa la vittoria.</p>

<p>Tipicamente succede che:</p>
<ul>
    <li>il giocatore che esegue lo swindle gioca la prima mossa nella regione;</li>
    <li>l'avversario risponde nella stessa regione, ma tale mosse causa il formarsi di una regione di due caselle in cui
    il primo giocatore può eseguire lo swindle;</li>
    <li>il primo giocatore gioca nella regione ottenendo il primo tempo di gioco;</li>
    <li>l'avversario non può giocare nella regione ed è costretto a giocare altrove;</li>
    <li>il primo giocatore chiude la regione ottenendo il secondo tempo di gioco.</li>
</ul>

<h2>Primo esempio</h2>

<p>Il diagramma <span data-board-ref="tre-su-quattro-1-start"></span> riporta una posizione
    di una partita giocata
    su Kurnik da Claudio Signorini (nero) e Donato Barnaba (bianco).</p>

<board data-type="show" data-label="tre-su-quattro-1-start" data-file="tre-su-quattro-1-start.json"
       data-caption="Tre su quattro."></board>

<p>Il nero possiede un
<a href="../../intermedio/attacchi-ai-5/chapter.php">cinque</a>
sul bordo sud che è già attaccato e l'attacco è efficace: se il nero prende l'angolo <b>H8</b> il
    bianco può incunearsi in <b>G8</b>.
Inoltre la regione a sud-est è
pari, quindi, in condizioni normali, se il nero prende l'angolo il bianco dovrebbe
    giocare l'ultima mossa della regione.</p>

<p>Ma non è così. Dopo la sequenza <b>H8 - G8 - H7</b>, il bianco non ha accesso alla casella
    <b>H6</b>. Infatti giocando in <b>H7</b> il nero non gira la pedina <b>G6</b>
    e la diagonale <b>G5-F4</b>, che potrebbe
consentire al bianco la mossa, è controllata dal nero.</p>

<p>Vedi la sequenza nel diagramma <span data-board-ref="tre-su-quattro-1"></span>.</p>

<board data-type="show" data-label="tre-su-quattro-1" data-file="tre-su-quattro-1.json"
       data-caption="Tre su quattro."></board>

<h2>Secondo esempio</h2>

<p>La posizione del diagramma <span data-board-ref="tre-su-quattro-2"></span> è tratta dalla partita
tra Donato Barnaba (questa volta con il nero) e Claudio Signorini (bianco) giocata durante il Campionato Italiano 2004.
A nord est è presente una regione pari che il nero
può utilizzare per giocare tre mosse su quattro. Cerca la sequenza in autonomia e poi vedi cosa ha giocato Barnaba.</p>

<board data-type="show" data-label="tre-su-quattro-2" data-file="tre-su-quattro-2.json"></board>

<h2>Conclusione</h2>

<div class="card border-primary mb-3">
	<div class="card-header">Strategia</div>
	<div class="card-body">
        <p class="card-text">Se è presente una regione formata da quattro caselle:</p>
        <ul class="card-text">
            <li>prova a cercare la sequenza che ti permetta di giocare tre delle quattro mosse disponibili;</li>
            <li>stai attento che il tuo avversario non possa giocare tre delle quattro mosse disponibili.</li>
        </ul>
	</div>
</div>
