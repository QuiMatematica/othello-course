<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php include '../../header.php' ?>
	<link rel="stylesheet" href="../../tao/othello.css">
    <script type="module">
        import { init } from "../../tao/othello.js";
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

		<h1>Gli angoli e le altre pedine stabili</h1>

		<p>Nota questo fatto:
			<u>una pedina posizionata in un angolo non può più essere girata</u>.
		Infatti non è possibile imprigionarla tra due pedine avversarie
		sulla stessa riga, colonna o diagonale.</p>

		<p>Inoltre, una volta che un angolo è occupato da una pedina, anche le pedine
		adiacenti orizzontalmente o verticalmente del medesimo colore non possono essere girate.
			Per esempio: tutte le pedine mostrate nel diagramma 1 non possono essere girate.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="pedine-stabili-diagramma-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: pedine stabili.
			</div>
		</div>

		<div class="card border-primary mb-3">
			<div class="card-header">Definizione</div>
			<div class="card-body">
				<p class="card-text">Chiamiamo <b>stabili</b> le pedine che non possono essere girate.</p>
			</div>
		</div>

		<p>Le pedine posizionate negli angoli sono sempre stabili, grazie alla loro particolare posizione sulla
		tavola.</p>

		<p>Altre pedine possono diventare stabili, per esempio se adiacenti a un angolo. Hai già visto il diagramma 1
		in cui tutte le pedine sono stabile. Ma ne possiamo aggiungere altre: anche tutte le pedine del diagramma 2
		sono stabili.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="pedine-stabili-diagramma-3a.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 2: pedine stabili.
			</div>
		</div>

		<p>Ma attenzione: non è sempre facile capire se una pedina è stabile o meno. Per esempio,
			la pedina G2 del diagramma 3 non è stabile perché può ancora essere girata con
		la mossa H3 del bianco. La stessa cosa vale per B3: può essere girata dal bianco muovendo in A4.
			Sono stabili, invece, tutte le pedine nere della colonna H.
			Come pure sono stabili le pedine nere della colonna A e la pedina in B1.
			Anche le pedine C1, D1, E1 ed F1 sono stabili: anche se non sono
		appoggiate a un angolo di uguale colore non possono essere girate.
		Non sono stabili, infine, le pedine bianche della riga 8: possono essere girate dal nero muovendo in B8
		(e diventano stabili).</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="pedine-stabili-diagramma-4a.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 3: la pedina G2 non è stabile.
			</div>
		</div>

		<p>Mettiti alla prova con il conteggio di pedine stabili. Nella posizione del diagramma 4, il nero ha un'unica
		pedina che, essendo in un angolo, è stabile. Sapresti dire quante delle 53 pedine bianche sono stabili?</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="pedine-stabili-diagramma-5.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 4: quante pedine stabili ha il bianco? (Esempio di Alessandro Di Mattei.)
			</div>
		</div>

		<p>Per tornare all'esempio della pagina precedente, il bianco ha perso perché aveva molte pedine
			instabili, che il nero è riuscito a girare in poche mosse.</p>

		<div class="card border-primary mb-3">
			<div class="card-header">Strategia</div>
			<div class="card-body">
				<p class="card-text">Non preoccuparti di massimizzare il numero di pedine del tuo colore.
				Preoccupati di <b>massimizzare il numero di pedine stabili</b>.</p>
			</div>
		</div>

		<p>Quindi <b>gli angoli sono caselle strategicamente molto importanti</b>.
			Se conquistati, possono aiutarti a raggiungere la vittoria.</p>

		<p>Attenzione: "possono aiutarti". Dopotutto un angolo è un'unica pedina che conta per 1 ai fini del
		punteggio. Ma se partendo da un angolo riesci a estendere il controllo su tutta la tavola, conquisterai
		la vittoria facilmente.</p>

		<p>Per esempio, nella
		situazione del diagramma 5, il nero può muovere nell'angolo H8; nella sua mossa successiva
		potrà poi giocare in H2, conquistando altre 6 pedine stabili; dopo ancora può giocare in C8
		e conquistare altre 5 pedine stabili.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="pedine-stabili-diagramma-5a.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 5: il nero può conquistare delle pedine stabili.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
