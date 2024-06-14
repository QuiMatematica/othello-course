        <h1>Classificazione delle formazioni di bordo</h1>

        <h2>Formazioni stabili o bilanciate</h2>

        <p>Hanno la caratteristica di essere simmetriche rispetto all'asse centrale della tavola
        da gioco e di non essere allargabili. Sono essenzialmente tre (diagramma 1):
        il "sei" (bordo nord), il "quattro" (bordo sud)e il "due più due" (bordo est).</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="formazioni-di-bordo-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
                Diagramma 1: esempi di formazioni bilanciate.
			</div>
		</div>

        <p>Il <b>sei</b> è una formazione piuttosto forte in quanto è inattaccabile. Tuttavia non è
        facile da realizzare dato il numero elevato di pedine da impiegare. Il suo principale
        difetto è che cedendo un angolo dei due che giacciono sul lato occupato, si perde
        immediatamente anche l'altro. Sono in pratica inibite le due caselle X adiacenti al
        sei.</p>

        <p>Il <b>quattro</b> è decisamente più debole, infatti la caselle C che restano libere tra
        gli angoli e tale struttura possono essere facilmente sfruttate negli attacchi finali
        per guadagnare o l'intero lato o dei tempi di gioco.
        Per un esempio si veda il diagramma 2.
        Il quattro assume sfumature diverse a seconda del colore delle pedine poste sopra le due
        caselle A. Molto debole è quello composto da tutte pedine dello stesso colore.</p>

        <div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="formazioni-di-bordo-2.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
                Diagramma 2: un doppio attacco a un quattro.
			</div>
		</div>

        <p>Il <b>due più due</b> ha caratteristiche simili alla precedente formazione, verrà trattato
            nel livello avanzato.</p>

        <h2>Formazioni sbilanciate</h2>

        <p>Sono tutte quelle formazioni compatte che comprendono una casella C.</p>

        <p>Ci sono numerosi tipi di bordi sbilanciati e ciascuno prende il nome dal
        numero di pedine coinvolte, anche se la nomenclatura non � sempre rigorosa.
        Nel diagramma 3 si ha nel bordo nord un "cinque", nel bordo
        ovest un "quattro sbilanciato", nel bordo sud un "quattro + uno" (che � una
        formazione doppiamente sbilanciata) e sul bordo est un "tre + uno".</p>

            <p align="center">
            <applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="231" height="231"
                    code="it.claudiosignorini.tao.TaoApplet.class"
                    hspace="0" vspace="0" align="top">
                <param name="function" value="static">
                <param name="position" value="-OOOOO---------#-------##------##-------#------O#--------O-####-">
                Mi dispiace: il tuo browser non supporta le Applet Java.
            </applet>
            <br>
            Diagramma 3: alcuni tipi di bordi sbilanciati.
            </p>

        <p>Senza dubbio queste
        sono le strutture pi� deboli in quanto attaccabili in modo piuttosto elementare. Sono
        sbilanciati i <b>cinque</b> di cui si � gi� parlato in una
        <a href="../../PrimiElementiDiStrategia/GliAttacchiAi5/index.html" title="Gli attacchi ai cinque">precedente lezione</a>.</p>

        <p>Un gruppo sbilanciato di meno di cinque pedine � sempre <b>forzabile</b>: se l'avversario
        occupa la casella immediatamente adiacente a tale gruppo le possibili scelte sono due:
        o rassegnarsi a perdere un angolo o girare l'ultima pedina posata, cosa che spesso
        comporta effetti collaterali dannosi. Nel diagramma 4 � illustrato un caso del genere.</p>

            <p align="center">
            <applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="241" height="390"
                    code="it.claudiosignorini.tao.TaoApplet.class"
                    hspace="0" vspace="0" align="top">
                <param name="function" value="match">
                <param name="matchFile" value="FormazioniDiBordo3.txt">
                Mi dispiace: il tuo browser non supporta le Applet Java.
            </applet>
            <br>
            Diagramma 4: la forzatura di un tre sbilanciato.
            </p>

        <h2>Formazioni incomplete</h2>

        <p>Sono tutte quelle formazioni che lasciano possibilit� di una mossa a tutti e due i
        giocatori. L'eventuale chiusura del gruppo gernea, di solito, una struttura debole
        (cinque, quattro sbilanciato, ...). Il diagramma 5 riproduce una situazione di gioco in
        cui tutti i bordi sono occupati in modo incompleto. Spesso si verifica che se un giocatore
        chiude uno di questi gruppi, immediatamente dopo il suo avversario ne chiude uno analogo.</p>

            <p align="center">
            <applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="231" height="231"
                    code="it.claudiosignorini.tao.TaoApplet.class"
                    hspace="0" vspace="0" align="top">
                <param name="function" value="static">
                <param name="position" value="--##OO----O###--OO#OO#OOOOOO#O##O#O#OO#######O##--O##O----##O---">
                Mi dispiace: il tuo browser non supporta le Applet Java.
            </applet>
            <br>
            Diagramma 5: esempi di formazioni incomplete.
            </p>

        <h2>Formazioni aperte</h2>

        <p>Sono tutti quei gruppi che possono essere allargati solo da chi li possiede. Queste sono
        senza dubbio le strutture pi� forti in quanto costituiscono un enorme vantaggio in termini
        di tempi di gioco. Difficilmente realizzabili, costituiscono spesso un elemento
        determinante ai fini del successo finale.</p>

        <p>Nel diagramma 6 il bianco possiede un gruppo di questo tipo nel bordo sud. Si vede come
        il quattro possa essere allargato ad un sei senza che per il nero ci sia possibilit�
        di replica. In pratica il bianco gode del vantaggio di due tempi di gioco, che potr� far
        valere nel momento pi� opportuno.</p>

            <p align="center">
            <applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="231" height="231"
                    code="it.claudiosignorini.tao.TaoApplet.class"
                    hspace="0" vspace="0" align="top">
                <param name="function" value="static">
                <param name="position" value="---------------------#----OO##---OO#O#---O#OO#----OO##---OOOO---">
                Mi dispiace: il tuo browser non supporta le Applet Java.
            </applet>
            <br>
            Diagramma 6: una formazione aperta.
            </p>
