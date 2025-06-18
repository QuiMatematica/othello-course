<h1>Controbordi e formazioni "piene"</h1>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>controbordo</b> le quattro caselle centrali adiacenti ad un bordo:</p>
		<ul class="card-text">
            <li>le caselle C2, D2, E2 e F2 sono il controbordo del bordo nord;</li>
            <li>le caselle G3, G4, G5 e G6 sono il controbordo del bordo est;</li>
            <li>le caselle C7, D7, E7 e F7 sono il controbordo del bordo sud;</li>
            <li>le caselle B3, B4, B5 e B6 sono il controbordo del bordo ovest.</li>
        </ul>
	</div>
</div>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="controbordi-1.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 1: controbordi.
    </div>
</div>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Quando le pedine di un controbordo sono tutte dello stesso
            colore si parla di <b>controllo del controbordo</b>.</p>
	</div>
</div>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Quando le pedine di un bordo e di un controbordo sono tutte dello stesso
            colore si parla di <b>formazione piena</b>.</p>
	</div>
</div>

<p>Nel diagramma 2 abbiamo un sei pieno (detto anche montagna) a nord, un cinque pieno a est e un quattro
    pieno a sud.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="controbordi-2.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 2: formazioni piene.
    </div>
</div>

<p>Ci sono vantaggi e svantaggi nel controllo di un controbordo.
    Se un colore controlla un controbordo, l'avversario ha una possibilità in meno di accedere alle
    caselle X adiacenti per attaccare il bordo. Ma nel caso di quattro pieni e di cinque pieni, se
    l'avversario riesce comunque ad attaccare il bordo, l'attaccato non ha la possibilità di muovere
    nella casella C adiacente al bordo, per cui non ha alcuna possibilità di annullare l'efficacia
    dell'attacco.</p>

<p>La situazione va analizzata di caso in caso. Nel prossimo capitolo, in particolare, vedremo
gli effetti del controllo dei controbordi negli attacchi ai cinque. In prima approssimazione possiamo
dire che i sei pieni sono vantaggiosi, mentre i cinque pieni e i quattro pieni sono svantaggiosi.</p>