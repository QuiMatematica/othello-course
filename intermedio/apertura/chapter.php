<!DOCTYPE HTML>

<html lang="it">
<head>
	<title>Othello: corso interattivo - L'apertura</title>
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

		<h1>L'apertura</h1>

		<p>In ogni partita, le prime mosse hanno un ruolo del tutto particolare:
		impostano la struttura del gioco. Ci sono aperture, per esempio,
		che sbilanciano la posizione verso un bordo, altre che prevedono di prendere il
		controllo della situazione aumentando il numero delle proprie pedine, altre,
		infine, che si sviluppano secondo il concetto più classico di controllo del
		centro.</p>

		<p>Malgrado gli studi compiuti, fatti anche con l'aiuto di computer,
		è difficile stabilire quasi siano i criteri che fanno considerare migliori alcune
		apertura rispetto ad altre. Le varianti sono troppe numerose. Dopotutto
		quando ci sono poche pedine sulla tavola, ogni mossa cambia sensibilmente
		la situazione.</p>

		<p>Ogni sequenza andrebbe studiata e analizzata continuamente,
		seguendo le varie continuazioni possibili fino a una situazione più definita,
		dopo circa 15-20 mosse, dove si può esprimere un giudizio più definitivo sul suo
		valore.</p>

		<p>Fino a una ventina d'anni fa, questo lavoro di analisi veniva fatto manualmente,
		giocando e rigiocando la stessa apertura. Ogni giocatore arrivava così a ottenere un
		proprio catalogo di aperture e talvolta la bravura di un giocatore era data dalla
		vastità del proprio catalogo. A tale proposito è rimasto storico il quadernino
		dove il compianto Francesco Marconi riportava i propri studi;
		qualunque maestro avrebbe desiderato dare una sbirciatina a quelle pagine.</p>

		<p>Al giorno d'oggi questo lavoro è più semplice: basta utilizzare un buon
		programma di analisi (come Saio o Zebra) che hanno già analizzato
		in modo sistematico tutte le sequenze più promettenti a profondità impensabili
		per un solo uomo. Basta quindi guardare come vengono valutate le sequenze e
		comprendere quanto buona può essere la posizione a cui portano.</p>

		<p>A questo punto il lavoro è puramente mnemonico e ancora la preparazione di
		un giocatore si può misurare nella quantità di aperture che ha appreso e sa
		gestire.</p>

		<p>Il bagaglio strategico e tattico di un giocatore entra in gioco solo
		al termine delle sequenze memorizzate. Questo può succedere dopo una lunga
		sequenza di mosse se l'apertura giocata dai contendenti è conosciuta, oppure
		anche nelle prime mosse se uno dei due gioca una variante non prevista.
		Quindi anche il fattore sorpresa può essere importante: l'avversario potrebbe
		non essere in grado di trovare la sequenza migliore e compiere quindi degli
		errori che lo portano presto in svantaggio. Certamente la preparazione e
		l'esperienza di un maestro è imbattibile anche in questi casi.</p>

		<p>Nelle poche pagine di questa lezione riporterò alcune considerazioni
		generali sulle aperture e un piccolissimo catalogo di aperture: da qui
		può iniziare il tuo studio personale. Tieni comunque conto che è meglio conoscere
		a fondo poche aperture (anche solo tre o quattro) e alcune loro varianti, piuttosto
		che conoscerne molte in modo approssimativo.</p>

        <?php $navigator->pagination() ?>

	</div>

</body>
</html>
