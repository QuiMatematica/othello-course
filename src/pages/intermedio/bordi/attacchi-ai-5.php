    <h1>Gli attacchi ai cinque</h1>

		<div class="card border-primary mb-3">
			<div class="card-header">Definizione</div>
			<div class="card-body">
				<p class="card-text"><b>Un cinque</b> è un insieme di cinque pedine contigue dello stesso colore su un
	            bordo della scacchiera, che vanno da una casella B alla casella C opposta.</p>
			</div>
		</div>

	<p></p>

	<p>Per esempio, il diagramma 1 mostra un cinque sul bordo sud.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-ai-5.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: un cinque sul bordo sud.
			</div>
		</div>

	<h2>Come si attacca</h2>

    <p>L'attacco al cinque consiste, nel caso del diagramma 1, in:</p>
    <ul>
        <li>giocare nella casella X G7</li>
        <li>cedere quindi l'angolo H8</li>
        <li>incunearsi nella casella C G8 (che è stabile)</li>
        <li>e conquistare poi l'angolo opposto A8.</li>
    </ul>
    <p>Vedi la sequenza del diagramma 2.</p>

        <div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-ai-5-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 2: l'attacco al cinque.
			</div>
		</div>

	<h2>Vantaggi e svantaggi</h2>

	<p>Vantaggio di un attacco al cinque è la conquista di un angolo e di altre 6 pedine stabili;
	svantaggio la cessione di un angolo che potrebbe essere strategicamente importante.</p>

	<p>Il giocatore attaccato non è costretto a prendere l'angolo, ma può aspettare di vedere come evolve la partita.
        Tuttavia l'attaccante ha già avuto un vantaggio: il guadagno di un
        <a href="../tempi-di-gioco/chapter.php">tempo di gioco</a>.</p>

	<h2>Tocca a te</h2>

	<p>Nel diagramma 3 giochi con il bianco. Devi attaccare il cinque nero e conquistare 7 pedine stabili.</p>

        <div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="attacchi-ai-5-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 3: attacca il cinque.
			</div>
		</div>