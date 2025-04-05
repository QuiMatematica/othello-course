<h1>La definizione di influenza</h1>
<p><b>di Francesco Marconi, dall'articolo "Teoria dell'Othello" pubblicato su Othello News - anno X - n. 1 - 1994.</b></p>

<p>Un criterio guida nella scelta della mossa da giocare può essere quello di vedere il numero di mosse che essa lascia
    a noi e al nostro avversario. Cercheremo di raggiungere posizioni che ci lascino il maggior numero di mosse a
    disposizione e che ne lascino il minimo al nostro avversario.</p>

<p>Vediamo ora in che modo raggiungere questo obiettivo.</p>

<p>Dobbiamo innanzitutto tener conto di quanto ci dicono le regole del gioco:
per poter eseguire una mossa è necessario porre una pedina dal lato del proprio colore su una casa vuota
della scacchiera in modo tale che tra la pedina posta e una o più pedine già presenti in quel momento
rimangono incastrate in una o più direzioni una o più pedine avversarie.
Ciò significa che:</p>

<ol>
    <li>Provando a eseguire una mossa si nota come la nostra casa vuota dovrà confinare con una casa in cui sia
    presente una pedine avversaria nell'appropriata direzione. In generale esiste una correlazione tra quantità
    di pedine esterne avversarie e il numero di mosse a mia disposizione: all'aumentare di uno aumenta
    anche l'altro. Sarà allora necessario, quando noi eseguiremo una mossa, far sì che non aumenti </li>
</ol>

<p>TODO</p>

<p>Prendiamo in esame i digrammi 1 e 2. In entrambi deve muovere il nero. In
entrambi il nero e il bianco hanno lo stesso numero di pedine. Però nel diagramma
1 il nero è in svantaggio. Cosa cambia tra le due posizioni?</p>

<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="definizione-influenza-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1: mossa al nero.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="definizione-influenza-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2: mossa al nero.
			</div>
		</div>

	</div>
</div>

<p>Da quanto abbiamo visto nelle precedenti lezioni, puoi già affermare che nel
diagramma 1 il nero è in svantaggio perché le sue pedine sono sparse, mentre
nel diagramma 2 sono molto più compatte e controllano il centro della formazione.</p>

<p>Quello che voglio ora sottolineare è che proprio questa diversa disposizione
delle pedine fa sì che nel diagramma 1 il nero con una singola mossa rischia di
girare contemporaneamente diverse pedine esterne dell'avversario, cosa che non si
verifica nel diagramma 2. La situazione è esplicitata nel diagramma 3: con la mossa
D2, per fare l'esempio più appariscente, il nero gira in una sola volta ben quattro
delle sette pedine esterne bianche, togliendosi in questo modo un gran numero
di mosse e dando origine a nuove pedine esterne questa volta a vantaggio del
bianco.</p>

	<p align="center">
	<img src="DallaPraticaAllaTeoria1.gif" width="231" height="231" alt="" border="0">
	<br>
	Diagramma 3: le direzioni in cui la mossa D2 gira pedine.
	</p>

<p>In casi come questi si dice che il nero ha una grande <b>influenza</b> sulle pedine
bianche.</p>

<h2>Definizione di influenza</h2>

<p>In una determinata una posizione, <b>una pedina X del colore C ha influenza
su una casella Y</b> se il giocatore C può muovere in Y utilizzando X come
pedina di sponda.</p>

<p>In una determinata posizione, <b>l'influenza del colore C su una casella Y</b>
è il numero di pedine sponda utilizzate dal giocatore C per muovere in Y.</p>

<p>In una determinata posizione, <b>l'influenza del colore C</b> è data dalla media
delle influenze di C sulle caselle in cui può giocare.</p>

<p>Ti ricordo che una tua pedina è di sponda in una mossa se la utilizzi,
insieme a quella che stai giocando, per girare le pedine avversarie.

