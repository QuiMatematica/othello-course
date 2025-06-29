<h1>Controllo delle diagonali C</h1>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>diagonale C</b> l'insieme delle caselle in diagonale che vanno da una
            casella C alla casella C opposta, come evidenziato
            nel diagramma <span data-board-ref="definizione"></span>.</p>
	</div>
</div>

<board data-type="show" data-label="definizione" data-file="diagonale-c-definizione.json"
       data-caption="Le diagonali C."></board>

<p>Come per le altre linee, anche il controllo di una diagonale C può limitare le mosse dell'avversario o, per lo meno,
le direzioni in cui vengono voltate le pedine.</p>

<p>Ma il controllo delle diagonali C hanno un'altra caratteristica interessante: ogni diagonale C taglia una diagonale
principale, come mostra il diagramma <span data-board-ref="taglio-diagonale"></span>.</p>

<board data-type="show" data-label="taglio-diagonale" data-file="diagonale-c-taglio-diagonale.json"
       data-caption="Le diagonali C tagliano le diagonali principali."></board>

<p>Ovviamente vale anche la relazione contraria: ciascuna diagonale principale taglia due diagonali C.</p>

<h2>Primo esempio</h2>

<board data-type="show" data-label="suekuni-7" data-file="diagonale-c-suekuni-7.json"
       data-caption="Vincere controllando una diagonale C."></board>
