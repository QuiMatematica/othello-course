<!DOCTYPE HTML>

<html lang="it">
<head>
	<title>Othello: corso interattivo - I tempi di gioco</title>
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

		<h1>I tempi di gioco</h1>

		<p>Ho copiato gli esempi e parte della spiegazione di questa lezione dal
		<a href="https://www.ffothello.org/strategie/livret-de-strategie/">French Othello Federation Booklet</a>,
		che ho trovato per questo argomento molto esaustivo.</p>
	
        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
