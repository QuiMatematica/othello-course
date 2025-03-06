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

<p>Il compito è sicuramente semplificato per il fatto che il nero ha solo due mosse.
    E se hai calcolato correttamente ti sarai accorto che sia la mossa A2 sia la mossa H7 conducono alla vittoria del
nero per 35 a 29. Ma ora riguarda il diagramma. Perché il risultato è lo stesso per entrambi le sequenze?</p>

<p>Se il nero gioca in A2, il bianco risponde in A1 per sfruttare la parità.
    Se il nero gioca in H7, il bianco risponde in H8 per sfruttare la parità.
    E queste coppie di botta-risposta avvengono qualunque sia la prima mossa del nero.</p>

<p>Inoltre, ed è qui che volevamo arrivare, le due mosse del nero non si influenzano alcun modo.
Se il nero gioca in A2, questa pedina e le pedine girate (B3, C4 e D5) non cambiano l'effetto della mossa in H7.
Se invece il nero gioca in H7, questa pedina e la pedina girata (G6) non cambiano l'effetto della mossa in A6.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Diciamo <b>indipendenti</b> due sequenze che non si influenzano a vicenda.</p>
	</div>
</div>

<p>&Egrave; importante riconoscere quando due sequenze sono indipendenti perché permettono di semplificare la
determinazione del finale perfetto.</p>

<p>Ma è ancora più importante determinare quando due sequenze <b>NON sono indipendenti</b>, perché la loro dipendenza
DEVE essere sfruttata per guadagnare il maggior numero possibile di pedine.</p>

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

<p>La mossa in H7 conduce alla vittoria del bianco per 33 a 31.
    Mentre la mossa in A2 conduce alla vittoria del nero per 36 a 28. Perché questa differenza?</p>

<p>Se il nero gioca in H7, il bianco gioca in H8 per sfruttare la parità. Con questa mossa gira anche la pedina G8.
Ora il nero gioca in A2, ma volta solo la pedina in A3 e non volta alcuna pedina in diagonale (te ne eri accorto?).</p>

<p>Se invece il nero inizia giocando in A2, volta subito le pedine della diagonale B2-F7, pedine che il bianco non riesce
più a voltare. E saranno queste pedine a garantirgli la vittoria.</p>

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