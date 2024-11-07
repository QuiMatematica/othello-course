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

		<div class="card border-primary mb-3">
			<div class="card-header">Tattica</div>
			<div class="card-body">
				<p class="card-text">Facendo riferimento alla posizione del diagramma 1, l'attacco al cinque consiste in:</p>
                <ul class="card-text">
                    <li>il nero (attaccante) gioca nella casella X G7;</li>
                    <li>il bianco gioca nell'angolo H8;</li>
                    <li>il nero si incunea nella casella C G8; la pedina posta è stabile;</li>
                    <li>il nero infine conquista l'angolo A8 e tutto il bordo sud.</li>
                </ul>
			</div>
		</div>

    <p>Vedi la sequenza del diagramma 2.</p>

        <div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-ai-5-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 2: l'attacco al cinque.
			</div>
		</div>

    <p>L'attacco a un cinque, se portato a termine correttamente, permette di conquistare un angolo
        e altre sei pedine stabili sul bordo. Tuttavia è necessario essere disposti a cedere un angolo.</p>

	<p>Il giocatore attaccato non è costretto a prendere subito l'angolo. Se non lo fa, l'attaccante ha
        comunque già ottenuto un vantaggio: il guadagno di un
        <a href="../tempi-di-gioco/chapter.php">tempo di gioco</a>.</p>

	<h2>Tocca a te</h2>

	<p>Nel diagramma 3 giochi con il bianco. Devi attaccare il cinque nero e conquistare altre sei pedine stabili.</p>

        <div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="attacchi-ai-5-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 3: attacca il cinque.
			</div>
		</div>