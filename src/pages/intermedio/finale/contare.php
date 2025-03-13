<h1>Contare l'indispensabile</h1>

<p>Le euristiche, come la parità, offrono criteri per selezionare le sequenze più promettenti.
    Questo significa che non è necessario contare tutte le sequenze possibili, ma solo quelle più interessanti.</p>

<p>Per mostrarti come fare, riprendiamo una posizione della pagina precedente.</p>

<p>Nel diagramma 1 tocca al nero, il quale ha quattro mosse a disposizione: <b>A2</b>, <b>B2</b>, <b>G1</b> e <b>G2</b>.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="contare-1.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 1: sei caselle vuote.
	</div>
</div>

<p>Abbiamo visto che <b>G2</b> non è una buona mossa, perché l'attacco al cinque non è efficace e il bianco può rispondere
    in <b>G1</b> senza voltare la pedina <b>G2</b>, e si tiene <b>H1</b> per salvare tutto il lato nord.
    Quindi questa mossa è da escludere.</p>

<p>Escludiamo anche <b>B2</b> perché rinuncia alla parità globale e permette al bianco di salvare il lato nord. Non c'è
nessun beneficio nel fare questa mossa.</p>

<p>Dopo <b>G1</b> è ovvio che il bianco vorrà salvare il lato nord giocando in <b>H1</b>. Dopo queste due mossa in nero deve
    chiudere la regione a nord-est muovendo in <b>G2</b>. Il bianco passa e il nero deve giocare a nord-ovest:
    la mossa più interessante sembra essere <b>A2</b> seguita da <b>B2</b> e <b>A1</b>.</p>

<p>Con <b>A2</b>, invece, il nero rinuncia alla parità puntando a prendere il bordo nord. Il bianco quindi risponde a est,
    nella regione dispari, con <b>G2</b>. Il nero può prendere l'angolo <b>H1</b> a cui segue la mossa del bianco in <b>G1</b>
    che chiude la regione. Si passa quindi a ovest dove il nero gioca in <b>A1</b> e il bianco termina la partita in <b>B2</b>.</p>

<p>Il nero quindi ha due sequenze tra cui scegliere:</p>
<ul>
    <li><b>G1 → H1 → G2 → A2 → B2 → A1</b>;</li>
    <li><b>A2 → G2 → H1 → G1 → A1 → B2</b>.</li>
</ul>

<p>Prenditi tutto il tempo che ti serve: prova a contare quante sono le pedine con cui il nero terminerà la partita
nei due casi. E scegli quindi la mossa migliore. Una volta terminato il conteggio usa i diagrammi 2 e 3 per verificare
i tuoi conteggi.</p>

<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="contare-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2: sequenza <b>G1 → H1 → G2 → A2 → B2 → A1</b>.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="contare-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: sequenza <b>A2 → G2 → H1 → G1 → A1 → B2</b>.
			</div>
		</div>

	</div>
</div>

<p>Contando i risultati delle due sequenze abbiamo capito che la mossa migliore per il nero è
<b>A2</b>. E non è stato necessario studiare tutte le sequenze possibili.</p>

<p>Se le euristiche che abbiamo utilizzato per selezionare le sequenze sono buone (e se le sappiamo applicare
    correttamente), non abbiamo bisogno di calcolare tutto l'albero delle possibili mosse.</p>

<p>Non solo. Se già una sequenza molto probabile in termini di euristiche è vincente, potremo decidere di giocarla
senza calcolare il finale per altre sequenze. Dopotutto a noi interessa vincere la partita e non sempre avremo il
lusso di poter selezionare la mossa perfetta.</p>

<p>Se invece tutte le sequenze che ci sembrano più probabili sono perdenti... beh, o la posizione è matematicamente
persa, oppure possiamo cercare qualche altra sequenza. Oppure ancora possiamo tentare di rendere il gioco il più
difficile possibile in modo da indurre l'avversario a sbagliare. Ma questa è tutta un'altra storia...</p>