<h1>Controllo delle diagonali principali</h1>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>diagonali principali</b> l'insieme delle pedine che vanno da
            <b>A1</b> ad <b>H8</b>, e l'insieme delle pedine che vanno da <b>H1</b> ad <b>A8</b>.</p>
        <p class="card-text">Tenendo presente la posizione delle pedine all'inizio gioco
             possiamo chiamare
            :</p>
        <ul>
            <li><b>diagonale bianca</b> quella che va da <b>A1</b> ad <b>H8</b>;</li>
            <li><b>diagonale nera</b> quella che va da <b>H1</b> ad <b>A8</b>.</li>
        </ul>
	</div>
</div>

Nella posizione di partenza (diagramma <span data-board-ref="inizio-gioco"></span>) sulla diagonale <b>A1</b> ad <b>H8</b>
sono presenti le due pedine bianche, mentre sulla diagonale <b>H1</b> ad <b>A8</b> sono presenti le due pedine nero.
Questo ci offre un buon modo per distinguere tra le due diagonali (diagramma <span data-board-ref="diagonale-bianca-nera"></span>).

<gather>
    <board data-type="show" data-label="inizio-gioco" data-file="diagonali-inizio-gioco.json"
       data-caption="La posizione di partenza."></board>
    <board data-type="show" data-label="diagonale-bianca-nera" data-file="diagonali-bianca-nera.json"
       data-caption="La diagonale bianca e la diagonale nera."></board>
</gather>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Chiamiamo <b>diagonale bianca</b> la diagonale principale che va da <b>A1</b> ad <b>H8</b>.</p>
        <p class="card-text">Chiamiamo <b>diagonale nera</b> la diagonale principale che va da <b>H1</b> ad <b>A8</b>.</p>
	</div>
</div>

<p>Attenzione che in questo caso il colore si riferisce alle diagonali, non alle pedine che sono presenti sulle stesse.</p>

<p>Il controllo delle diagonali diventa estremamente importante nei finali delle partite. Capita spesso, infatti,
che si giunga alle ultime mosse senza che nessuno dei due giocatori sia riuscito a conquistare un angolo.</p>

<p>Per esempio nel diagramma <span data-board-ref="dimattei-1"></span> (esempio tratto dal corso scritto da Alessandro
Di Mattei) tocca al bianco. Ormai non c'è più alcuna casella <i>sicura</i> dove giocare e al bianco rimangono solo
due mosse: <b>B7</b> e <b>H7</b>. Sono entrambi caselle <b>X</b>.</p>

<p>Quando abbiamo parlato di pedine stabili abbiamo visto quanto sia pericoloso giocare in una casella <b>X</b>.
Anche se si ottiene il controllo della diagonale l'avversario può cercare il modo di <i>tagliare</i> la diagonale
e ottenere così un accesso </p>