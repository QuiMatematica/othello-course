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

		<h1>Le regole</h1>

		<h2>Posizione iniziale</h2>

		<p>Si gioca in due, su una tavola quadrata suddivisa in 64 caselle disposte su una griglia 8x8.
		Il colore della tavola è solitamente verde. (In pratica è una scacchiera monocromatica.) Si usano 64 pedine
		bicolori, bianche su un lato e nere sull'altro. Un giocatore ha il nero,
		l'avversario il bianco (se non siete
		d'accordo lanciate in aria una pedina).</p>

		<p>Una pedina appartiene al giocatore nero quando mostra la faccia nera e,
		viceversa, appartiene al bianco quando mostra la faccia bianca.</p>

		<p>La disposizione iniziale delle pedine sulla tavola &egrave; quella mostrata
		dal diagramma 1; inizia a giocare il nero.
		</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="le-regole-posizione-iniziale.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: la posizione iniziale.
			</div>
		</div>

		<h2>La mossa</h2>

		<p>Al proprio turno, ogni giocatore poggia una pedina, con la faccia del
		proprio colore rivolta verso l'alto, su una casella ancora vuota,
		adiacente a una pedina avversaria.
		Le pedine avversarie imprigionate (in orizzontale, verticale o diagonale)
		tra la pedina appena posata e quelle proprie gi&agrave; presenti vengono
		girate, diventando cos&igrave; del colore di chi ha appena giocato.</p>

		<p>Per esempio, al suo primo turno, il giocatore nero pone una pedina
		in D3. In tale modo rimane imprigionata la pedina bianca D4 (e nessun'altra):
		questa pedina viene girata e diventa nera. Clicca sul pulsante 'avanti' del
		diagramma 2 per vedere l'effetto.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="le-regole-prima-mossa-in-D3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2: il nero muove in D3 e gira la pedina in D4.
			</div>
		</div>

		<p>Il diagramma 3 mostra una situazione pi&ugrave; avanzata della precedente:
		se il nero gioca in C5, imprigiona e gira ben 9 pedine bianche.
		Clicca sul pulsante 'avanti' per vedere l'effetto.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="le-regole-mossa-in-C5.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3: il nero muove in C5 e gira 9 pedine.
			</div>
		</div>

		<p>Ogni giocatore, al proprio turno, &egrave; obbligato a giocare
		posando una pedina in maniera da imprigionare almeno un disco
		avversario; non pu&ograve; porre una pedina in una casella senza girare dischi
		avversari, n&eacute; girare meno pedine di quelle richieste, n&eacute; rinunciare alla mossa.
		Inoltre le pedine non possono essere mangiate, n&eacute; spostate.</p>

		<p>Nel caso in cui un giocatore non avesse mosse legali, deve passare, e tocca
		nuovamente all'avversario. Per esempio, nel diagramma 4 il nero ha appena
		giocato in G8; il bianco non ha alcuna mossa legale, quindi passa.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="le-regole-il-bianco-passa.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4: il bianco non ha mosse legali e passa.
			</div>
		</div>

		<p>Il gioco prosegue fino all'esaurimento delle mosse legali per entrambi i
		giocatori. In genere ci&ograve; capita dopo aver riempito interamente di pedine
		la tavola, ma si possono presentare situazioni in cui ci sono caselle
		libere e nessuno dei due giocatori pu&ograve; muovere.
		</p>

		<h2>Scopo del gioco</h2>

		<p><b>Vince il giocatore che, dopo che &egrave; stata giocata l'ultima mossa legale,
		ha pi&ugrave; pedine dell'avversario.</b> In caso di un numero uguale di pedine,
		la partita &egrave; dichiarata patta.</p>

		<p>Per esempio, nella situazione del diagramma 5, il nero vince per 35 a 29.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="le-regole-partita-finita.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 5: la partita &egrave; finita: il nero vince per 35 a 29.
			</div>
		</div>

		<p>La differenza di pedine pu&ograve; essere una misura della vittoria: se ad esempio
		tra due giocatori due partite terminano col risultato di 37 a 27 e di 20 a 44,
		si pu&ograve; dire che, a parit&agrave; di numero di vittorie, il secondo giocatore vince
		per differenza pedine.</p>

		<p>Se un giocatore elimina tutte le pedine avversarie in un qualunque
		momento dell'incontro &egrave; dichiarato vincitore per 64 a 0.</p>

		<p>Se rimangono delle caselle libere, vengono assegnate al vincitore, in modo che
		la somma dei punti faccia sempre 64.</p>

        <?php $navigator->pagination() ?>

	</div>
</body>
</html>
