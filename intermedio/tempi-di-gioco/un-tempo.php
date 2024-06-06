<!DOCTYPE HTML>

<html lang="it">
<head>
	<title>Othello: corso interattivo - Guadagnare un tempo di gioco</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../tao/othello.css#20240531">
    <script type="module">
        import { init } from "../../tao/othello.js#20240531";
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

		<h1>Guadagnare un tempo di gioco</h1>

		<p>Considera il diagramma 1. Le pedine esterne verso nord sono equamente divise
		tra i due giocatori.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="un-tempo-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: mossa al nero.
			</div>
		</div>

		<p>Tocca al nero che potrebbe decidere di muovere a nord (E2, D2, C2 sono tutte
		mosse ragionevoli), ma certamente preferirebbe che fosse il bianco a muovere
		per primo in quella regione allungandosi così il muro. Questa è una delle
		caratteristiche paradossali dell'Othello: è spesso svantaggioso dover muovere
		perché si girano pedine dell'avversario e si rischia di fornirgli un gran numero
		di mosse.</p>

		<p>Ora, se il nero non vuole giocare a nord, gli rimane solo giocare a sud. Deve
		quindi scegliere tra due mosse ragionevoli: C8 e D7. Cosa succede se gioca C8?
		Il bianco, che pure non vuole giocare a nord per primo, risponderà D7 e il nero
		è obbligato ad aprire il gioco a nord per primo (diagramma 2). Al contrario,
		se il nero gioca D7, l'unica mossa plausibile per il bianco a sud è C8 a cui il
		nero risponde B8 (diagramma 3). In questo caso diciamo che il nero ha
		guadagnato un tempo di gioco nella regione sud: ora è il bianco che deve
		iniziare a giocare a nord.</p>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="un-tempo-diagramma-2.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 2: la sequenza C8, D7.
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="un-tempo-diagramma-3.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 3: la sequenza D7, C8, B8.
					</div>
				</div>

            </div>
        </div>

		<div class="card border-primary mb-3">
			<div class="card-header">Definizione</div>
			<div class="card-body">
				<p class="card-text">Guadagnare un tempo significa giocare una mossa in più rispetto
		all'avversario in una data regione della scacchiera (spesso un bordo) e
		costringerlo a giocare altrove (spesso allungando i muri).</p>
			</div>
		</div>

		<p>I diagrammi 4 e 5 mostrano un altro esempio di guadagno di tempo. Anche in questo
		caso tocca al nero.</p>

		<p>Una possibile sequenza è data dalle mosse C8, G8 (diagramma 4), dopo la
		quale il nero non ha più mosse buone nel lato a sud (se infatti gioca F8 il
		bianco risponde facilmente in B8) e deve giocare a nord: non ha guadagnato
		il tempo di gioco sperato.</p>

		<p>Se invece il nero gioca F8, il bianco deve
		rispondere C8 a cui segue B8 e il bianco è costretto a muovere a nord (diagramma 5).</p>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="un-tempo-diagramma-4.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 4: la sequenza C8, G8.
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="un-tempo-diagramma-5.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 5: la sequenza F8, C8, B8.
					</div>
				</div>

            </div>
        </div>

		<div class="card border-primary mb-3">
			<div class="card-header">Strategia</div>
			<div class="card-body">
				<p class="card-text">Quando hai la possibilità di giocare su un bordo esamina chi farà l'ultima mossa.
				Se la farai tu, avrai guadagnato un tempo di gioco.</p>
			</div>
		</div>

		<h2>Tocca a te</h2>

		<p>Nel diagramma 6 tu giochi con il bianco. Non sei messo bene, ma guadagnando
		un tempo di gioco puoi costringere il nero a sfondare il tuo muro.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="sequence-board" data-file="un-tempo-diagramma-6.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 6: guadagna un tempo di gioco.
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
