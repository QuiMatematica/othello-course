<h1>Controllo dei controbordi</h1>

<p>Riprendo il concetto di controbordo, che ti ho già presentato parlando di
    <a href="../../intermedio/attacchi-ai-5/definizioni.php">attacchi ai cinque</a>.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>controbordo</b> le caselle adiacenti a un bordo, come evidenziato
            nel diagramma <span data-board-ref="controbordo"></span>.</p>
	</div>
</div>

<p>Ovviamente, visto che abbiamo quattro bordi, abbiamo quattro controbordi
    (diagramma <span data-board-ref="controbordo"></span>).</p>

<board data-type="show" data-label="controbordo" data-file="controbordo.json"
       data-caption="I controbordi."></board>

<p>Abbiamo già parlato di controbordi in relazioni agli attacchi ai cinque perché influenzano molto l'efficacia
degli attacchi.</p>
<ul>
    <li>Se il cinque è pieno (ovvero il controbordo è controllato dallo stesso colore del cinque) l'attacco dalla casella
        <b>X</b> è sempre efficace, purché si possa giocare nella casella <b>X</b>.Ne abbiamo parlato
    <a href="../../intermedio/attacchi-ai-5/cinque-attaccabili.php">qui</a>.</li>
    <li>Se il cinque non è pieno e il controbordo adiacente al cinque è controllato da uno dei due giocatori,
    l'attacco da casella <b>X</b> non è mai efficace. Ne abbiamo parlato
    <a href="../../intermedio/attacchi-ai-5/cinque-non-attaccabili.php">qui</a>.</li>
</ul>

<h2>Primo esempio</h2>

<p>La posizione del diagramma <span data-board-ref="suekuni-2"></span>
    ci dà un'idea del perché sia importante
controllare un controbordo in finale di partita.
    L'esempio tratto dalla master class di Makoto Suekuni.
    <a href="https://www.youtube.com/watch?v=adk3sTpatQ8" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>.
</p>

<p>Tocca al nero che si ritrova con due regioni pari. Inoltre dovrà rinunciare al lato ovest.
Ma c'è un modo per conservare abbastanza pedine da riuscire a vincere la partita?</p>

<p>Prima di analizzare la sequenza proposta, prova a determinare il finale perfetto.</p>

<board data-type="show" data-label="suekuni-2" data-file="controbordo-suekuni-2.json"></board>

<p>Ci basta cambiare colore a una pedina della posizione di partenza che il risultato è completamente diverso
(diagramma <span data-board-ref="suekuni-2-alt"></span>). Anche in questo caso prova a contare il finale prima
di vedere la sequenza proposta.</p>

<board data-type="show" data-label="suekuni-2-alt" data-file="controbordo-suekuni-2-alt.json"></board>

<h2>Secondo esempio</h2>

<p>La posizione del diagramma <span data-board-ref="suekuni-4-start"></span> è più complessa.
    Anche questo esempio è tratto dalla master class di Makoto Suekuni.
Quale mossa faresti se tu fosse il nero?</p>

<board data-type="show" data-label="suekuni-4-start" data-file="controbordo-suekuni-4-start.json"
       data-caption="Gli effetti del controllo del controbordo."></board>

<p>Un'idea potrebbe essere attaccare il quattro più uno a ovest. Hai provato a calcolare il finale
    perfetto dopo <b>B2</b>? Lo puoi vedere nel diagramma <span data-board-ref="suekuni-4-B2"></span>.</p>

<board data-type="show" data-label="suekuni-4-B2" data-file="controbordo-suekuni-4-B2.json"
       data-caption="Il finale perfetto dopo <b>B2</b>."></board>

<p>No, <b>B2</b> non è vincente. E se provassimo una manovra simile giocando in <b>B1</b>?
Prova a contare il finale e verificalo nel diagramma <span data-board-ref="suekuni-4-B1"></span></p>

<board data-type="show" data-label="suekuni-4-B1" data-file="controbordo-suekuni-4-B1.json"
       data-caption="Il finale perfetto dopo <b>B1</b>."></board>

<p>&Egrave; questo il finale perfetto?</p>

<p>Proviamo a valutare se il controllo di un controbordo può aiutare il nero a ottenere
    abbastanza pedine per vincere la partita.
Ovviamente non stiamo parlando di quello a nord, perché la casella <b>A2</b> è già occupata,
quindi il controllo del controbordo nord non è utile. Se invece il nero prendesse il controllo
    del controbordo ovest otterrebbe due effetti.</p>
<ul>
    <li>Primo: il bianco non ha la possibilità di giocare in <b>B2</b>;</li>
    <li>Secondo: se il nero fosse costretto a giocare in <b>B1</b> o <b>B2</b>, il bianco
        potrebbe giocare nella casella rimanente, ma non volta alcuna pedina nella direzione
        verticale.</li>
</ul>

<p>Ma come può il nero ottenere il controllo del controbordo ovest? Beh, non è poi così difficile:
può giocare in <b>B7</b>. Certamente il bianco risponderà in <b>A8</b>, sia per prendere l'angolo
sia per tagliare il controbordo; ma il nero può riconquistare il controbordo giocando in <b>A6</b>.
Ok, nel fare questa manovra il nero perde il bordo ovest, però ottiene il controbordo relativo.
&Egrave; sufficiente per vincere?</p>

<p>Non ci resta che contare. E nel farlo dovresti notare che è più facile contare questa sequenza
    perché è facile capire quali sono le mosse migliori dei due colori dopo <b>B7</b>.
    Una volta arrivato alla fine controlla il finale perfetto nel
diagramma <span data-board-ref="suekuni-4"></span>.</p>

<board data-type="show" data-label="suekuni-4" data-file="controbordo-suekuni-4.json"
       data-caption="Gli effetti del controllo del controbordo."></board>

<h2>Tocca a te</h2>

<board data-type="quiz" data-label="quiz-1" data-file="controbordo-quiz-1.json"
       data-caption="Il nero muove e vince."></board>
