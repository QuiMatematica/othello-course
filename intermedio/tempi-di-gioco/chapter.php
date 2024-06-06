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

		<h1>I tempi di gioco</h1>

		<p>Ho copiato gli esempi e parte della spiegazione di questa lezione dal
		<a href="https://www.ffothello.org/strategie/livret-de-strategie/">French Othello Federation Booklet</a>,
		che ho trovato per questo argomento molto esaustivo.</p>
	
        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
