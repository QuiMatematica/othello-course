    <h1>Gli attacchi ai cinque: riassunto</h1>

    <p>Ti ricordo che stiamo parlando di cinque formati da pedine bianche, disposti sul lato sud
    tra le caselle B8 ed F8: vedi il diagramma 1. Inoltre le caselle F7 e G6 sono occupate da una pedina.
    L'analisi si basa sul colore del controbordo (riga 7 - in rosso) e del controbordo adiacente (colonna G - in giallo).</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="attacchi-ai-5-riassunto-1.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 1
    </div>
</div>

<p>Se il cinque è pieno, ovvero il controbordo (riga 7) è occupata da sole pedine bianche,
    l'attacco funziona sempre, indipendentemente
	      dalla formazione sul controbordo adiacente (colonna G). Vedi il diagramma 2.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="attacchi-ai-5-riassunto-2.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 2
    </div>
</div>

<p>Se il cinque non è pieno, ovvero la riga 7 è occupata da almeno una pedina nera, e il controbordo adiacente
    (la colonna G) è occupato solo da pedine bianche,
	      l'attacco non funziona. Vedi il diagramma 3.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="attacchi-ai-5-riassunto-3.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 3
    </div>
</div>

<p>Se il cinque non è pieno, ovvero la riga 7 è occupata da almeno una pedina nera, e il controbordo adiacente
    (la colonna G) è occupato solo da pedine nere,
	      l'attacco non funziona. Vedi il diagramma 4.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="attacchi-ai-5-riassunto-4.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 4
    </div>
</div>

<p>In tutti gli altri casi l'attacco potrebbe funzionare. Vedi il diagramma 5.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="attacchi-ai-5-riassunto-5.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 5
    </div>
</div>

    <p>Ho scritto "potrebbe funziona" perché in particolari condizioni,
	ad attacco già in atto, è possibile che il bianco riesca a
        <a href="estrazione.php">estrarre</a> dal controbordo adiacente le pedine
        avversarie e a portarsi nella seconda situazione, in modo da vanificare l'attacco.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Strategia</div>
    <div class="card-body">
        <p class="card-text">Se stai giocando su un bordo e stai formando un cinque ricorda:</p>
        <ul class="card-text">
            <li>evita di girare anche tutte le pedine del controbordo, altrimenti il tuo cinque sarebbe sempre
            attaccabile;</li>
            <li>fai in modo che le pedine del controbordo dalla parte attaccabile siano dello stesso colore.</li>
        </ul>
        <p class="card-text">Se vieni attaccato e l'attacco sta funzionando non prendere subito l'angolo ma
        cerca di ricondurti a una situazione in cui le pedine del controbordo dalla parte attaccata siano dello stesso
        colore.</p>
    </div>
</div>
