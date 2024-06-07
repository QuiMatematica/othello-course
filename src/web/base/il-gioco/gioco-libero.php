<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php include '../../section/chapter/header.php' ?>
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

		<h1>Gioco libero</h1>

		<p>Puoi utilizzare la tavola che segue per giocare in libertà.
		&Egrave; possibile inserire solo mosse legali, e il programma gira in automatico tutte e sole le pedine corrette.</p>

		<p>Puoi usare questa tavola per allenarti nella visione di gioco, oppure per sfidare un amico.</p>

		<p>Buon divertimento!</p>
		
		<div class="mx-auto board-card mb-5" style="font-size: 16px">
			<div class="free-game-board"></div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
