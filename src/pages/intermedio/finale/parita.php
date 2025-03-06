<h1>La parità nel finale</h1>

<p>Abbiamo visto che il finale perfetto è calcolabile matematicamente. Ma per noi umani è difficile poter analizzare e
contare tutte le sequenze. Ci servono delle euristiche.</p>

<p>Sicuramente l'euristica che domina nei finali è la <b>parità</b>.</p>

<p>Ne abbiamo già parlato in un <a href="../parita/chapter.php">apposito capitolo</a>: qui ne voglio ribadire
    l'importanza nel finale, ma anche mostrarti come non sempre sia efficace.</p>

<h2>Se non conosci la parità... perdi</h2>

<p>Gli esempi di questa pagina sono tratti dall'ottimo corso del maestro Alessandro Di Mattei.</p>

<p>Partiamo dalla posizione del diagramma 1, in cui è di turno il bianco. Tu dove giocheresti? Qual potrebbe essere
la sequenza perfetta?</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="parita-1.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 1: mossa al bianco.
	</div>
</div>

<p>Supponiamo che il bianco non conosca la parità, o che comunque non sappia sfruttarla bene nel finale.
Nella posizione del diagramma 1 potrebbe essere portato a cercare una <a href="../mobilita/togliere-mosse.php">mossa sicura</a>:
    una mossa che non permetta all'avversario di accedere a un angolo.
    L'unica mossa di questo tipo è B1, che ha anche il vantaggio di conquistare tutto il bordo
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

<p>Il bianco ha ancora la parità globale e ha una regione dispari a disposizione. &Egrave; lì che deve giocare.
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

<p>Quindi la parità è una tua potente alleata nei finali. Se hai fretta o hai una posizione molto difficile da valutare,
giocare secondo parità è sicuramente una buona idea.</p>

<p>Però devo anche avvisarti che non è sempre vincente o comunque non ti indica sempre la mossa migliore. Esattamente
come è successo nel diagramma 2, dove il nero ha dovuto rinunciare alla parità per poter conquistare il lato nord.</p>

<p>Ma di una cosa possiamo essere certi: se il tuo avversario è in gamba, anche lui cercherà di giocare in parità.
Questo ti permette di capire come potrebbe rispondere alle tue mosse e ti permette di individuare le sequenze
di finale più probabili. E questo riduce di molto l'eventuale calcolo del finale. Come ti mostrerò nella prossima
    pagina.</p>