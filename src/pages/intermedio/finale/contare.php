<h1>Contare l'indispensabile</h1>

<p>La parità, ma le euristiche in genere, offrono dei criteri per selezionare alcune sequenze come più promettenti
di altre. Per cui non è sempre necessario contare tutte le sequenze possibili, ma ci si può limitare a quelle
più interessanti.</p>

<p>Per mostrarti come fare riprendo due posizioni della pagina precedente.</p>

<p>Nel diagramma 1 tocca al nero, che ha tre mosse a disposizione: A2, G1 e G2.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="contare-1.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 1: sei caselle vuote.
	</div>
</div>

<p>Abbiamo visto che G2 non è una buona mossa, perché l'attacco al cinque non è efficace e il bianco può rispondere
in G1 senza voltare la pedina G2, e si tiene H1 per salvare tutto il lato nord. Quindi questa mossa è da escludere:
rimangono solo due alternative.</p>

<p>Dopo G1 è ovvio che il bianco vorrà salvare il lato nord giocando in H1. Dopo queste due mossa in nero deve
chiudere la regione a nord-est muovendo in G2. A questo punto il bianco passa. A questo punto tocca il nero a nord-ovest
e la mossa più interessante sembra essere A2 seguita da B2 e A1.</p>

<p>Con A2, invece, il nero rinuncia alla parità puntando a prendere il bordo nord. Il bianco quindi risponde a est,
nella regione dispari, con G2. A questo punto il nero può prendere l'angolo H1 a cui segue la mossa del bianco in G1
che chiude la regione. Si passa quindi a ovest dove il nero gioca in A1 e il bianco termina la partita in B2.</p>

<p>Il nero quindi ha due sequenze tra cui scegliere:</p>
<ul>
    <li>G1, H1, G2, A2, B2, A1;</li>
    <li>A2, G2, H1, G1, A1, B2.</li>
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
				Diagramma 2: sequenza G1, H1, G2, A2, B2, A1.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="contare-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: sequenza A2, G2, H1, G1, A1, B2.
			</div>
		</div>

	</div>
</div>
