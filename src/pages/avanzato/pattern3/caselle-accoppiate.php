<p>Questo <i>tesuji</i>, e gli esempi che riporto, sono stati presentati da Makoto Suekuni
durante la master class che ha tenuto a Roma nel 2024
    <a href="https://www.youtube.com/watch?v=adk3sTpatQ8" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>.
</p>

<p>Riprendo una definizione che avevo già presentato nell'introduzione agli 
    <a href="../swindle/swindle.php"><i>swindle</i></a>.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>caselle accoppiate</b> due caselle tali che, se un giocatore muove in
            una, all'avversario è conveniente rispondere nell'altra.</p>
	</div>
</div>

<p>Tuttavia, se sono presenti due caselle accoppiate e un giocatore muove in una delle due, non è detto che la risposta
nell'altra sia vantaggiosa. Si apre quindi un dilemma: rispondere comunque nella casella accoppiata a discapito dello
svantaggio o non rispondere e perdere così due tempi di gioco?</p>

<p>Ne è un esempio la posizione presentata nei diagrammi <span data-board-ref="caselle-accoppiate-1"></span> e 
<span data-board-ref="caselle-accoppiate-2"></span>. Le caselle <b>D8</b> e <b>E8</b> sono accoppiate. Ma se il nero
    gioca in <b>E8</b>, il bianco si trova a dover prendere una decisione non facile. Confronta i due diagrammi.</p>

<gather>
    <board data-type="show" data-label="caselle-accoppiate-1" data-file="caselle-accoppiate-1.json"></board>
    <board data-type="show" data-label="caselle-accoppiate-2" data-file="caselle-accoppiate-2.json"></board>
</gather>

<p>La posizione del diagramma <spam data-board-ref="caselle-accoppiate-3"></spam>, invece, è più complessa.
Il nero non ha vantaggio a giocare né in <b>D8</b> né in <b>E8</b>: il bianco non solo può rispondere serenamente
nella corrispondente casella accoppiata, ma ottiene anche accesso alle caselle <b>C</b> adiacenti. Tuttavia
un modo c'è per approfittare della posizione.</p>

<board data-type="show" data-label="caselle-accoppiate-3" data-file="caselle-accoppiate-3.json"></board>

<h2>I <i>pattern</i></h2>

<p>Confrontiamo i <i>pattern</i> dei due esempi (diagrammi <span data-board-ref="caselle-accoppiate-4"></span>
    e <span data-board-ref="caselle-accoppiate-5"></span>). In entrambe le posizioni abbiamo:</p>
<ul>
    <li>due caselle accoppiate sul bordo (riquadro rosso);</li>
    <li>se il bianco è invitato a muovere in <b>D8</b>, gira anche la pedina <b>C7</b> perdendo l'accesso alla casella <b>B8</b> (freccia gialla).</li>
</ul>

La differenza consiste però nell'effetto della prima mossa del nero, quella in <b>E8</b>.
<ul>
    <li>Nel diagramma <span data-board-ref="caselle-accoppiate-4"></span> il nero non volta la pedina <b>F7</b>
        (freccia viola) quindi il vantaggio è immediato.</li>
    <li>Nel diagramma <span data-board-ref="caselle-accoppiate-5"></span> il nero volta anche la pedina <b>F7</b>
        (freccia viola) quindi è necessario prima l'attacco all'angolo <b>A8</b>.</li>
</ul>

<gather>
    <board data-type="show" data-label="caselle-accoppiate-4" data-file="caselle-accoppiate-4.json"></board>
    <board data-type="show" data-label="caselle-accoppiate-5" data-file="caselle-accoppiate-5.json"></board>
</gather>