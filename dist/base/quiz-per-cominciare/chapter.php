<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php include '../../header-chapter.php' ?>
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

		<h1>Piccoli quiz per cominciare</h1>

		<p>Questo capitolo contiene dei piccoli quiz finalizzati a prendere confidenza
		con le regole del gioco.</p>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
