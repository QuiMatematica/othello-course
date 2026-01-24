<p>Si dice che questo swindle è talmente micidiale che la maggior parte delle persone lo subisce una volta
sola.</p>

<p>Nella posizione del diagramma <span data-board-ref="boscov-1"></span>
    (tratta dal libro di Brian Rose
    <a href="https://www.fngo.it/allegati/brianrose_book(eng).pdf" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>)
    il nero si trova in una posizione discreta.
Probabilmente la sua mossa migliore è <b>E1</b>, che costringe il bianco a giocare verso nord, dando al nero nuove opportunità.
    Tuttavia, il nero non conosce lo swindle di Boscov e ne subisce pienamente gli effetti!</p>

<board data-type="show" data-label="boscov-1" data-file="boscov-1.json"></board>

<p>Questo swindle non si verifica molto spesso, ma ci porta a un'osservazione interessante: muovere vicino ai bordi
può portare facilmente a uno swindle.</p>

<h2>L'ordine delle mosse</h2>

<p>Prendiamo la posizione base che permette di giocare lo swindle di Boscov: diagramma
    <span data-board-ref="boscov-base"></span>.</p>

<board data-type="show" data-label="boscov-base" data-file="boscov-base.json"></board>

<p>In quale ordine vanno giocate le tre mosse dello swindle?</p>

<p>Se vogliamo ottenere tutti e tre i tempi di gioco, la prima mossa da fare è quella che
    toglie ogni accesso all'attaccato sul bordo, quindi
<b>B8</b>. Ma poi?</p>

<p>L'ordine delle altre due mosse dipende da cosa c'è sul bordo est. Infatti l'effetto della
    mossa in <b>E8</b> dipende dalle caselle <b>G6</b> e <b>H5</b>.</p>

<p>Senza pretendere di analizzare tutti i casi possibili, vediamo almeno quelli più comuni.</p>

<p>Se <b>G6</b> e <b>H5</b> sono occupate da pedine del colore attaccato (diagramma
    <span data-board-ref="boscov-base-2nere"></span>) allora la sequenza giusta è
<b>B8 - E8 - G8</b>.</p>

<p>Se invece <b>G6</b> e <b>H5</b> sono occupate da pedine del colore attaccante (diagramma
<span data-board-ref="boscov-base-2bianche"></span>) allora la sequenza giusta è
<b>B8 - G8 - E8</b>.</p>

<gather>
    <board data-type="show" data-label="boscov-base-2nere" data-file="boscov-base-2nere.json"></board>
    <board data-type="show" data-label="boscov-base-2bianche" data-file="boscov-base-2bianche.json"></board>
</gather>

<p>Se invece le caselle <b>G6</b> e <b>H5</b> sono occupate da pedine di colori diversi,
    non è più possibile
ottenere tutti e tre i tempi dello swindle. Infatti se il bianco gioca in <b>G8</b> il nero
si può incuneare in <b>E8</b>. Se invece il bianco gioca in <b>E8</b> gira anche <b>F7</b> e non
potrà più giocare in <b>G8</b>. Tra le due opzioni è chiaramente preferibile la seconda.
Vedi il diagramma <span data-board-ref="boscov-base-misto"></span>.</p>

<board data-type="show" data-label="boscov-base-misto" data-file="boscov-base-misto.json"></board>

<h2>Verificare prima di attaccare</h2>

<p>Il prossimo esempio è stato proposto dal maestro Paolo Scognamiglio.</p>

<p>Il bianco ha appena giocato la mossa che porterebbe allo swindle di Boscov ma, in questo caso, sarebbe un errore
giocarlo subito. Il diagramma <span data-board-ref="boscov-2"></span> mostra la sequenza sbagliata del nero.</p>

<board data-type="show" data-label="boscov-2" data-file="boscov-2.json"></board>

<p>Come avrebbe dovuto muovere il Nero? Ha la possibilità di predisporre la posizione in modo da poter realizzare lo swindle?
Studia il diagramma <span data-board-ref="boscov-3"></span>.</p>

<board data-type="show" data-label="boscov-3" data-file="boscov-3.json"></board>

<p>Questo esempio ci ricorda che è importante verificare che la manovra che abbiamo in mente di fare,
sia uno swindle di Boscov o un qualunque altro tipo di attacco, sia attuabile e che non ci siano
delle contromosse dell'avversario che la possono bloccare.</p>

<h2>Quando conviene rischiar</h2>

<p>Uno swindle di Boscov è sicuramente una trappola micidiale. Perdere tre tempi di gioco è
un costo troppo elevato.</p>

<p>Quindi quella mossa sul controbordo che consentirebbe all'avversario di attuare lo swindle
andrebbe evitata a tutti i costi.</p>

<p>Invece, come accade sempre nell'Othello, ci sono delle eccezioni.</p>

<p>Il diagramma <span data-board-ref="boscov-tastet"></span> mostra un posizione della
partita tra Henry Aspenryd e Mart Tastet all'EGP di Stoccolma del 2005. Tocca al nero
che non è in una posizione felice e, tra le mosse che ha a disposizione, <b>G3</b>
sembra essere la meno peggio. Ma è proprio quella mossa che potrebbe scatenare uno swindle
di Boscov.</p>

<p>In questo caso lo swindle non ha pieno effetto perché il nero lo può fermare giocando in
<b>G2</b>. La posizione si complica e diventa più difficile capire come muovere. Tanto che il
nero riesce a vincere la partita.</p>

<board data-type="show" data-label="boscov-tastet" data-file="boscov-tastet.json"></board>

<h2>Boscov, chi era costui?</h2>

<p>La risposta si può trovare nell'intervista a Jonathan Cerf, redattore della rivista americana
<i>Othello Quaterly</i>. Puoi trovare la versione completa dell'intervista sul sito della World Othello Federation
    <a href="https://www.worldothello.org/news/419/interview-with-jonathan-cerf" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-right"></i></a>).</p>

<blockquote class="border-start border-4 border-primary ps-3 my-4 fst-italic">
  <p class="mb-2">
      Per molti, moltissimi anni, io e il mio amico George Sullivan abbiamo co-diretto <em>Othello Quarterly</em>.
      Scrivere articoli per quella rivista diede a George e a me numerose occasioni per inventare nomi per varie
      aperture e posizioni di Othello. George è cresciuto a Reading, in Pennsylvania. In quella città, per molti anni,
      il principale commerciante fu un uomo di nome Al Boscov, presidente di una catena di grandi magazzini chiamata
      Boscov’s. Io e George attribuimmo per capriccio il nome “Boscov” a una posizione di bordo di Othello,
      come una sorta di scherzo interno, personale. Pensavamo che la posizione dovesse avere un nome,
      ma la scelta di quel nome fu del tutto arbitraria. In seguito, quando George incontrò Al Boscov a una festa,
      fu contento di poter dire al signor Boscov che avevamo intitolato a lui una posizione di Othello.
      Il signor Boscov non aveva la minima idea di cosa George stesse parlando.
  </p>
</blockquote>

<h2>Tocca a te</h2>

<p>Nel prossimo diagramma ti manca una pedina sul bordo ovest per predisporre la posizione adatta per lo swindle di
Boscov. Trova la mossa giusta e il tuo avversario commetterà l’errore che ti consentirà di giocare lo swindle di Boscov.</p>

<board data-type="quiz" data-label="boscov-quiz-1" data-file="boscov-quiz-1.json"></board>