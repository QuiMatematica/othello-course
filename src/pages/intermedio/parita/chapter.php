    <h1>La parità</h1>

    <div class="card border-primary mb-3">
        <div class="card-header">Definizione</div>
        <div class="card-body">
            <p class="card-text">Chiamiamo <b>regione chiusa</b> un gruppo di caselle vuote adiacenti.</p>
        </div>
    </div>

    <p>Considera per esempio la posizione del diagramma 1
        (esempio tratto da <a href="https://www.youtube.com/watch?v=GSaPYWmVGmo">Othello Academy - EP010</a>).</p>

    <div class="card mx-auto board-card my-3">
        <div class="card-body">
            <div class="match-file-board" data-file="parita-1.json"></div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Diagramma 1: regioni chiuse.
        </div>
    </div>

    <p>Ci sono tre regioni chiuse:</p>
    <ul>
        <li>la regione formata dalle caselle A1, B1 e B2;</li>
        <li>la regione formata dalle caselle A7 e A8;</li>
        <li>la regione formata dalle caselle G8, H7 e H8.</li>
    </ul>

    <p>&Egrave; intuitivo osservare come sia interessante per un giocatore poter fare l'ultima mossa in una regione
    chiusa. L'ultima mossa infatti permette di conquistare per ultimo delle pedine nell'intorno di quella regione,
        pedine che difficilmente l'avversario potrà riconquistare muovendo in un'altra regione.</p>

    <p>Nella posizione del diagramma 1 tocca al nero. Dove muoveresti?</p>

    <p>Certamente il nero non ha interesse a giocare nella regione a sud-ovest: ci sono solo due caselle libere,
        quindi se il nero muove per primo il bianco avrà la possibilità di compiere l'ultima mossa.</p>

    <p>Più interessante è la regione a nord-ovest, perché se il nero gioca per primo rimangono solo due caselle
        libere, quindi il bianco è svantaggiato a muovere per secondo in quella regione.</p>

    <p>Lo stesso vale per la regione a sud-est: anche questa regione è formata da tre caselle,
        quindi il nero avrebbe interesse a giocare per primo per lasciare al bianco una regione di due caselle.</p>

    <p>Ma c'è una profonda differenza tra la regione a nord-ovest e la regione a sud-est. Nella regione a nord-ovest
    anche il bianco può giocare per primo, mentre nella regione a sud-est non può farlo. Quindi se il nero giocasse
    a sud-est, il bianco potrebbe giocare a nord-ovest e lasciare al nero solo regioni di due caselle; se invece
    il nero giocasse a nord-ovest, il bianco non potrebbe giocare a sud-est e si troverebbe costretto a giocare in
        una delle due regioni formate da due caselle.</p>

    <p>Potremmo riassumere la situazione in questo modo:</p>
    <ul>
        <li>in questa posizione il nero ha due regione di tre caselle e una regione di due caselle: è interessato
        a giocare in una delle regioni di tre caselle;</li>
        <li>se il nero gioca a sud-est il bianco ha due regione di due caselle e una regione di tre caselle: può
        quindi giocare nella regione di tre caselle (nord-ovest) e al nero rimangono tre regioni di due caselle;
        non è bello per il nero;</li>
        <li>se il nero gioca a nord-ovest il bianco ha due regione di due caselle. Non può infatti giocare a sud-est.
        E questo è bello per il nero!</li>
    </ul>

    <p>Nel diagramma 2 vedi l'evoluzione della posizione.</p>

    <div class="card mx-auto board-card my-3">
        <div class="card-body">
            <div class="match-file-board" data-file="parita-2.json"></div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Diagramma 2: parità.
        </div>
    </div>








    <div class="card border-primary mb-3">
        <div class="card-header">Definizione</div>
        <div class="card-body">
            <p class="card-text">Chiamiamo <b>parità</b> la possibilità per un colore di giocare l'ultima mossa
	        in una regione vuota.</p>
        </div>
    </div>

    <p>Considera il diagramma 2. Le caselle G8, H7 e H8 sono adiacenti e vuote, quindi formano una regione vuota.</p>

    <div class="card mx-auto board-card my-3">
        <div class="card-body">
            <div class="match-file-board" data-file="parita-1.json"></div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Diagramma 1: regioni chiuse.
        </div>
    </div>

    E' di turno il bianco, il quale
	muoverà in una delle tre caselle vuote (per ora non ci interessa quale sia la migliore),
	il nero risponderà ed infine il bianco giocherà l'ultima mossa. Il bianco ha la
	parità per quella regione vuota.</p>

	<p align="center">
    <applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="231" height="231"
            code="it.claudiosignorini.tao.TaoApplet.class"
            hspace="0" vspace="0" align="top">
        <param name="function" value="static">
        <param name="position" value="#######O#######O###OOOO#OOO#OOO#O#OOOOO#OO###OO#OOO##O#-O#OOOO--">
        Mi dispiace: il tuo browser non supporta le Applet Java.
    </applet>
	<br>
	Diagramma 1: le caselle vuote a sud est formano una regione vuota.
    </p>





    <p>Il concetto della parità entra in gioco nella fase del finale, quando ormai le
    mosse sono poche e bisogna massimizzare il più possibile il numero di pedine.</p>
	
    <p>Solitamente nei finali rimangono alcuni spazi liberi sulla tavola di gioco.
    Già parlando di come sia possibile
    <a href="../IBordi/VincereCedendoUnAngolo.html">vincere un incontro cedendo un angolo</a> sono state
    fatte delle considerazioni sugli spazi pari e dispari. Le stesse sono a maggior 
    ragione valide per il finale.</p>
    
	<p><b>E' meglio giocare in uno spazio formato da un numero dispari
	di caselle e, per contro, obbligare l'avversario a giocare in spazi formati da un
	numero pari di caselle.</b> Questo é il nocciolo del concetto della <b>parità</b>.</p>

    <h1>Definizione di parità</h1>

	<p>Il vantaggio di avere la parità in una regione sta nella possibilità di ottenere
	la pedina che l'avversario ha appena giocato o qualcuna delle pedine che questi ha
	girato. Si veda la sequenza del diagramma 2 come esempio.</p>

	<p align="center">
    <applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="241" height="390"
            code="it.claudiosignorini.tao.TaoApplet.class"
            hspace="0" vspace="0" align="top">
    	<param name="function" value="match">
    	<param name="matchFile" value="DefinizioneDiParita2.txt">
        Mi dispiace: il tuo browser non supporta le Applet Java.
    </applet>
	<br>
	Diagramma 2: vantaggio della parità.
	</p>