<h1>Area di gioco e area di appoggio</h1>
<p><b>adattato da: Francesco Marconi, <i>Teoria dell'Othello - prima parte</i>, Othello News - anno X - n. 1 - 1994.</b></p>

<p>Vediamo quale gioco può essere <i>indicativamente</i> adottato per limitare l'effetto dell'influenza.</p>

<p>Per fare ciò prendiamo in esame i diagrammi 1 e 2.</p>

<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="definizione-influenza-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="definizione-influenza-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2.
			</div>
		</div>

	</div>
</div>

<p>Questa volta non voglio soffermarmi su noiosi calcoli matematico-statistici, ma voglio porre l'accento, invece,
sulla forma che hanno le due posizioni e introdurre il concetto di <b>area di gioco</b>
(<i>piano di gioco</i>, nell'articolo di Marconi, ma trovo che la parola <i>area</i> sia più rappresentativa NDR).</p>

<p>I diagrammi 1 e 2 sono replicati nei diagrammi 3 e 4 ma questa volta rappresentati come <i>insiemi di pedine</i>,
ossia soffermandoci solo sulla forma che le pedine hanno sulla scacchiera.</p>

<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="area-di-gioco-3.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 3.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="area-di-gioco-4.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 4.
			</div>
		</div>

	</div>
</div>

<p>Permettetemi a questo punto una nota psicologica: molto spesso si tende a eseguire determinate mosse solo a
seguito di un calcolo molto accurato, apparentemente più sicuro, cercando così di prevedere in che modo potrà
evolversi la partita. Ma molto importante è anche prendere in esame degli elementi più astratti come può essere la
creazione, magari anche solo mentale, di una forma, di un disegno geometrico da dare alle pedine sulla scacchiera.
    Così facendo notiamo infatti nei diagrammi 3 e 4 due posizioni strutturate in modo molto diverso.</p>

<p>La prima differenza che ci colpisce è la diversa compattezza che hanno le pedine nere, scarsa nel diagramma 3
e fortissima nel diagramma 4. Inoltre, e ci soffermeremo su questo concetto, nel diagramma 4 notiamo il nero
al <b>centro</b>, tra due insiemi di pedine bianche. &Egrave; proprio questo centro il fulcro del discorso
che vogliamo impostare.</p>

<p>Prima di continuare abbiamo però bisogno di introdurre il concetto di area di gioco, partendo dai diagrammi
5 e 6 disegnati a partire dai diagrammi 3 e 4.</p>

<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="area-di-gioco-5.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 5.
			</div>
		</div>

	</div>
	<div class="col">

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="area-di-gioco-6.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 6.
			</div>
		</div>

	</div>
</div>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>area di gioco</b> di un colore la zona di tavola formata da case libere
        vicina alle pedine esterne avversarie e opposta alle pedine di appoggio proprio.</p>
        <p class="card-text">Questa zona di pedine di appoggio la chiamiamo <b>area di appoggio</b>.</p>
	</div>
</div>

<p>Potremo definire l'<i>area di gioco</i> anche <i>direzione di gioco</i> in quanto è in quel senso, in quella
direzione, che il giocatore dovrà sviluppare il proprio gioco. Nei diagrammi 5 e 6 la direzione di gioco è stata
indicata da un vettore che parte da un gruppo di pedine di appoggio ed ha come direzione l'insieme di case libere
su cui, da qui, è possibile muovere. Identifica perciò l'insieme di case libere su cui un giocatore potrà eseguire
le proprie mosse.</p>

<p>Prendiamo in esame i diagrammi 5 e 6 e notiamo come si differenziano i due piano di gioco del nero.</p>

<p>Per il diagramma 5 abbiamo una configurazione centripeta, ossia i vettori partono da zone diverse (diverse aree
di appoggio) ma si incontrano tutti nella stessa zona di caselle libere (nella stessa area di gioco).</p>

<p>Per il diagramma 6 la situazione è opposta, cioè la configurazione è centrifuga, con vettori che partono da una
zona comune (stessa area di appoggio) e si dirigono verso zone di case libere distinte (diverse aree di gioco).</p>

<p>&Egrave; importante comunque sottolineare che se anche si ha la possibilità di impostare una certa direzione di gioco
ciò non significa che questa si conveniente, perciò non è detto che tutte e quattro le direzioni di gioco del diagramma
6 siano valide (per l'esattezza lo sono solo le due direzioni tendenti verso le due parti a sinistra della scacchiera).</p>

<p>Notiamo inoltre che non tutti i piani di gioco hanno lo stesso valore. Infatti nel diagramma 6 tutto il piano nord
della scacchiera, la parte superiore, è molto più ampio che le due zone a sud. Perciò il gioco futuro di bianco e nero,
se non da subito, molto presto si concentrerà su queste zone, ed è perciò molto importante poter sviluppare su di esse
    il proprio gioco. Chi ci riuscirà si sarà assicurato un buon numero di mosse.</p>

<p>I diagramma 5 e 6 rappresentano due casi limite del nostro discorso, ma ci permettono di spiegare e capire in modo
alternativo il concetto di influenza. Infatti, come nel diagramma 5, l'influenza tende a essere alta qualora
la configurazione della posizione tenda a essere centripeta, tendente verso un unico punto partendo da zone diverse.
Infatti quando eseguirò una mossa su questo piano di gioco avrò diverse pedine di appoggio che da diverse zone
della scacchiera avranno influenza sulle stesse case, e mi troverei a girare più pedine esterne secondo le diverse
direzioni.</p>

<p>Mentre, è il caso del diagramma 6, sarà minore se la configurazione delle direzioni di gioco sarà centrifuga con
il risultato che all'atto dell'esecuzione di una mossa le pedine che avranno influenza proverranno da un solo punto.</p>

<p>In generale il possesso di una posizione di centro ci assicura un'area di gioco di tipo centrifugo, mentre, al
contrario, una posizione estremamente spezzettata, originerà un'area di gioco di tipo centripeta, con conseguente
aumento della propria influenza.</p>

<p>Da ultimo notiamo che una posizione di cui abbiamo il possesso del centro sarà sempre compatta (ossia le pedine
del proprio colore una vicina all'altra), altrimenti, se sparpagliata, non potremo avere il centro. Cio è anche
evidente in quanto il centro della posizione è un unico punto.</p>

<p>Attenzione però: quando parliamo di centro non dobbiamo intendere il centro della scacchiera, bensì il centro
delle pedine disposte sulla scacchiera. Non sempre le due cose coincidono. Infatti il contro della scacchiera
è formato dal quadrato più interno di gioco, ma nel diagramma 7 il centro della tavola in realtà è leggermente
spostato verso il bordo sinistro ed è in possesso del bianco.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="area-di-gioco-7.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 7.
    </div>
</div>
