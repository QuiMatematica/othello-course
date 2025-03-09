<h1>Il finale perfetto con due caselle vuote</h1>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">In una posizione data, il <b>finale perfetto</b> è la sequenza
            di mosse che
garantisce a entrambi i colori il miglior risultato possibile.</p>
	</div>
</div>

<p>Se questa definizione ti sembra un po’ astratta, niente paura: vedremo insieme il metodo
    per calcolarlo, partendo dalla situazione più semplice, con solo due caselle libere,
    per poi affrontare <a href="tre-o-piu-mosse.php">scenari più complessi con tre o più
        caselle disponibili</a>.</p>

<p>Per un computer, determinare il finale perfetto è semplice: è solo una questione di calcoli
    e tempo. Per noi umani, invece, è più difficile, ma è fondamentale imparare a farlo
    almeno per le ultime 3-4 mosse di ogni partita.</p>

<h2>Un esempio pratico</h2>

<p>Osserva la posizione del diagramma 1: ci sono due caselle vuote e tocca al nero.
    Puoi provare liberamente le mosse nel diagramma; tornando indietro, tornerai sempre alla
    posizione iniziale.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="free-game-board" data-file="ultime-due-mosse-2.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 1: mossa al nero.
	</div>
</div>

<p><b>Analisi</b></p>
<ul>
    <li>Il nero ha due mosse disponibili: <b>A7</b> e <b>A8</b>.</li>
    <li>Se gioca in <b>A8</b>, il bianco risponde in <b>A7</b>, e il risultato finale è
        un pareggio.</li>
    <li>Se invece gioca in <b>A7</b>, il bianco risponde in <b>A8</b> e il Nero vince
        <b>33 a 31</b>.</li>
</ul>

<p><b>Conclusione</b></p>
<p>Il Nero deve scegliere la mossa <b>A7</b>, che gli assicura la vittoria.
    Il <i>finale perfetto</i> per questa posizione è quindi la sequenza <b>A7 → A8</b>.
    Possiamo inoltre dire che, in questa posizione, il nero <i>vince con il punteggio di 33 a 31</i>,
    perché il finale perfetto porta esattamente a questo risultato.

<h2>Come calcolare il risultato finale</h2>

<p>Nell’esempio precedente, abbiamo contato le pedine dopo aver giocato. Ma in una partita
    reale, non possiamo testare le mosse e poi annullarle. È quindi necessario un metodo
    per calcolare il risultato in anticipo.</p>

<p>Il segreto sta nel conteggio delle pedine girate. Per la prima mossa è semplice, ma per
    le successive bisogna ricordare quali pedine sono già state girate.</p>

<p>Ripartiamo dalla posizione iniziale del diagramma 1 che ripeto per comodità
qui sotto nel diagramma 2.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="match-file-board" data-file="ultime-due-mosse-2.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 2: ultime due mosse.
	</div>
</div>

<p>Questa volta il diagramma non ti permette di giocare. Cerca di calcolare
quante pedine vengono girate per ciascuna mossa in entrambe le sequenze
possibili.</p>

<p>Nella situazione di partenza
il nero ha 34 pedine, il bianco 28. Vediamo insieme cosa succede nella 
sequenza del finale perfetto.</p>

<p>Se il nero gioca in A7, aggiunge una pedina sulla tavola e gira 3 pedine (B7, C7 e D7).
    Poi il bianco gioca in
A8 e gira 5 pedine (B8, C8, B7 che è appena stata girata dal nero, C6 e D5).</p>

<p>Volendo calcolare quante pedine avrà alla fine il nero, bisogna fare questo
conteggio:</p>

<div class="table-responsive">
    <table class="table table-borderless mx-auto table-sm" style="border-bottom: none; table-layout: auto; width: auto">
        <tbody>
            <tr>
                <td>Posizione iniziale</td>
                <td>pedine del nero</td>
                <td class="text-end">34</td>
            </tr>
            <tr>
                <td>Il nero gioca A7</td>
                <td>pedina giocata</td>
                <td class="text-end">+1</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>pedine girate</td>
                <td class="text-end">+3</td>
            </tr>
            <tr>
                <td>Il bianco gioca A8</td>
                <td>pedine girate</td>
                <td class="text-end" style="border-bottom: 3px solid black;">-5</td>
            </tr>
            <tr>
                <td><b>Situazione finale</b></td>
                <td>&nbsp;</td>
                <td class="text-end"><b>33</b></td>
            </tr>
        </tbody>
    </table>
</div>

<p>Nota: alla mossa del nero, oltre alle pedine girate dobbiamo contare anche la
pedine giocata. Alla mossa del bianco, invece, non sottraiamo la pedina giocata
perché non era del nero.</p>

<p>Ti suggerisco come esercizio di provare a calcolare il risultato finale
per l'altra sequenza di mosse (A8, A7). Sai già che deve risultare un pareggio.</p>

<h2>Tocca a te</h2>

<p>Nel diagramma 3 giochi con il nero. Hai due mosse a disposizione: devi 
trovare e giocare l'unica vincente.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="sequence-board" data-file="ultime-due-mosse-3.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 3: il nero muove e vince.
	</div>
</div>
