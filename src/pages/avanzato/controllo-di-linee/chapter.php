<h1>Controllo di linee</h1>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Si parla di <b>controllo di una linea</b> quando uno dei colori possiede tutte le
            pedine sulla stessa linea.</p>
	</div>
</div>

<p>Come per le direzioni di voltura, il controllo di linea può avvenire in orizzontale
    (diagramma <span data-board-ref="orizzontale"></span>), in verticale
    (diagramma <span data-board-ref="verticale"></span>) o in diagonale
    (diagramma <span data-board-ref="diagonale"></span>).</p>

<gather>
    <board data-type="show" data-label="orizzontale" data-file="chapter-orizzontale.json"
           data-caption="Il bianco controlla la riga <b>2</b>."></board>
    <board data-type="show" data-label="verticale" data-file="chapter-verticale.json"
           data-caption="Il nero controlla la colonna <b>G</b>."></board>
    <board data-type="show" data-label="diagonale" data-file="chapter-diagonale.json"
           data-caption="Il bianco controlla la diagonale <b>B2-G7</b>, mentre il nero controlla la diagonale <b>B7-G2</b>."></board>
</gather>

<p>L'effetto del controllo di una linea è duplice.</p>

<p><b>Primo effetto.</b> Nel diagramma <span data-board-ref="non-puo-muovere"></span> se il bianco gioca in <b>B2</b>
    controlla la diagonale <b>B2-H8</b>.
    Per effetto di questo controllo, il nero non sarà in grado di muovere nell'angolo <b>A1</b>
    e salvare il bordo nord, ma sarà costretto a muovere in <b>A2</b>.</p>

<board data-type="show" data-label="non-puo-muovere" data-file="chapter-non-puo-muovere.json"
       data-caption="Il controllo della diagonale da parte del bianco impedisce al nero di giocare nell'angolo."></board>

<p><b>Secondo effetto.</b> Nel diagramma <span data-board-ref="non-puo-girare"></span> se il nero gioca in <b>A8</b> controlla tutta la colonna <b>B</b>.
Il bianco può giocare in <b>B8</b> (infatti volta pedine in diagonale) ma, per effetto della colonna controllata,
    non volta alcuna pedina in verticale.</p>

<board data-type="show" data-label="non-puo-girare" data-file="chapter-non-puo-girare.json"
       data-caption="Il controllo della colonna da parte del nero impedisce al bianco di voltare pedine lungo la stessa colonna."></board>

<p><b>In sintesi.</b> Se una linea è controllata da un colore, non può essere utilizzata per voltare pedine.
    Per cui se a uno dei suoi estremi c'è una casella vuota:</p>
<ul>
    <li>se non ci sono altre direzioni lungo cui voltare pedine, non è possibile muovere in tale casella;</li>
    <li>se ci sono altre direzioni lungo cui voltare pedine, si può giocare nella casella ma si voltano poche pedine.</li>
</ul>

<p>Ma questi effetti si applicano sia a chi ha il controllo della linea sia al proprio avversario. Quindi il
    controllo può essere una <b>punto di debolezza</b> per il coloro che lo detiene.</p>

<p>Nel diagramma <span data-board-ref="perde-la-mossa"></span> il bianco ha il controllo della diagonale
    <b>A1-G7</b>. Il nero può giocare in <b>H8</b> perché volta pedine in verticale, ma facendolo non volta la pedina
<b>G7</b>. Quindi il bianco è costretto a passare e il nero vince la partita.</p>

<board data-type="show" data-label="perde-la-mossa" data-file="chapter-perde-la-mossa.json"
       data-caption="Il bianco controlla la diagonale quindi il nero può giocare in <b>H8</b> senza voltare <b>G7</b>."></board>

<p>Il diagramma <span data-board-ref="dettaglio"></span> presente una situazione abbastanza comune che, a rigor di logica,
non rientra nella definizione data sopra di controllo di linea.</p>

<p>Le pedine <b>C7</b>, <b>D7</b>, <b>E7</b> ed <b>F7</b> sono tutte le bianco. Ma le pedine <b>A7</b> e <b>H7</b> sono nere.
Quindi non siamo nella situazione in cui il bianco controlla tutte le pedine della riga <b>7</b>.</p>

<p>Tuttavia le pedine <b>A7</b> e <b>H7</b> non hanno effetto sulle caselle vuote <b>B7</b> e <b>G7</b>.
    Quindi possiamo comunque affermare che <i>il bianco ha il controllo del controbordo sud</i>.</p>

<board data-type="show" data-label="dettaglio" data-file="chapter-dettaglio.json"
       data-caption="Il bianco controlla il controbordo sud."></board>

<p>Nelle prossime pagine approfondiremo i più tipici controlli di linee, ovvero:</p>
<ul>
    <li>controllo delle <i>diagonali principali</i>;</li>
    <li>controllo dei <i>controbordi</i>;</li>
    <li>controllo delle <i>diagonali C</i>;</li>
    <li>controllo delle <i>mini diagonali</i>.</li>
</ul>