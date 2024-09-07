<h1>Parità e tempi di gioco</h1>

<p>Come hai visto nelle pagine precedenti, la parità entra in gioco nella fase del finale,
    quando ci sono poche regioni chiuse
    e bisogna massimizzare il numero di pedine.</p>

<p>Tuttavia la parità può essere vista anche come modo per ottenere un tempo di gioco. Infatti
se un colore muove per ultimo in una regione, ha ottenuto un tempo di gioco, costringendo l'avversario a muovere
altrove alla mossa successiva.</p>

<p>Questo significa che la parità, in particolare il giocare in regioni dispari e lasciare all'avversario regioni
pari, può essere giocata anche nelle fasi centrali del gioco.</p>

<p>Considera il diagramma 1. Il nero si trova in seria difficoltà: la sua mobilità infatti è ridotta ai
    minimi termini restandogli possibili solo tre mosse tutte negative: A2, A7 e B7.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="parita-e-tempi-di-gioco-1.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 1: parità e tempi di gioco.
    </div>
</div>

<p>L'obiettivo del bianco deve
    essere quello di sfruttare questa situazione altamente positiva costringendo l'avversario
    a compiere una delle tre mosse.
    Tuttavia se il bianco gioca a nord, come minimo offre due mosse all'avversario.
    Per mantenere il vantaggio posizionale e renderlo decisivo ai fini dell'esito dell'incontro,
    il bianco deve quindi trovare una sequenza valida nella parte sud:
    può sfruttare la regione dispari a sud-ovest e giocare in B7. A questo punto il nero
    può anche prendere l'angolo A8, ma il bianco risponde in B8 ottenendo un
    tempo di gioco e costringendo il nero a una delle rimanenti mosse perdenti. Nel diagramma 2 vedi la sequenza.</p>

    <div class="card mx-auto board-card my-3">
        <div class="card-body">
            <div class="match-file-board" data-file="parita-e-tempi-di-gioco-2.json"></div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Diagramma 2: parità e tempi di gioco.
        </div>
    </div>

<p>Come per tutte le azioni che riguardano gli angoli è bene sottolineare che la
    manovra deve essere verificata in tutto il suo sviluppo onde evitare errori che potrebbero
    risultare fatali. E la verifica fa fatta giocando a mente le mosse che si intendono eseguire.</p>

<p>Nel diagramma 3 è proposta una situazione che a prima vista potrebbe
    sembrare analoga alla precedente, con il nero sotto pressione e il bianco alla ricerca della sequenza che metta
    fine all'incontro.</p>

    <div class="card mx-auto board-card my-3">
        <div class="card-body">
            <div class="match-file-board" data-file="parita-e-tempi-di-gioco-3.json"></div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Diagramma 3: vincere con la parità.
        </div>
    </div>

<p>Prova a ricostruire a mente la sequenza vista sopra. Il bianco gioca in G7 e gira le pedina E5, F6 e F7. Il nero
    risponde in H8, girando le pedine D4, E5, F6 e G7. Infine il bianco deve giocare in G8.
    Ma attenzione: la colonna G contiene solo pedine nere, quindi al bianco manca la pedina di sponda.
    Inoltre la pedina F7 è diventata bianca, quindi il bianco non può voltare in diagonale.
    Il bianco non può giocare in G8. Anzi: il nero ha la parità nella
    casella G7. Vedi nel diagramma 4 questa sequenza.</p>

    <div class="card mx-auto board-card my-3">
        <div class="card-body">
            <div class="match-file-board" data-file="parita-e-tempi-di-gioco-4.json"></div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Diagramma 4: vincere con la parità.
        </div>
    </div>

<p>Proviamo allora con un'altra sequenza. Il bianco gioca in G8 voltando F7. Il nero risponde in H8 voltando G8.
    E il bianco può chiudere la regione giocando in G7. La sequenza è diversa, ma il risultato è lo stesso:
    il bianco ottiene il tempo di gioco e il nero è costretto a giocare una delle tre mosse rimanenti.
    Vedi nel diagramma 5 questa sequenza.</p>

    <div class="card mx-auto board-card my-3">
        <div class="card-body">
            <div class="match-file-board" data-file="parita-e-tempi-di-gioco-5.json"></div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Diagramma 5: vincere con la parità.
        </div>
    </div>

<p>Concludiamo questo studio con il diagramma 6, con una situazione di nuovo molto simile alle precedenti.</p>

    <div class="card mx-auto board-card my-3">
        <div class="card-body">
            <div class="match-file-board" data-file="parita-e-tempi-di-gioco-6.json"></div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Diagramma 6: vincere con la parità.
        </div>
    </div>

<p>Proviamo a seguire a mente le sequenze che permetterebbero al bianco, grazie alla parità, di ottenere un tempo di
gioco.</p>

<p>Prima sequenza: il bianco gioca in G7 e gira la pedina F7; il nero gioca in H8 girando F6 e H7; il bianco non può
accedere in G8. Non funziona.</p>

<p>Seconda sequenza: il bianco gioca in G8 e gira le pedine in diagonale, in particolare F7; il nero gioca in H8
girando la pedina G8; il bianco non può accedere in G7 perché F7 è diventata bianca e la colonna G contiene solo
pedine nere. Non funziona.</p>

<p>Nessuna delle due sequenza funziona. Il bianco si dovrà quindi rassegnare a giocare nella parte nord della tavola,
perdendo così il vantaggio di mobilità.</p>

<h2>Parità e tempi di gioco... in difesa</h2>

<p>Abbiamo visto, finora, tutti casi in cui la cessione di un angolo è stata effettuata da un giocatore
in chiaro vantaggio posizionale per ottenere il tempo di gioco necessario per affondare definitivamente
il suo avversario. &Egrave; possibile, però, utilizzare la stessa manovra a scopo difensivo.</p>

<p>Nel diagramma 7 il nero, che deve muovere, dispone solo di mosse che cedono angoli, eppure la situazione non è
completamente compromessa.</p>

    <div class="card mx-auto board-card my-3">
        <div class="card-body">
            <div class="match-file-board" data-file="parita-e-tempi-di-gioco-7.json"></div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Diagramma 7: vincere con la parità.
        </div>
    </div>

<p>Il nero ha a disposizione a sud-ovest una regione chiusa dispari, che può utilizzare per ottenere il tempo di gioco
    necessario a risollevarsi. Può giocare in B7: il bianco non ha immediatamente accesso all'angolo e certamente non risponderà con A7.
    Quindi il bianco giocherà a nord aprendo il gioco al nero. Vedi la prosecuzione nel diagramma 8.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="parita-e-tempi-di-gioco-8.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 8: vincere con la parità.
    </div>
</div>

<h2>Tocca a te</h2>

<p>Nel diagramma 9 giochi con il bianco. Gioca la mossa che ti permette, utilizzando la parità, di ottenere un tempo
di gioco.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="parita-e-tempi-di-gioco-9.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 9.
    </div>
</div>
