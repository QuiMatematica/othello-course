<p>Se hai avuto occasione di partecipare a qualche torneo dal vivo, ti sarà sicuramente capito di sentire parlare
di <i>swindle</i>, e di come questi <i>swindle</i> hanno permesso di vincere con un grande margine di pedine o
di ribaltare una partita apparentemente già persa.</p>

<p>Ma non è facile definire cosa sia uno <i>swindle</i>. La traduzione in italiano potrebbe essere <i>truffa</i>,
e direi che rende molto bene l'idea.</p>

<p>Partirei dalla definizione che ne dà Brian Rose sul suo libro (disponibile sul sito della F.N.G.O. al seguente
link:
<a href="https://www.fngo.it/allegati/brianrose_book(eng).pdf" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>
).</p>

<p>Capita spesso che due caselle libere siano fortemente legate, tanto che se un giocatore gioca in una delle due,
all'avversario conviene giocare nell'altra. Rose in questo caso parla di <i>coppie</i>.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>coppia</b> un insieme di due caselle tali che, se un giocatore muove in
            una, all'avversario è conveniente rispondere nell'altra.</p>
	</div>
</div>

<p>Il caso più semplice di <i>coppia</i> è una regione formata da due caselle, come quella presente a nord-ovest
nel diagramma <span data-board-ref="swindle-1"></span>. Se il nero gioca in <b>A1</b> il bianco risponde in
<b>B1</b>, incuneandosi, ottenendo l'accesso all'angolo <b>H1</b> ma soprattutto giocando l'ultima mossa della
regione.</p>

<board data-type="show" data-label="swindle-1" data-file="swindle-1.json"
       data-caption="Una coppia."></board>

<p>Ma cambiamo colore alla pedina <b>C3</b>: vedi il diagramma <span data-board-ref="swindle-2"></span>. Se il nero gioca
in <b>A1</b> non gira la pedina <b>B2</b> e il bianco non può rispondere in <b>B1</b>. Il bianco è stato
<i>truffato</i>: ha subito uno <i>swindle</i>.</p>

<board data-type="show" data-label="swindle-2" data-file="swindle-2.json"
       data-caption="Una coppia."></board>

<p>Quindi, Rose dà la seguente definizione di <i>swindle</i>.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Uno <b><i>swindle</i></b> avviene quando un giocatore muove in una <i>coppia</i>,
            ma l'avversario non ha mosse legali per rispondere nella casella restante, permettendo che il
            primo giocatore ottenga entrambe le mosse nella coppia stessa.</p>
	</div>
</div>

<p>Rose precisa inoltre che ci sono delle situazioni in cui un giocatore muove in entrambe le caselle di una coppia
soltanto perché all'avversario non è conveniente rispondere nella coppia stessa. In questo caso non si parla di
<i>swindle</i>. Uno <i>swindle</i> accade solo quanto l'avversario <u>non può</u> giocare nella seconda casella.</p>

<h2>Non solo regioni</h2>

<p>Non è detto che una <i>coppia</i> corrisponda a una regione. Potrebbero essere due caselle di una regione molto
più ampia ma comunque legate tra loro. Un esempio è la coppia formata da una casella C e una casella A di un bordo
su cui è presente un quattro sbilanciato, come le caselle <b>B1</b> e <b>C1</b> del diagramma
<span data-board-ref="swindle-3"></span>.
Se il bianco gioca in <b>C1</b>, il nero dovrebbe rispondere in <b>B1</b>. E se il nero per disgrazia fosse costretto
a giocare in <b>B1</b>, il bianco risponderebbe in <b>C1</b> incuneandosi e ottendo l'accesso a entrambi gli angoli.</p>

<board data-type="show" data-label="swindle-3" data-file="swindle-3.json"
       data-caption="Una coppia."></board>

<p>Ma cosa succede se dopo la mossa del nero in <b>B1</b> il bianco non può rispondere in <b>C1</b>? Il bianco
verrebbe <i>truffato</i>: subirebbe uno <i>swindle</i>. &Egrave; quello che accade nel diagramma
<span data-board-ref="swindle-4"></span>.</p>

<board data-type="show" data-label="swindle-4" data-file="swindle-4.json"
       data-caption="Una coppia."></board>

<h2>Non solo coppie</h2>

<p>Tuttavia legare il concetto di <i>swindle</i> a quello di <i>coppia</i> risulta riduttivo.</p>

<p>Lo stesso Rose, giustamente, fa esempi di regioni formate da quattro caselle in cui uno dei due colori viene
truffato: il truffatore riesce a giocare tre delle quattro mosse disponibili e il truffato solo una.
Ne è un esempio la sequenza proposta nel diagramma <span data-board-ref="swindle-5"></span>.</p>

<board data-type="show" data-label="swindle-5" data-file="swindle-5.json"
       data-caption="Una coppia."></board>

<p>Inoltre nei prossimi capitoli vedremo degli <i>swindle</i> che permetteranno di giocare anche più di due mosse di
seguito senza che l'avversario abbia nessuna possibilità di replica nella stessa zona.</p>

<h2>Una definizione più completa</h2>

<p>Per tentare di dare una definizione di <i>swindle</i> che consideri tutti i casi secondo me possiamo basarci
    sul concetto di <a href="../../intermedio/tempi-di-gioco/chapter.php">tempo di gioco</a>.</p>

<p>Prova a ripercorrere gli esempi di questa pagina. Vedrai che dove c'è stato uno <i>swindle</i> il giocatore
truffatore ha sempre guadagnato due tempi di gioco nella zona dove ha giocato.</p>

<p>Ma dobbiamo tenere conto che i tempi di gioco possono essere anche più di due. Quindi...</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Uno <b><i>swindle</i></b> avviene quando un giocatore guadagna due o più tempi di gioco
            nella stessa zona della tavola.</p>
	</div>
</div>

<h2>Cosa troverai</h2>

<p>Esistono tantissime forme di <i>swindle</i>. Non è necessario conoscerle tutte a memoria ma vale la pena vederle
e capire se saremmo in grado di giocarle in partita.</p>

<p>Ho pertanto diviso il materiale sugli swindle in tre capitoli.</p>

<p>In questo capitolo introduttivo presento solo le forme più generali, ovvero:</p>
<ul>
    <li>giocare due mosse in una regione a due;</li>
    <li>giocare tre mosse in una regione a quattro.</li>
</ul>

<p>Nel prossimo capitolo invece ti presento gli <i>swindle</i> più importanti e famosi, quelli che hanno meritato
di essere ricordati con il nome di un giocatore. Quindi parleremo di:</p>
<ul>
    <li>lo <i>swindle</i> di Boscov;</li>
    <li>la manovra Landau;</li>
    <li>la manovra semi-Landau</li>
</ul>

<p>Nel terzo capitolo della serie ti presento il catalogo di <i>swindle</i> che non sono ricordati con il nome
    di un giocatore.</p>