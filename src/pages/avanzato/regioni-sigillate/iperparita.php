<p>Confronta le situazioni dei diagrammi <span data-board-ref="iperparita1"></span> e <span data-board-ref="iperparita2"></span>.
    Fai attenzione: tra i due diagrammi cambia il colore della pedina <b>B2</b>.</p>

<gather>
    <board data-type="show" data-label="iperparita1" data-file="iperparita1.json"
       data-caption="Il nero muove... e perde."></board>
    <board data-type="show" data-label="iperparita2" data-file="iperparita2.json"
       data-caption="Il nero passa... e vince."></board>
</gather>

<p>Nel diagramma <span data-board-ref="iperparita2"></span> il nero non ha mosse legali nella regione rimasta.
    Ed è costretto a passare. In questo modo
guadagna la <b>parità globale</b>: il diritto di giocare l'ultima mossa.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Chiamiamo <b>iper parità</b> (<i>hyper parity</i> in inglese)
            una situazione in cui è presente una regione pari in cui uno dei due giocatori non ha mosse
            legali.</p>
	</div>
</div>

<p>In questa pagina ci concentriamo su regioni di iper parità <b>di due caselle</b>. Rimando la trattazione di quelle
di quattro (o più) caselle alla pagina successiva.</p>

<p>Entrambi i giocatori hanno interesse a formare una regione di iper parità: costringendo l'avversario a giocarci
    per primo si ha la sicurezza di ottenere la <b>parità locale</b>.</p>

<p>Tuttavia il bianco ha la parità globale, quindi tra i due giocatori ha meno interesse a formare regioni di
    iper parità.</p>

<p>Invece il nero, che gioca le mosse dispari, ha tutto l'interesse a
    formare una regione di iper parità. Sicuramente ottiene la parità locale. Inoltre, se il bianco non agisce prontamente,
    può ottenere anche la <b>parità globale</b>, come nell'esempio iniziale.</p>

<p>Ecco perché, in tutti gli esempi che seguono, vedremo protagonista il nero.</p>

<p>Dal canto suo il bianco dovrà cercare di non concedere regioni di iper parità al suo avversario. Stiamo quindi
considerando quegli elementi di gioco in cui i due giocatori devono agire diversamente.</p>

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

<h2>Come dovrebbe rispondere il bianco</h2>

<p>Normalmente il bianco ha interesse a giocare nelle regioni dispari, in modo da ottenere il massimo vantaggio
dalla parità locale e conservare così la parità globale.</p>

<p>Ma se il nero riesce a creare una regione di iper parità, il bianco è interessato a chiudere tale regione
il prima possibile. La parità locale è comunque persa, ma almeno il bianco mantiene la parità globale.
Confronta le sequenza dei diagrammi
<span data-board-ref="iperparita4wrong"></span> e <span data-board-ref="iperparita4"></span>.</p>

<gather>
    <board data-type="show" data-label="iperparita4wrong" data-file="iperparita4wrong.json"
       data-caption="Rispondere alll'iper parità."></board>
    <board data-type="show" data-label="iperparita4" data-file="iperparita4.json"
       data-caption="Rispondere alll'iper parità."></board>
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
