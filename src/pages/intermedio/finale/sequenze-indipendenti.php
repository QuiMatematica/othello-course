<h1>Sequenze indipendenti e non indipendenti</h1>

<p>Prova a determinare il finale perfetto della posizione del diagramma 1, in cui tocca al nero.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="sequenze-indifferenti-1.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 1: mossa al nero.
	</div>
</div>

<p>Il nero ha solo due mosse a disposizione: <b>A2</b> e <b>H7</b>.</p>
<p>Se hai calcolato correttamente, avrai capito che entrambe le mosse portano alla vittoria del
nero per 35 a 29. Ma perché il risultato è lo stesso in entrambe le sequenze?</p>

<p>La risposta del bianco è legata alla mossa del nero:</p>
<ul>
    <li>se il nero gioca in <b>A2</b>, il bianco risponde in <b>A1</b> per sfruttare la parità;</li>
    <li>se il nero gioca in <b>H7</b>, il bianco risponde in <b>H8</b> per sfruttare la parità.</li>
</ul>

<p>Le due mosse <b>non si influenzano</b>:</p>
<ul>
    <li>se il nero gioca in <b>A2</b>, la pedina posizionata e le pedine girate (<b>B3</b>, <b>C4</b> e <b>D5</b>) non
        cambiano l'effetto della mossa in <b>H7</b>;</li>
    <li>se il nero gioca in <b>H7</b>, la pedina posizionata e la pedina girata (<b>G6</b>) non cambiano l'effetto
        della mossa in <b>A6</b>.</li>
</ul>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Diciamo <b>indipendenti</b> due sequenze che non si influenzano a vicenda.</p>
	</div>
</div>

<p>&Egrave; importante riconoscere se due sequenze sono indipendenti o meno, perchè:</p>
<ul>
    <li>se <b>sono indipendenti</b>, il risultato sarà lo stesso qualunque mossa sceglieremo;</li>
    <li>se <b>non sono indipendenti</b>, possiamo sfruttare questa dipendenza per massimizzare il risultato finale.</li>
</ul>

<p>Nel diagramma 2 è stata cambiata una sola pedina rispetto al diagramma 1. Prova di nuovo a calcolare il finale
    perfetto.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="sequenze-indifferenti-2.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 2: mossa al nero.
	</div>
</div>

<ul>
    <li>Se il nero muove in <b>H7</b>, il bianco vince per 33 a 31.</li>
    <li>Se il nero muove in <b>A2</b>, il nero vince per 36 a 28.</li>
</ul>

<p>Perché questa differenza?</p>

<ul>
    <li>Se il nero gioca in <b>H7</b>, il bianco gioca in <b>H8</b> per sfruttare la parità. Con questa mossa gira
        anche la pedina <b>G8</b>. Poi il nero gioca in <b>A2</b>, ma volta solo la pedina in <b>A3</b> e non volta
        alcuna pedina in diagonale.</li>
    <li>Se il nero gioca in <b>A2</b>, volta subito le pedine della diagonale <b>B2-F7</b>, pedine che il bianco non riesce
        più a voltare. E saranno queste pedine a garantirgli la vittoria.</li>
</ul>
<p></p>

<p></p>

<p>Volutamente i diagrammi 1 e 2 di questa pagina non sono interattivi e non ti permettono di giocare le mosse per
vederne l'effetto. Questo perché è importante imparare a valutare queste situazioni senza toccare la scacchiera e
giocando le sequenze a mente.</p>

<h2>Tocca a te</h2>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="sequence-board" data-file="sequenze-indifferenti-3.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 2: mossa al nero.
	</div>
</div>