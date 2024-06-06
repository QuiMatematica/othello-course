<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php include '../../header.php' ?>
	<link rel="stylesheet" href="../../../tao/othello.css">
    <script type="module">
        import { init } from "../../../tao/othello.js";
        document.addEventListener('DOMContentLoaded', init);
    </script>
</head>

<body>

    <?php
    include '../../classes/Navigator.php';

    $navigator = new Navigator();

    $navigator->header();
    $navigator->offcanvas();
    ?>

	<div id="othello-content" class="container-xxl mt-4">

        <?php $navigator->pagination() ?>

		<h1>Precisazioni</h1>

		<h2>Sul significato di "muovere"</h2>

		<p>Nelle pagine di questo corso user&ograve; molto spesso il verbo "muovere".
		Questo non deve confonderti le idee: le pedine non vengono mai spostate, ma solo
		appoggiate e girate. Quindi quando si parla di "mossa" o di "muovere" in
		verit&agrave; si intende appoggiare una pedina nella casella indicata e girare le
		pedine imprigionate.</p>

		<h2>Quali pedine sono imprigionate?</h2>

		<p>Se capita di imprigionare pi&ugrave; pedine, stai attento che la fila da
		capovolgere deve essere continua e formata di dischi dello stesso colore.</p>

		<p>Nella situazione del diagramma 1, il
		nero gioca in B4 e gira le tre pedine bianche.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="precisazioni-tre-pedine.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1: il nero gira tre pedine.
			</div>
		</div>

		<p>
		Invece, nella situazione del diagramma 2, facendo la stessa mossa il nero
		pu&ograve; capovolgere solo il disco in C4.
		</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="precisazioni-una-pedina.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2: il nero gira una sola pedina.
			</div>
		</div>

		<h2>Finali con caselle vuote</h2>

		<p>Osserva la posizione del diagramma 3. Come ultima mossa il bianco muove
		in H2; dopo toccherebbe al nero, ma...</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="precisazioni-finale-con-caselle-vuote.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: il bianco muove in H2.
			</div>
		</div>

		<p>N&egrave; il bianco n&egrave; il nero hanno mosse legali a disposizione, quindi
		nessuno dei due pu&ograve; giocare.
		Sebbene la tavola non sia piena, la partita &egrave; conclusa. Dal momento che le caselle vuote
		vengono assegnate al vincitore, il punteggio finale &egrave; di 53 a 11 per il Bianco.</p>

		<h2>Finali per 64 a 0</h2>

		<p>Un caso particolare di partita finita "in anticipo" &egrave; quello in cui
		tutte le pedine diventano dello stesso colore. Guardiamo, per esempio, la
		partita del diagramma 4.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="precisazioni-diamante.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4: il nero vince 64 a 0.
			</div>
		</div>

		<p>All'ultima mossa tutte le pedine sono diventate nere. Nessuno dei due
		giocatori pu&ograve; pi&ugrave; muovere, il bianco perch&egrave; non ha pi&ugrave; pedine con cui
		fare sponda, il nero perch&egrave; non ha pi&ugrave; pedine avversarie da girare. La
		partita &egrave; conclusa.</p>

		<p>Al giocatore vincente (quello che ha tutte le pedine del proprio colore,
		ovviamente) viene dato il punteggio massimo, 64 a 0, come se tutte le
		pedine fossero effettivamente del suo colore.</p>

		<h2>Ricominciamo da capo</h2>

		<p>Ripartiamo dalla posizione di partenza (diagramma 5): come prima mossa il nero ha a
		disposizione 4 possibili caselle: D3, C4, F5, E6.
		</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="precisazioni-posizione-iniziale.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 5: mossa al nero.
			</div>
		</div>

		<p>
		Supponiamo che giochi D3: appogger&agrave; in D3 una pedina rivolta in maniera da
		mostrare la faccia nera e girer&agrave; quella in D4 in modo che risulti anch'essa
		nera. Il disco in D4 viene capovolto perch&egrave; rimasto imprigionato fra le due
		pedine nere, in D3 e in D5! La posizione sulla tavola diventer&agrave; quella
		del diagramma 6.
		</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="precisazioni-prima-mossa-in-D3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 6: il nero ha giocato in D3.
			</div>
		</div>

		<p>La prima mossa,
		in realt&agrave;, &egrave; una sola: le quattro possibilit&agrave; del nero danno luogo a quattro
		posizioni perfettamente simmetriche, e giocare una o l'altra &egrave; solo una
		questione di gusto personale.</p>

		<p>Subito dopo la prima, per&ograve;, il bianco pu&ograve; giocare in 3 caselle, C3, C5 o E3.
		Queste tre mosse danno luogo a tre situazioni diverse e da questo punto in
		poi, ogni partita sar&agrave; diversa dalle altre!</p>

        <?php $navigator->pagination() ?>

	</div>
</body>
</html>
