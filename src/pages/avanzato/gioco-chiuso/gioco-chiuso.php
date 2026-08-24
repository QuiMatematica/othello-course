<p>Riprendiamo alcune definizioni che avevamo già visto quando abbiamo parlato di
    <a href="../../intermedio/mobilita/togliere-mosse.php">mobilità</a>.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizioni</div>
	<div class="card-body">
		<p class="card-text"><b>Mosse pericolose:</b> mosse che cedono un angolo all'avversario.</p>
		<p class="card-text"><b>Mosse sicure:</b> mosse che non cedono un angolo all'avversario.</p>
	</div>
</div>

<p>Se uno dei due giocatori riesce a togliere tutte le mosse sicure all'altro, si dice
che ha chiuso il gioco dell'avversario.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Il <b>gioco</b> di un giocatore è <b>chiuso</b> quando tale giocatore
            non ha a disposizione mosse sicure.</p>
	</div>
</div>

<p>Trovarsi con il gioco chiuso è il peggior incubo di ogni giocatore di Othello. Significa aver giocato male l'apertura,
significa che qualcosa è sfuggito. E ora ci si ritrova solo con mosse perdenti, che vanno a cedere un angolo,
e l'avversario, da quell'angolo, inizierà la serie di volture finali.</p>

<p>Se invece sei tu il fortunato giocatore che è riuscito a chiudere il gioco all'avversario, allora è fatta!</p>

<p>O meglio: è quasi fatta. La partita va portata a termine, e va massimizzato il punteggio finale. Come?</p>

<p>Questo capitolo si concentra proprio su questa delicata situazione di gioco.</p>

<p>Ma prima di vedere alcuni <i>tesuji</i> che possono aiutarti, lasciami fare due semplici osservazioni.</p>

<h2>1. Se il gioco del tuo avversario è chiuso, tu non aprirglielo!</h2>

<p>Facciamo una mossa indietro. Possono esserci due situazioni che portano al gioco chiuso.</p>

<ol>
    <li>Il tuo avversario ha un'unica mossa sicura e la gioca. Ora il suo gioco è chiuso. E tocca a te.</li>
    <li>Il tuo avversario ha diverse mosse sicure ma compie un errore e con una sola mossa si chiude il gioco
        da solo. E ora tocca a te.</li>
</ol>

<p>In entrambi i casi, <b>adesso tocca a te</b>. Ebbene: la prima cosa da fare è cercare di non dare nuove mosse sicure all'avversario.
Considera, per esempio, la posizione del diagramma <span data-board-ref="gioco-chiuso-1"></span>.</p>

<board data-type="show" data-label="gioco-chiuso-1" data-file="gioco-chiuso-1.json"
       data-caption="Il gioco del bianco è chiuso. Dove deve muovere il nero?"></board>

<h2>2. Controlla due volte prima di muovere</h2>

<p>Nell'Othello gli errori si pagano cari. Soprattutto quando si è in una posizione di vantaggio. E tu non vuoi certo
buttare via una partita già vinta solo per la fretta di muovere. Quindi...</p>

<p>Quindi controlla due volte prima di muovere.</p>

<p>Controlla soprattutto che le tue mosse non abbiano delle direzioni di voltura che non stavi considerando e che
vanno a ribaltare la situazione.</p>

<p>E qui devo essere sincero, anche perché la lezione così duramente appresa possa essere più fermamente trasmessa.</p>

<p>Mi è capitato in una partita di torneo di trovarmi in una situazione simile a quella del diagramma
    <span data-board-ref="gioco-chiuso-2"></span>.</p>
<p>(Nella partita vera, giocata a Vigonovo contro Leonardo Turato, il gioco del bianco non era così chiuso.
    Ho estremizzato la situazione per rendere più evidente l'errore e più inerente al tema.)</p>

<p>Il gioco del mio avversario era chiuso e stavo cercando un modo elegante
per tagliare la diagonale nera e ottenere l'accesso all'angolo <b>H1</b>. Giocare in <b>C6</b> era la mossa corretta,
e ricordo di averla considerata. Ma lì per lì ne ho vista un'altra. Peccato che fosse una svista!</p>

<board data-type="show" data-label="gioco-chiuso-2" data-file="gioco-chiuso-2.json"
       data-caption="Il gioco del bianco è chiuso. Dove NON deve muovere il nero?"></board>

<p>Perché si fanno errori del genere? Chiaramente per distrazione. E vanno indagate quali siano le cause di simili
    distrazioni.</p>

<p>Ma la prima causa della distrazione è il sentirsi troppo confidenti in una situazione di vantaggio.
&Egrave; la sindrome dell'ultimo chilometro, applicata all'Othello.</p>

<h2>Tocca a te</h2>

<p>Come evitare di aprire il gioco del bianco in questa situazione?</p>

<board data-type="quiz" data-label="gioco-chiuso-3" data-file="gioco-chiuso-3.json"></board>