<p>Consideriamo i diagrammi 3 e 4 e calcoliamo
l'influenza su ciascuna casella in cui il nero può giocare una mossa non rischiosa
(escludo cioè le caselle X e le caselle C che danno con certezza un angolo)
e quella globale del colore.</p>

	<p align="center">
	<table border="0" width="90%">
	  <tr><td align="center" valign="bottom">
<table border="1">
  <tr><th>Mossa</th><th>Influenza</th></tr>
  <tr><td align="center">E1</td><td align="center">1</td></tr>
  <tr><td align="center">G1</td><td align="center">1</td></tr>
  <tr><td align="center">C2</td><td align="center">2</td></tr>
  <tr><td align="center">D2</td><td align="center">3</td></tr>
  <tr><td align="center">E2</td><td align="center">3</td></tr>
  <tr><td align="center">A3</td><td align="center">1</td></tr>
  <tr><td align="center">B3</td><td align="center">2</td></tr>
  <tr><td align="center">A4</td><td align="center">1</td></tr>
  <tr><td align="center">media</td><td align="center">1,7</td></tr>
</table>
      </td>
	  <td align="center" valign="bottom">
<table border="1">
  <tr><th>Mossa</th><th>Influenza</th></tr>
  <tr><td align="center">F2</td><td align="center">1</td></tr>
  <tr><td align="center">H2</td><td align="center">1</td></tr>
  <tr><td align="center">A3</td><td align="center">1</td></tr>
  <tr><td align="center">B6</td><td align="center">3</td></tr>
  <tr><td align="center">media</td><td align="center">1,5</td></tr>
</table>
	  </td></tr>
	  <tr><td align="center">
		Tabella 1: l'influenza del nero nel diagramma 1.
      </td>
	  <td align="center">
		Tabella 2: l'influenza del nero nel diagramma 2.
	  </td></tr>
	</table>
	</p>

<p>E' chiaro che per eseguire una mossa è indispensabile avere influenza sulla
casella dove si vuole giocare. Ma se l'influenza sulla casella è alta la mossa
sarà svantaggiosa perché girerà pedine in diverse direzioni, ne girerà tante e
soprattutto girerà più di una pedina di appoggio, come nel caso della mossa D2
o della mossa E2 nel diagramma 1.</p>

<p>Possiamo quindi parlare di <b>influenza negativa</b> come di quell'influenza
(possibilità di giocare in una casella) che tende a peggiorare la nostra
posizione.</p>

<p>Da tutto ciò deriva che un'alta influenza su una casella è un'influenza
negativa. L'influenza del colore offre un parametro che, quando troppo elevato,
ci dice che buona parte delle mosse sono negative e che, quindi, la posizione
potrebbe non essere buona.</p>

<p>A quanto ho precedentemente detto sulla
<a href="../../StrategieFondamentali/LaMobilita/index.html">mobilità</a>, questo discorso
aggiunge un legame più forte tra numero di mosse a disposizione e pedine di
appoggio. Quando cioè abbiamo un'alta influenza su una casella significa che,
oltre ad utilizzare più pedine di sponda, stiamo anche utilizzando più pedine
di appoggio, quindi stiamo peggiorando la nostra mobilità. Quindi, un modo per
utilizzare bene le pedine di appoggio a propria disposizione è giocare mosse
con bassa influenza.</p>

<p>Vediamo, per esempio, il diagramma 5: il bianco ha, verso nord, quattro pedine
di appoggio a disposizione. Sembrerebbe che abbia quattro mosse a disposizione,
invece no, perché anche con la mossa C2 (quella con influenza più bassa) gira
due pedine di appoggio e quindi perde due possibilità con una mossa sola. Se
la sua influenza fosse stata minore, tale da fargli girare un'unica pedina
di appoggio, forse poteva giocare tutte e quattro le mosse.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="definizione-influenza-5.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
    	Diagramma 5: influenza, mobilità e pedine di appoggio.
    </div>
</div>