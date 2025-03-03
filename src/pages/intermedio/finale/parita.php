<h1>La parità nel finale</h1>

<p>Abbiamo visto che il finale perfetto è calcolabile matematicamente. Ma per un uomo è difficile poter analizzare e
contare tutte le sequenze. Abbiamo allora bisogno di strumenti che ci permettano di selezionare le sequenze più
    vantaggiose. Ci servono delle euristiche.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Le euristiche (dal greco heurískein: trovare, scoprire) sono procedimenti mentali
            intuitivi e sbrigativi, scorciatoie mentali, che permettono di costruire un’idea generica su un argomento
            senza effettuare troppi sforzi cognitivi. Sono strategie veloci utilizzate di frequente per giungere
            rapidamente a delle conclusioni.</p>
	</div>
</div>

<p>Sicuramente l'euristica che più di tutte domina nei finali è la <b>parità</b>.</p>

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
Nella posizione del diagramma 1 potrebbe essere portato a cercare una mossa sicura: una mossa che non dia accesso
all'avversario agli angoli. L'unica mossa di questo tipo è B1, che ha anche il vantaggio di conquistare tutto il bordo
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
