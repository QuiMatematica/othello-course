<p>Come hai visto nelle pagine precedenti, la parità entra in gioco nella fase del finale,
    quando ci sono poche regioni
    e bisogna massimizzare il numero di pedine.</p>

<p>Tuttavia la parità può essere vista anche come modo per ottenere un tempo di gioco. Infatti
se un colore muove per ultimo in una regione, ha ottenuto un tempo di gioco, costringendo l'avversario a muovere
altrove alla mossa successiva.</p>

<p>Questo significa che la parità, in particolare il giocare in regioni dispari e lasciare all'avversario regioni
pari, può essere giocata anche nelle fasi centrali del gioco.</p>

<p>Considera il diagramma <span data-board-ref="parita-e-tempi-di-gioco-1"></span>.
    Il nero si trova in seria difficoltà: la sua mobilità infatti è ridotta ai
    minimi termini restandogli possibili solo tre mosse tutte negative: <b>A2</b>, <b>A7</b> e <b>B7</b>.</p>

<board data-type="show" data-label="parita-e-tempi-di-gioco-1" data-file="parita-e-tempi-di-gioco-1.json"
       ></board>

<p>L'obiettivo del bianco deve
    essere quello di sfruttare questa situazione altamente positiva costringendo l'avversario
    a compiere una delle tre mosse.
    Tuttavia se il bianco gioca a nord, come minimo offre due mosse all'avversario.
    Per mantenere il vantaggio posizionale e renderlo decisivo ai fini dell'esito dell'incontro,
    il bianco deve quindi trovare una sequenza valida nella parte sud:
    può sfruttare la regione dispari a sud-est e giocare in <b>G7</b>. A questo punto il nero
    può anche prendere l'angolo <b>H8</b>, ma il bianco risponde in <b>G8</b> ottenendo un
    tempo di gioco e costringendo il nero a una delle rimanenti mosse perdenti. Nel diagramma
    <span data-board-ref="parita-e-tempi-di-gioco-2"></span> vedi la sequenza.</p>

<board data-type="show" data-label="parita-e-tempi-di-gioco-2" data-file="parita-e-tempi-di-gioco-2.json"
       ></board>

<p>Come per tutte le azioni che riguardano gli angoli è bene sottolineare che la
    manovra deve essere verificata in tutto il suo sviluppo onde evitare errori che potrebbero
    risultare fatali. E la verifica fa fatta giocando a mente le mosse che si intendono eseguire.</p>

<p>Nel diagramma <span data-board-ref="parita-e-tempi-di-gioco-3"></span> è proposta una situazione che a prima vista potrebbe
    sembrare analoga alla precedente, con il nero sotto pressione e il bianco alla ricerca della sequenza che metta
    fine all'incontro.</p>

<board data-type="show" data-label="parita-e-tempi-di-gioco-3" data-file="parita-e-tempi-di-gioco-3.json"
       ></board>

<p>Prova a ricostruire a mente la sequenza vista sopra. Il bianco gioca in <b>G7</b> e gira le pedina
    <b>E5</b>, <b>F6</b> e <b>F7</b>. Il nero
    risponde in <b>H8</b>, girando le pedine <b>D4</b>, <b>E5</b>, <b>F6</b> e <b>G7</b>.
    Infine il bianco deve giocare in <b>G8</b>.
    Ma attenzione: la colonna <b>G</b> contiene solo pedine nere, quindi al bianco manca la pedina di sponda.
    Inoltre la pedina <b>F7</b> è diventata bianca, quindi il bianco non può voltare in diagonale.
    Il bianco non può giocare in <b>G8</b>. Anzi: il nero ha la parità nella
    casella <b>G7</b>. Vedi nel diagramma <span data-board-ref="parita-e-tempi-di-gioco-4"></span> questa sequenza.</p>

<board data-type="show" data-label="parita-e-tempi-di-gioco-4" data-file="parita-e-tempi-di-gioco-4.json"
       ></board>

