<p>Confronta le situazioni dei diagrammi <span data-board-ref="iperparita1"></span> e <span data-board-ref="iperparita2"></span>.
    Fai attenzione: tra i due diagrammi cambia solo il colore di una pedina: quella in <b>B2</b>.</p>

<gather>
    <board data-type="show" data-label="iperparita1" data-file="iperparita1.json"
       data-caption="Il nero muove... e perde."></board>
    <board data-type="show" data-label="iperparita2" data-file="iperparita2.json"
       data-caption="Il nero passa... e vince."></board>
</gather>

<p>Cambiando il colore della pedina <b>B2</b>, solo il bianco può giocare nella regione chiusa rimasta. E, dal
momento che sono rimaste libere solo quelle due caselle, il nero è costretto a passare. Ma in questo modo
guadagna la parità globale: il diritto di giocare l'ultima mossa che, in questo caso, gli permette di assicurarsi
la vittoria.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Chiamiamo <b>iper parità</b> (<i>hyper parity</i> in inglese)
            una situazione in cui è presente una regione chiusa di due caselle in cui solo un colore può giocare
            per primo.</p>
	</div>
</div>

<p>Un giocatore ha interesse a formare una regione di iper parità in cui solo l'avversario può giocare primo, in
modo da ottenere la parità locale.</p>

<p>Ma visto che il bianco ha la parità globale, di solito non è interessato a formare regioni in cui solo il nero
può giocare.</p>

<p>Invece il nero ha tutto l'interesse a formare regioni di iper parità, perché, oltre alla parità locale, possono
    garantirgli anche la parità globale.</p>

<h2>Ottenere l'iper parità dove non c'è</h2>

<p>Se in una regione pari non c'è iper parità, non è detto che non sia possibile ottenerla in un secondo momento.</p>

<p>L'esempio del diagramma <span data-board-ref="iperparita-suekuni10"></span> è tratto
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