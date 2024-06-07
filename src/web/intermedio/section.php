<!DOCTYPE HTML>

<html lang="it">
<head>
    <?php include '../section/header.php' ?>
</head>

<body>

    <?php
    include '../classes/Navigator.php';

    $navigator = new Navigator();

    $navigator->header();
    $navigator->offcanvas();
    ?>

	<div id="othello-content" class="container-xxl mt-4">

        <?php $navigator->pagination() ?>

        <h1>Livello intermedio</h1>

        <p>Questa sezione contiene una trattazione completa delle strategie fondamentali
        dell'Othello. In particolare parleremo di:</p>

        <ul>
            <li><a href="pedine-stabili/chapter.php">pedine stabili</a>: l'importanza strategica degli angoli:</li>
            <li><a href="mobilita/chapter.php">mobilità</a>: perché è importante avere tante mosse a disposizione;</li>
<!--            <li>bordi: come sfruttarli e come attaccarli;</li>-->
            <li><a href="tempi-di-gioco/chapter.php">tempi di gioco</a>: come gestire zone ristrette della scacchiera;</li>
            <li><a href="apertura/chapter.php">apertura</a>: come giocare le prime mosse di ogni partita;</li>
<!--            <li>parità: perché è importante muovere per ultimo;</li>-->
<!--            <li>finale: cos'è il finale perfetto e come si trova.</li>-->
        </ul>

        <?php $navigator->pagination() ?>

    </div>

</body>
</html>
