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

		<h1>La compattezza</h1>

		<p>Un'ulteriore tecnica finalizzata a ridurre la mobilità dell'avversario è
		quella della compattezza, detta in inglese <i>curling into a ball</i> (letteralmente
		"arricciarsi a palla").</p>

		<p>L'idea è che <b>muovendo vicino alle pedine che hai già sulla scacchiera, offrirai
		meno pedine esterne e meno mosse all'avversario</b>.</p>

		<div class="card border-primary mb-3">
			<div class="card-header">Definizione</div>
			<div class="card-body">
				<p class="card-text">Le pedine di un colore si dicono <b>compatte</b> se le sue pedine
					sono tutte vicine tra di loro.</p>
			</div>
		</div>

		<p>Osserviamo la posizione del diagramma 1: la mossa è al nero.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="compattezza-diagramma-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1: la compattezza.
			</div>
		</div>

		<p>La mossa E7 consente al nero di conquistare la pedina interna E5. La mossa
		C4 costruisce un muro di 6 pedine. Tuttavia, dopo E7 il bianco ha 12 mosse, dopo
		C4 ne ha solo 9. Dal punto di vista della mobilità la mossa C4 è migliore,
		malgrado il muro.</p>

		<p>Una tecnica piuttosto empirica per misurare la compattezza di un colore
		in una posizione è il calcolo del numero di caselle di distanza tra le due
		pedine più lontane.
		Il numero di caselle va contato orizzontalmente, verticalmente o diagonalmente.
		Una formazione di pedine è tanto più compatto tanto più basso è questo
		numero, che potremmo chiamare diametro.</p>

		<p>Per esempio, se nel diagramma 1 il nero giocasse in E7, le due pedine più lontane
		sarebbero C3 e la stessa E7 che sono distanti 5 caselle (C3, D4, E5, E6, E7);
		se invece il nero giocasse in C4, le due pedine più lontane sarebbero C3 e C6,
		distanti 4 caselle (C3, C4, C5, C6).</p>

		<p>Ovviamente il diametro aumenta all'aumentare del numero di pedine sulla
		scacchiera. Quindi non ha valore assoluto, ma può essere usato solamente per
		confrontare due posizioni simili</p>

		<div class="card border-primary mb-3">
			<div class="card-header">Strategia</div>
			<div class="card-body">
				<p class="card-text">Per minimizzare la mobilità del tuo
					avversario, cerca di compattare le tue pedine.</p>
			</div>
		</div>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
