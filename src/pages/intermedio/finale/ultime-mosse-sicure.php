<h1>Le ultime mosse sicure</h1>

<p>In una partita in cui nessun angolo è stato occupato dover muovere è più un imbarazzo
che un vantaggio: si può giocare solo nelle caselle più vicine agli angoli e può essere
molto pericoloso farlo. Ma anche tra le ultime mosse ce ne possono essere alcune
<a href="../mobilita/togliere-mosse.php">mosse sicure</a>
che permettono di giocare senza che l'avversario possa occupare immediatamente un angolo.
E' evidente che il giocatore che raggiunge questa fase con il maggior numero di mosse
sicure è avvantaggiato rispetto all'avversario: può giocare più mosse senza correre
pericoli.</p>

<p>I finali dell'Othello, quando sono equilibrati, sono relativamente complessi
essenzialmente per due ragioni:</p>

<ul>
  <li>alcune mosse sicure possono essere annullate dalle mosse dell'avversario;</li>
  <li>il giocatore con meno mosse sicure non ha nessun interesse a lanciarsi in una
  battaglia fino "all'ultima mossa sicura": egli spesso cercherà di sacrificare subito
  un angolo per recuperare un
  <a href="../tempi-di-gioco/chapter.php">tempo di gioco</a>, grazie alla
  <a href="../parita/chapter.php">parità</a>.</li>
</ul>

<p>Vediamo alcuni esempi.</p>

<p>Nel diagramma 1 è il turno del bianco. Le sue mosse sicure sono B1, G2 e B7. Anche le
due ultime mosse, pur essendo su caselle X, vengono considerate sicure perché non permettono
al nero di prendere subito un angolo. Il nero, invece, ha un'unica mossa sicura in H7.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="ultime-mosse-sicure-1.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 1: mossa al bianco.
	</div>
</div>

<p>Ci sono dunque tre mosse sicure contro una e ciò indubbiamente dà un grosso vantaggio per il
bianco. Non bisogna comunque pensare che tutte le scelte siano uguali. Non è semplice
scegliere la sequenza giusta. Nei diagrammi 2, 3, 4 e 5 vengono proposte quattro prosecuzioni
diverse. Il diagramma 5 riporta il finale perfetto.</p>

<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="ultime-mosse-sicure-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2: il bianco muove in B1.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="ultime-mosse-sicure-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: il bianco gioca in B7.
			</div>
		</div>

	</div>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="ultime-mosse-sicure-4.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4: il bianco muove in G2.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="ultime-mosse-sicure-5.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 5: il bianco gioca in G2: finale perfetto.
			</div>
		</div>

	</div>
</div>

<p>Nel diagramma 6 la mossa spetta al nero. Egli ha una sola mossa sicura contro tre del
bianco, ma può procurarsene una seconda sulla stessa diagonale. Infatti giocando in G2, il
nero annulla la mossa sicura del bianco in B7 e la trasforma in una sua mossa sicura.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="ultime-mosse-sicure-6.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
        Diagramma 6: mossa al nero.
	</div>
</div>

<p>Il diagramma 7 è identico al 6, salvo che per la pedina G6 diventata bianca. Il nero
ha la mossa e gioca ugualmente in G2. Adesso, tuttavia, questa mossa annulla
contemporaneamente due mosse sicure del bianco: quella già vista in B7 e quella in G1,
perché ora il bianco giocando in G1 girerebbe le pedine sulla colonna G e darebbe
l'angolo H1 al nero.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="ultime-mosse-sicure-7.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
        Diagramma 7: mossa al nero.
	</div>
</div>

<p>I due ultimi esempi mostrano bene la complessità e la "fragilità" delle posizioni finali.
Soprattutto mostrano quanto sia difficile pervenire in maniera calcolata a una posizione
finale vincente: una sola pedina girata e le posizione è completamente cambiata.</p>
<p>Bisogna inoltre notare che nella battaglia per le mosse sicure finali le case X
svolgono un ruolo molto importante e spesso vengono occupate prima della casella C,
perché hanno maggiore influenza sulle altre mosse sicure.</p>

<h2>Per riassumere</h2>

<div class="card border-primary mb-3">
	<div class="card-header">Strategia</div>
	<div class="card-body">
		<p class="card-text">Chi ha più mosse sicure in finale si trova in situazione di vantaggio.</p>
		<p class="card-text">Chi ha meno mosse sicure deve cercare di sfruttare le zone dispari per cercare di
            guadagnare un tempo di gioco.</p>
		<p class="card-text">Cerca di equilibrare tra consumo e guadagno delle proprie mosse sicure e,
            soprattutto, consumo e guadagno delle mosse sicure avversarie.</p>
	</div>
</div>