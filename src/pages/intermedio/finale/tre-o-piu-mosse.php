<H1>Il finale perfetto (2)</H1>

<p>Complichiamo leggermente la situazione e poniamoci in una situazione in cui 
ci siano tre caselle vuote: guarda il diagramma 1.</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="free-game-board" data-file="tre-o-piu-mosse-1.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 1: mossa al bianco.
	</div>
</div>

<p>Il modo migliore per rappresentare tutte le possibili sequenze è disegnare
l'albero delle mosse.</p>

<p>Un albero è un grafico formato da nodi e rami. Un ramo congiunge in modo
gerarchico due nodi: un nodo padre e un nodo figlio; da ogni ramo possono 
partire un qualunque numero di rami che porta ai nodi figli. La struttura
viene generata da un nodo unico chiamato "radice". Nodi che non hanno figli 
sono detti "foglie". Contrariamente agli alberi reali, la radice è solitamente
disegnata in alto, mentre le foglie sono disegnate in basso.</p>

<p>Nell'albero delle mosse, ogni nodo rappresenta una posizione. La radice 
rappresenta, in particolare, la posizione da cui si vuole iniziare l'analisi, mentre 
le foglie rappresentano le posizioni di fine partita. Ogni ramo, invece, rappresenta 
una mossa che porta da una posizione a un'altra.</p>

<p>In figura 1 ho rappresentato l'albero delle mosse a partire dalla posizione 
del diagramma 1: come vedi ho etichettato ciascun ramo con la mossa 
corrispondente e ho riportato nelle foglie il punteggio finale.</p>

<div class="card mx-auto my-3" style="width: fit-content; max-width: 100%;">
	<div class="card-body">
		<img src="albero1.gif" alt="L'albero delle mosse" class="card-img-top img-fluid">
	</div>
	<div class="card-footer text-body-secondary text-center">
		Figura 1: l'albero delle mosse.
	</div>
</div>

<p>Abbiamo 5 sequenze possibili e tre di queste portano il bianco alla
vittoria. Ma come devono comportarsi i giocatori per ottenere il miglior
risultato possibile?</p>

<p>Per analizzare il finale bisogna partire dalle foglie e andare a ritroso
verso la radice.</p>

<p>Partiamo dai nodi AA, AB, BA, BB, CA: in tutte queste posizioni il bianco ha
una sola mossa a 
disposizione, obbligata. Quindi se il bianco si troverà in una di queste
posizioni dovrà giocare il rispettivo ramo uscente, che evidenzio. Possiamo
dunque associare a tali nodi il punteggio finale (figura 2).</p>

<div class="card mx-auto my-3" style="width: fit-content; max-width: 100%;">
	<div class="card-body">
		<img src="albero2.gif" alt="L'albero delle mosse" class="card-img-top img-fluid">
	</div>
	<div class="card-footer text-body-secondary text-center">
		Figura 2: analisi del terzo livello.
	</div>
</div>

<p>Analizziamo ora il nodo A. Il nero ha due possibilità: se gioca in G2
perderà 30 a 34, se gioca in H1 vincerà per 33 a 31. &Egrave; chiaro quindi che
al nero conviene giocare H1. Quindi, a meno di errori, la posizione A porterà
il nero a vincere per 33 a 31 (e lo scrivo nel nodo) e la mossa che gli 
permetterà di fare questo è la H1 (che evidenzio). Similmente il nodo B:
il nero può giocare in G1 e perdere 30 a 34, oppure giocare in H1 e perdere
31 a 33. Per minimizzare i danni deve giocare in H1. Quindi la posizione B 
porterà il nero a perdere al meglio per 31 a 33 (e lo scrivo nel nodo) e la
mossa che gli permette di fare questo è la H1 (che evidenzio). Nella posizione
C, invece, il nero è obbligato e vincerà per 34 a 30.</p>

<div class="card mx-auto my-3" style="width: fit-content; max-width: 100%;">
	<div class="card-body">
		<img src="albero3.gif" alt="L'albero delle mosse" class="card-img-top img-fluid">
	</div>
	<div class="card-footer text-body-secondary text-center">
		Figura 2: analisi del secondo livello.
	</div>
</div>

<p>Giungiamo così alla radice: come deve muovere il bianco? Beh, ora l'albero
ci dice che (a meno di errori del nero) se il bianco gioca il G1 perde per 
33 a 31, se gioca in G2 vince per 31 a 33, se gioca in H1 perde per 34 a 30.
&Egrave; chiaro che il bianco dovrà quindi giocare in G2. Possiamo quindi affermare
che nella posizione iniziale il bianco può vincere al meglio per 31 a 33 e la
sequenza del finale perfetto è G2, H1, G1 (vedi figura 4).</p>

<div class="card mx-auto my-3" style="width: fit-content; max-width: 100%;">
	<div class="card-body">
		<img src="albero4.gif" alt="L'albero delle mosse" class="card-img-top img-fluid">
	</div>
	<div class="card-footer text-body-secondary text-center">
		Figura 2: analisi del primo livello e finale perfetto.
	</div>
</div>

<p>Comprendi ora cosa significa finale perfetto e come si deve calcolarlo? 
Bisogna costruire l'albero delle mosse e analizzarlo a ritroso in modo da
trovare per ciascun giocatore l'opzione migliore.</p>

<p>Noi abbiamo visto questo con tre caselle libere, ma il ragionamento è
fattibile con un qualunque numero di caselle vuote. Ovviamente l'albero tenderà
a crescere all'aumentare delle mosse da analizzare.</p>

<p>Umanamente è difficile analizzare alberi più profondi di 5/6 mosse, ma i
calcolatori fanno questo molto bene: i programmi migliori analizzano in poco 
tempo anche situazioni con 20/25 caselle libere. Ecco perché è così difficile
batterli nel finale!!!</p>

<p>Nel caso che abbiamo analizzato il finale perfetto è rappresentato da una sequenza
sola. Può
succedere che diverse sequenze portino al medesimo risultato. In questo caso
sarà indifferente giocare l'una o l'altra.</p>

<p>In teoria un calcolatore potrebbe anche partire dalla prima mossa, costruire
l'albero di tutte le mosse possibile e trovare, quindi, la partita "perfetta",
discostandosi dalla quale non si può (in teoria) ottenere un risultato migliore.
Perché questo non è ancora stato fatto lo spiego nella
<a href="complessita-othello.php">pagina finale del capitolo</a>.</p>

<h2>Tocca a te</h2>

<p>Il diagramma 2 mostra una posizione tratta dal libro di Brian Rose.
    Prenditi tutto il tempo necessario per costruire il diagramma di tutte le sequenze e determina il finale perfetto.
E poi giocalo. Riuscirai a vincere questa partita?</p>

<div class="card mx-auto board-card my-3">
	<div class="card-body">
		<div class="sequence-board" data-file="tre-o-piu-mosse-2.json"></div>
	</div>
	<div class="card-footer text-body-secondary text-center">
		Diagramma 2: trova il finale perfetto e giocalo.
	</div>
</div>
