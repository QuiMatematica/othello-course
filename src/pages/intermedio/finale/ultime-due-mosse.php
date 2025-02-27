<h1>Il finale perfetto (1)</h1>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Data una posizione, il <b>finale perfetto</b> è la sequenza di mosse che
garantisce a entrambi i colori il miglior risultato possibile.</p>
	</div>
</div>

<p>Per esperienza so che questa definizione lascia molte
perplessità, ma mostrandoti il meccanismo con cui si calcola il finale perfetto
penso di riuscire a fartene capire il senso. Partirò dalla
situazione più semplice in cui solamente
due caselle sono libere per arrivare subito dopo a
<a href="tre-o-piu-mosse.php">situazioni più complesse, con tre e più caselle
libere</a>.</p>

<p>Come vedremo trovare il finale perfetto è semplice per i
calcolatori (è solo una questione di calcoli e quindi di tempo), ma per noi uomini
è più complesso. Però bisogna imparare a farlo almeno per le ultime
3/4 mosse di ogni partita.</p>

<p>Consideriamo la posizione del diagramma 1. Ci sono due caselle vuote, 
nessuno ha dovuto passare quindi la mossa è al nero. Il diagramma ti consente
di giocare liberamente; tornando indietro arriverai 
sempre alla posizione di partenza.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="free-game-board" data-file="ultime-due-mosse-2.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 1: mossa al nero.
	</div>
</div>

<p>Il nero ha due mosse a disposizione. Se gioca in A8 il bianco deve rispondere
in A7 e il risultato è pari. Se il nero gioca A7 il bianco deve rispondere
A8 e il nero vince 33 a 31.</p>

<p>Al nero, quindi, conviene giocare la mossa A7 che gli permette di ottenere 
il risultato migliore. Il finale perfetto, quindi, è dato dalla sequenza
A7, A8. Inoltre nella posizione data si può dire che il nero vince 33 a 31,
perché il finale perfetto porta a questo risultato.</p>

<h2>Come calcolare il risultato finale</h2>

<p>Nell'esempio sopra, per determinare il risultato finale abbiamo giocato le 
pedine e poi contato. Questo, ovviamente, non è possibile in partita perché
non puoi provare a giocare per poi ritirare le mosse. &Egrave; necessario, quindi,
un modo per calcolare il risultato senza giocare.</p>

<p>Il conteggio si basa sulle pedine che vengono girate. Per 
la prima mossa è banale, per le altre
bisogna ricordare quali pedine sono state girate nelle mosse precedenti.</p>

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

<p>Se il nero gioca in A7, gira 3 pedine (B7, C7 e D7). Poi il bianco gioca in 
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

<p>Nota: alla mossa del nero, oltre alle pedine girate devi contare anche la 
pedine giocata. Alla mossa del bianco, invece, non sottrai la pedine giocata 
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
