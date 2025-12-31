<p>Confronta le situazioni dei diagrammi <span data-board-ref="iperparita1"></span> e <span data-board-ref="iperparita2"></span>.
    Tra i due diagrammi cambia solo il colore della pedina <b>B2</b>.</p>

<gather>
    <board data-type="show" data-label="iperparita1" data-file="iperparita1.json"
       data-caption="Il nero muove... e perde."></board>
    <board data-type="show" data-label="iperparita2" data-file="iperparita2.json"
       data-caption="Il nero passa... e vince."></board>
</gather>

<p>Nel diagramma <span data-board-ref="iperparita2"></span> il nero non ha mosse legali nella regione rimasta.
    Ed è costretto a passare. In questo modo
guadagna la <b>parità</b>: il diritto di giocare l'ultima mossa della regione.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Chiamiamo <b>iper parità</b> (<i>hyper parity</i> in inglese)
            una situazione in cui è presente una regione pari in cui uno dei due giocatori non ha mosse
            legali.</p>
	</div>
</div>

<p>In questa pagina ci concentriamo su regioni di iper parità <b>di due caselle</b>. Rimando l'analisi di quelle
formate da quattro o più caselle alla pagina successiva.</p>

<p>&Egrave; vantaggioso formare una regione di iper parità in cui non si hanno mosse
a disposizione perché si costringe l'avversario a giocarci per primo e si spera, così,
di ottenere la <b>parità locale</b>: l'ultima mossa della regione.</p>

<p>Ma attenzione: la parità locale non è una certezza. &Egrave; possibile
che l'avversario riesca a giocare entrambe le mosse disponibili. In questo caso si parla di
    <b>swindle</b> (che possiamo tradurre in italiano con <i>trappola</i>),
che sarà il tema del prossimo capitolo.</p>

<h2>Ottenere l'iper parità: primo esempio</h2>

<board data-type="show" data-label="iperparita3" data-file="iperparita3.json"
       data-caption="Ottenere l'iper parità."></board>

<h2>Ottenere l'iper parità: secondo esempio</h2>

<p>Il diagramma <span data-board-ref="iperparita-suekuni10"></span> è tratto
dalla master class di Makoto Suekuni
<a href="https://www.youtube.com/watch?v=adk3sTpatQ8" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>.</p>

<board data-type="show" data-label="iperparita-suekuni10" data-file="iperparita-suekuni10.json"
       data-caption="Ottenere l'iper parità dove non c'è."></board>

<h2>Attenzione all'autogol</h2>

<p>Il nero ha certamente interesse a formare una regione di iper parità. E il bianco, dal canto suo, deve stare attento
a non formarne. L'autogol è sempre dietro l'angolo.</p>

<p>La posizione dei diagrammi <span data-board-ref="iperparita-suekuni9"></span> e <span data-board-ref="iperparita-suekuni9b"></span>
è ispirata a uno degli esempi della già citata master class di Makoto Suekuni
<a href="https://www.youtube.com/watch?v=adk3sTpatQ8" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>.</p>

<gather>
    <board data-type="show" data-label="iperparita-suekuni9" data-file="iperparita-suekuni9.json"
       data-caption="Il bianco sbaglia e perde la parità."></board>
    <board data-type="show" data-label="iperparita-suekuni9b" data-file="iperparita-suekuni9b.json"
       data-caption="Il bianco mantiene la parità."></board>
</gather>

<h2>Come rispondere all'iper parità</h2>

<p>Normalmente i giocatori hanno interesse a muovere nelle regioni dispari, in modo da ottenere il massimo vantaggio
dalla parità locale.</p>

<p>Ma se uno dei due riesce a creare una regione di iper parità in cui non può giocare, l'avversario ha due possibilità.</p>

<ul>
    <li>Può cercare di ottenere uno <i>swindle</i> in cui riesce a giocare entrambe le mosse
    disponibili. Ma di questo parleremo nel prossimo capitolo.</li>
    <li>Se non ha la possibilità di ottenere uno <i>swindle</i>, deve agire in base ai vantaggi che
    può ottenere muovendo in una delle due caselle.</li>
</ul>

<p>Osserva, per esempio, la posizione del diagramma <span data-board-ref="iperparita4start"></span>.</p>

<board data-type="show" data-label="iperparita4start" data-file="iperparita4start.json"
   data-caption="Rispondere all'iper parità."></board>

<p>Tocca al bianco che certamente non giocherà a sud-est.</p>

<p>Può giocare a sud-ovest, puntando a conquistare il bordo ovest. Però dopo la mossa del bianco
    in <b>B7</b> il nero risponde in <b>A8</b> salvando così il bordo sud. Inoltre quando il bianco
arriverà il <b>A1</b> il nero risponderà in <b>B1</b> salvando anche il bordo nord. Vedi la sequenza
nel diagramma <span data-board-ref="iperparita4wrong"></span>.</p>

<p>Ma il bianco può giocare anche in <b>A1</b>. Sicuramente prenderà il bordo ovest
    e minaccia
di prendere anche il bordo nord. La risposta corretta del nero è in <b>B7</b>, formando una nuova
regione di iper parità. Vedi la sequenza perfetta nel diagramma
    <span data-board-ref="iperparita4"></span>.</p>

<gather>
    <board data-type="show" data-label="iperparita4wrong" data-file="iperparita4wrong.json"></board>
    <board data-type="show" data-label="iperparita4" data-file="iperparita4.json"></board>
</gather>

<h2>Tocca a te</h2>

<p>Partiamo da un quiz semplice: diagramma <span data-board-ref="iperparita-es1"></span>.
Il nero ha due mosse: quale gli permette di vincere?</p>

<board data-type="quiz" data-label="iperparita-es1" data-file="iperparita-es1.json"
       data-caption="Il bianco muove e vince."></board>

<p>La posizione del diagramma <span data-board-ref="iperparita-es2"></span> è tratta da una partita giocata su
    eOthello tra MK1973 (nero) e ClaudioPadova (bianco).</p>

<board data-type="quiz" data-label="iperparita-es2" data-file="iperparita-es2.json"
       data-caption="Il bianco muove e vince."></board>
