<p>La manovra semi-Landau consiste nel sacrificare un bordo e un angolo, in modo da poter
giocare in due mosse successive nelle caselle X e C adiacenti allo stesso
angolo ceduto.</p>

<p>Rispetto alla manovra Landau, quindi, lo swindle riguarderà un solo angolo. Ovviamente questo richiede meno
vincoli, per cui questo tipo di manovre sono un po' più frequenti rispetto al caso completo.</p>

<h2>Primo esempio</h2>

<p>Il diagramma <span data-board-ref="semi-landau-1"></span>
    presenta la situazione dopo la 39ª mossa della partita giocata tra
Suekuni (nero) e Brightwell (bianco) al Paris International 2000. &Egrave; il turno del bianco
che sfrutta la situazione per giocare una manovra semi-Landau.</p>

<board data-type="show" data-label="semi-landau-1" data-file="semi-landau-1.json"></board>

<p>Per comprendere meglio la manovra, nel diagramma
    <span data-board-ref="semi-landau-1-controbordi"></span>
    è riportata la posizione dopo l'attacco del bianco.</p>

<board data-type="show" data-label="semi-landau-1-controbordi" data-file="semi-landau-1-controbordi.json"></board>

<p>La manovra funziona perché:</p>

<ul>
    <li>la colonna <b>G</b>, controbordo del bordo attaccato, è controllata dal bianco (riquadro giallo);</li>
    <li>la riga <b>2</b>, controbordo del bordo adiacente, è controllata dal nero (riquadro rosso);</li>
    <li>la pedina <b>F3</b> deve essere nera per permettere la mossa nella casella <b>X</b> (riquadro blu).</li>
</ul>

<p>Solo la combinazione di questi tre fattori consente al bianco di realizzare
la manovra.</p>

<h2>Contro altre formazioni di bordo</h2>

<p>La manovra è giocabile con diverse formazioni di bordo. Sopra abbiamo visto il caso
di un “tre sbilanciato più uno”, qui sotto vediamo la manovra con un cinque
    (diagramma <span data-board-ref="semi-landau-2"></span>) e con un quattro bilanciato
    (diagramma <span data-board-ref="semi-landau-3"></span>).</p>

<gather>
    <board data-type="show" data-label="semi-landau-2" data-file="semi-landau-2.json"></board>
    <board data-type="show" data-label="semi-landau-3" data-file="semi-landau-3.json"></board>
</gather>

<h2>Due eccezione</h2>

<p>Analizzando più a fondo la manovra, si può notare che è possibile ammettere
un'eccezione alla prima condizione: ovvero che l'attaccante controlli il controbordo.
    Infatti può essere sufficiente che questa condizione si verifichi solo dopo che l’attaccante ha conquistato la
    casella <b>X</b>.</p>

<p>Il diagramma <span data-board-ref="semi-landau-4"></span>
    presenta la stessa situazione del diagramma <span data-board-ref="semi-landau-1"></span>,
    in cui, però, la pedina <b>G3</b> è di colore diverso. La manovra ha comunque effetto.</p>

<board data-type="show" data-label="semi-landau-4" data-file="semi-landau-4.json"></board>

<p>A questo punto possiamo aggiungere un'altra eccezione. Continuando a ritoccare la posizione già vista,
possiamo anche voltare la pedina in <b>F3</b>, tanto il bianco ha accesso alla casella <b>X</b> tramite la
pedina nera in <b>G3</b>.</p>

<board data-type="show" data-label="semi-landau-4b" data-file="semi-landau-4b.json"></board>

<h2>Anche i campioni subiscono la manovra Landau</h2>

<p>Per mostrare ancora una volta l'importanza di una manovra di questo tipo, riportiamo il caso della
finale del Campionato Giapponese 2004. I giocatori sono Sakaguchi (nero) e Tamenori (bianco). I
diagrammi <span data-board-ref="semi-landau-5"></span> e <span data-board-ref="semi-landau-6"></span>
    riportano la posizione dopo la mossa 44. Il nero ha bisogno di almeno un tempo di
gioco e deve provare a conquistarlo giocando nello spazio dispari a nord-ovest.
    Il diagramma <span data-board-ref="semi-landau-5"></span>
    riporta la sequenza effettivamente giocata: il nero gioca in <b>B3</b>, ma non si accorge che sta per
andare incontro a una manovra semi-Landau che vanifica il suo tentativo.
    Il diagramma <span data-board-ref="semi-landau-6"></span> riporta
invece la sequenza corretta che porta a un pareggio.</p>

<gather>
    <board data-type="show" data-label="semi-landau-5" data-file="semi-landau-5.json"></board>
    <board data-type="show" data-label="semi-landau-6" data-file="semi-landau-6.json"></board>
</gather>


<h2>Controlla sempre tutto</h2>

<p>Ma come al solito, prima di imbarcarsi in una manovra tattica, è necessario assicurarsi che ci siano tutte le
condizioni per concluderla positivamente, ovvero che l'avversario non abbia contromosse che impediscano di
giocarla fino in fondo.</p>

<board data-type="show" data-label="semi-landau-7" data-file="semi-landau-7.json"></board>

<h2>Una variante</h2>

<p>Esiste una variante alle manovre semi-Landau viste in questa pagina, nella quale
    l'attaccante cede un angolo e gioca uno swindle nella regione dell'angolo opposto.</p>

<p>Anche queste manovre hanno in comune con le altre il controllo del
    controbordo come strumento per realizzare lo swindle.</p>

<p>Nella posizione del diagramma <span data-board-ref="landau-2"></span> il nero cede il
    bordo nord e l'angolo a nord-ovest, ma in cambio gioca uno swindle nella regione a nord-est.</p>

<board data-type="show" data-label="landau-2" data-file="landau-2.json"></board>
