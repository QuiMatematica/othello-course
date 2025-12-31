<h1>La parità nel finale</h1>

<p>Abbiamo visto che il <b>finale perfetto</b> è <b>calcolabile matematicamente</b>.
    Tuttavia, per noi umani è difficile analizzare e contare tutte le sequenze possibili.
    Ci servono delle <b>euristiche</b> per semplificare il calcolo.</p>

<p>L'euristica dominante nei finali è la <b>parità</b>.</p>

<p>Ne abbiamo già parlato in un <a href="../parita/chapter.php">capitolo precedente</a>:
    ma qui voglio ribadire la sua importanza e mostrarti che, purtroppo, non funziona sempre.</p>

<h2>Se non conosci la parità... perdi</h2>

<p>Gli esempi di questa pagina sono tratti dall'ottimo corso del maestro Alessandro Di Mattei.</p>

<p>Partiamo dalla posizione del diagramma 1, in cui è di turno il bianco. Dove giocheresti?
    Qual è la sequenza perfetta?</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="parita-1.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 1: mossa al bianco.
	</div>
</div>

<p>Supponiamo che il bianco non conosca la parità, o che comunque non sappia sfruttarla bene nel finale.
Nella posizione del diagramma 1 potrebbe essere portato a cercare una
    <a href="../mobilita/togliere-mosse.php">mossa sicura</a>,
    cioè che non permetta all'avversario di accedere a un angolo.
    L'unica mossa di questo tipo è <b>B1</b>, che ha anche il vantaggio di conquistare tutto il bordo
nord. Segui la sequenza proposta nel diagramma 2.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="parita-2.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 2: il bianco non conosce la parità e perde.
	</div>
</div>

<h2>Se conosci la parità... vinci</h2>

<p>Ripartiamo dalla posizione del diagramma 1 e questa volta ipotizziamo che il bianco conosca la parità.</p>

<p>Il bianco ha una regione dispari a disposizione.
    &Egrave; lì che deve giocare.
Segui la sequenza nel diagramma 3.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="parita-3.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 3: il bianco conosce la parità e vince.
	</div>
</div>

<h2>Quindi?</h2>

<p>La parità è una potente alleata nei finali.</p>
<p>Se hai poco tempo o la posizione è difficile da valutare,
    <b>giocare secondo parità è quasi sempre una buona idea</b>.</p>

<p>Ma attenzione!</p>

<p>La parità non indica sempre la mossa migliore. A volte bisogna sacrificare la parità per
ottenere più pedine.</p>
<p>Per esempio nel diagramma 2 il nero ha rinunciato alla parità per conquistare il bordo nord...
    e ha vinto la partita.</p>

<p>Se il tuo avversario è bravo, anche lui cercherà di giocare in parità. Questo ti aiuta a:</p>
<ul>
    <li>prevedere le sue mosse;</li>
    <li>identificare le sequenze di finale più probabili;</li>
    <li>ridurre il numero di sequenze da calcolare.</li>
</ul>
<p>Nella prossima pagina vedremo come sfruttare questa conoscenza per migliorare ulteriormente
    la tua strategia!</p>