<p>Stoccolma, Campionato Mondiale del 2003. Al decimo turno di gioco si incontrano i due giocatori più forti
del momento: il giapponese Makoto Suekuni con il nero e lo statunitense Ben Seeley con il bianco.</p>

<p>Spoiler: Suekuni e Seeley saranno i finalisti di quel mondiale, vinto dall'americano.</p>

<p>Il diagramma <span data-board-ref="suekuni-trap-1"></span> mostra la partita dalla mossa 35 alla mossa 38.</p>

<board data-type="show" data-label="suekuni-trap-1" data-file="suekuni-trap-1.json"></board>

<p>Analizziamo per bene gli effetti dell'ultima mossa giocata da Ben Seeley.</p>

<p>Giocando in <b>H4</b> Seeley ha voltato la pedina <b>G3</b> (diagramma <span data-board-ref="suekuni-trap-2"></span>).</p>

<board data-type="show" data-label="suekuni-trap-2" data-file="suekuni-trap-2.json"></board>

<p>Girando la pedina <b>G3</b>, si forma una regione formata da cinque caselle. L'elemento interessante è che l'unica
mossa a disposizione del bianco è <b>H2</b>, che ovviamente offre la scontata risposta in <b>H1</b>
    (diagramma <span data-board-ref="suekuni-trap-3"></span>).</p>

<board data-type="show" data-label="suekuni-trap-3" data-file="suekuni-trap-3.json"></board>

<p>Ora... facciamo un po' di conti per quanto riguarda la <a href="../../intermedio/parita/chapter.php">parità</a>.
&Egrave; il turno del nero. Nessuno dei due giocatori ha passato. Quindi c'è un numero <i>pari</i> di caselle vuote.
Per la precisione, visto che è appena stata giocata la mosa 38, ci sono 22 caselle vuote.</p>

<p>Il bianco ha un enorme svantaggio a giocare nella regione a nord-est. Quindi farà di tutto per giocare altrove.</p>

<p>Se togliamo le cinque caselle della regione a nord-est, rimane un numero <i>dispari</i> di caselle vuote. Per la
precisione 17. Quindi il nero ha la possibilità di giocare l'ultima mossa di queste 17 disponibili.</p>

<p>Una volta riempite le 17 caselle vuote, al bianco rimarrà una sola mossa: proprio <b>H2</b>.</p>

<p>Il nero potrà rispondere in <b>H1</b>... e rimane una regione di tre caselle in cui il bianco non ha accesso.
Il nero ha ottenuto la <i>parità</i>!</p>

<p>Nel diagramma <span data-board-ref="suekuni-trap-4"></span> puoi seguire il resto della partita con qualche commento.</p>

<board data-type="show" data-label="suekuni-trap-4" data-file="suekuni-trap-4.json"></board>

<p>Alla fine di questa partita Ben Seeley ha battezzato <b>Suekuni trap</b> questo <i>pattern</i>. Suekuni in verità
non ha mai desiderato questa paternità, ma ormai il nome è assegnato.</p>

<h2>Il <i>pattern</i></h2>

<p>Il <i>pattern</i> (diagramma <span data-board-ref="suekuni-trap-pattern"></span>) che permette questo <i>tesuji</i>
    prevede la presenza di:</p>
<ul>
    <li>il caratteristico bordo con struttura a incastro (riquadro giallo);</li>
    <li>una regione adiacente dispari in cui l'ultima mossa del bianco risulta essere la casella <b>C</b> che andrà a
    cedere l'angolo e far perdere una mossa (caselle rosse);</li>
    <li>affinché l'unica mossa del bianco sia la casella <b>C</b>, è importante anche il controbordo, in particolare
        la pedine affacciata sulla regione deve essere bianca (riquadro blu).</li>
</ul>

<board data-type="show" data-label="suekuni-trap-pattern" data-file="suekuni-trap-pattern.json"></board>

<p>Ovviamente la struttura <i>a incastro</i> potrebbe anche essere diversa. Ma soprattutto deve rimanere fino alla
fine della partita, quando finalmente si sfrutteranno le caratteristiche dalla posizione. Per esempio, rimanendo
sempre nella partita analizzata, anche alla mossa 55 è presente la struttura, sebbene sia stata modificata dalla mosse
giocate (riquadro giallo nel diagramma <span data-board-ref="suekuni-trap-pattern-finale"></span>).</p>

<board data-type="show" data-label="suekuni-trap-pattern-finale" data-file="suekuni-trap-pattern-finale.json"></board>

<p>Un ultimo elemento da osservare è che tale <i>pattern</i>, per come coinvolge la parità, è più efficace
se giocato dal nero.</p>

<p>Se fosse giocato dal bianco, infatti, potrebbero succedere due cose.</p>
<ul>
    <li>Se la regione adiacente fosse dispari e venisse lasciata per ultima, a meno di altre forzatura in altre regioni,
        sarà il bianco a doverci
    giocare per primo, rendendo di fatto inutile la trappola (vedi diagramma <span data-board-ref="suekuni-trap-5"></span>).</li>
</ul>

<board data-type="show" data-label="suekuni-trap-5" data-file="suekuni-trap-5.json"></board>

<ul>
    <li>Se la regione adiacente fosse pari e venisse lasciata per ultima, sempre a meno di altre forzature in altre
        regioni, sarà il nero a doverci
    giocare per primo e dovrà farlo nella casella <b>C</b>. Ma a questo punto se il bianco prende l'angolo, poi il nero
    passa e ottiene l'ultima mossa (vedi diagramma <span data-board-ref="suekuni-trap-6"></span>).</li>
</ul>

<board data-type="show" data-label="suekuni-trap-6" data-file="suekuni-trap-6.json"></board>

<p>Quindi giocato dal bianco il vantaggio è sicuramente minore.</p>

<h2>Disinnescare una Suekuni trap</h2>

<p>Se la struttura del bordo a incastro è fondamentale per la riuscita della Suekuni trap, può capitare che cedere
anzitempo l'angolo opposto alla regione minacciata sia vantaggioso e si ottenga così di <i>disinnescare</i>
la trappola.</p>

<p>Ne è un esempio la posizione del diagramma <span data-board-ref="suekuni-trap-7"></span>, ottenuta modificando
la struttura del bordo sud del diagramma <span data-board-ref="suekuni-trap-1"></span>.</p>

<board data-type="show" data-label="suekuni-trap-7" data-file="suekuni-trap-7.json"></board>

<h2>Un altro esempio</h2>

<p>Il diagramma <span data-board-ref="suekuni-trap-8"></span> è presentato da Tetsuya Nakajima in un video
proprio sulle Suekuni trap <a href="https://www.youtube.com/watch?v=wUN4jbnUqDY" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-box-arrow-right"></i>
    </a>. Il video ha l'audio in giapponese, ma con i sottotitoli automatici si riesce comunque
a seguire la spiegazione. Interessante che chiami <i>bomba</i> la struttura a incastro sul bordo.</p>

<board data-type="show" data-label="suekuni-trap-8" data-file="suekuni-trap-8.json"></board>

<h2>Tocca a te</h2>

<p>Questo esempio è stato proposto dal maestro Paolo Scognamiglio sul gruppo WhatsApp degli othellisti italiani.</p>

<board data-type="quiz" data-label="suekuni-trap-9" data-file="suekuni-trap-9.json"></board>
