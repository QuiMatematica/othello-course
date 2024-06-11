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

		<h1>I tempi di gioco</h1>

		<p>Ho copiato gli esempi e parte della spiegazione di questa lezione dal
		<a href="https://www.ffothello.org/strategie/livret-de-strategie/">French Othello Federation Booklet</a>,
		che ho trovato per questo argomento molto esaustivo.</p>
	
        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