<p>Proviamo allora con un'altra sequenza. Il bianco gioca in <b>G8</b> voltando <b>F7</b>. Il nero risponde in <b>H8</b> voltando <b>G8</b>.
    E il bianco può chiudere la regione giocando in <b>G7</b>. La sequenza è diversa, ma il risultato è lo stesso:
    il bianco ottiene il tempo di gioco e il nero è costretto a giocare una delle tre mosse rimanenti.
    Vedi nel diagramma <span data-board-ref="parita-e-tempi-di-gioco-5"></span> questa sequenza.</p>

<board data-type="show" data-label="parita-e-tempi-di-gioco-5" data-file="parita-e-tempi-di-gioco-5.json"
       ></board>

<p>Concludiamo questo studio con il diagramma <span data-board-ref="parita-e-tempi-di-gioco-6"></span>,
    con una situazione di nuovo molto simile alle precedenti.</p>

<board data-type="show" data-label="parita-e-tempi-di-gioco-6" data-file="parita-e-tempi-di-gioco-6.json"
       ></board>

<p>Proviamo a seguire a mente le sequenze che permetterebbero al bianco, grazie alla parità, di ottenere un tempo di
gioco.</p>

<p>Prima sequenza: il bianco gioca in <b>G7</b> e gira la pedina <b>F7</b>; il nero gioca in H8 girando <b>F6</b> e
    <b>H7</b>; il bianco non può
accedere in <b>G8</b>. Non funziona.</p>

<p>Seconda sequenza: il bianco gioca in <b>G8</b> e gira le pedine in diagonale, in particolare <b>F7</b>; il nero gioca in <b>H8</b>
girando la pedina <b>G8</b>; il bianco non può accedere in <b>G7</b> perché <b>F7</b> è diventata bianca e la colonna <b>G</b> contiene solo
pedine nere. Non funziona.</p>

<p>Nessuna delle due sequenza funziona. Il bianco si dovrà quindi rassegnare a giocare nella parte nord della tavola,
perdendo così il vantaggio di mobilità.</p>

<h2>Parità e tempi di gioco... in difesa</h2>

<p>Abbiamo visto, finora, tutti casi in cui la cessione di un angolo è stata effettuata da un giocatore
in chiaro vantaggio posizionale per ottenere il tempo di gioco necessario per affondare definitivamente
il suo avversario. &Egrave; possibile, però, utilizzare la stessa manovra a scopo difensivo.</p>

<p>Nel diagramma <span data-board-ref="parita-e-tempi-di-gioco-7"></span> il nero, che deve muovere, dispone solo di mosse che cedono angoli, eppure la situazione non è
completamente compromessa.</p>

<board data-type="show" data-label="parita-e-tempi-di-gioco-7" data-file="parita-e-tempi-di-gioco-7.json"
       ></board>

<p>Il nero ha a disposizione a sud-ovest una regione dispari, che può utilizzare per ottenere il tempo di gioco
    necessario a risollevarsi. Può giocare in <b>B7</b>: il bianco non ha immediatamente accesso all'angolo e certamente
    non risponderà con <b>A7</b>.
    Quindi il bianco giocherà a nord aprendo il gioco al nero. Vedi la prosecuzione nel diagramma
    <span data-board-ref="parita-e-tempi-di-gioco-8"></span>.</p>

<board data-type="show" data-label="parita-e-tempi-di-gioco-8" data-file="parita-e-tempi-di-gioco-8.json"
       ></board>

<h2>Tocca a te</h2>

<p>Nel diagramma <span data-board-ref="parita-e-tempi-di-gioco-9"></span> giochi con il bianco.
    Gioca la mossa che ti permette, utilizzando la parità, di ottenere un tempo
di gioco.</p>

<board data-type="quiz" data-label="parita-e-tempi-di-gioco-9" data-file="parita-e-tempi-di-gioco-9.json"></board>