		<h1>Per indicare le caselle</h1>

		<h2>Le coordinate</h2>

		<p>Il modo più usato per indicare una casella è il sistema delle coordinate.
		Data la sua semplicità, ho usata questo metodo fin dalla prime pagine di questo corso.
		Per completezza ne riporto qui la spiegazione.</p>

		<p>La tavola è divisa in otto colonne e otto righe. A ogni colonna è associata
		una lettera, da sinistra verso destra, dalla 'A' alla 'H'. Le righe vengono
		invece numerate, dall'alto verso il basso. Per indicare una casella basta trovare
		la lettera della colonna e il numero della riga a cui appartiene. Quindi la casella in alto a
		sinistra si chiama "A1", mentre quella in basso a destra si chiama "H8". Come se fosse
		una battaglia navale.</p>

		<p>Tutti i diagrammi di questo corso riportano le coordinate sul bordo della tavola
		(diagramma 1).</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="notazione-caselle-vuota.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 1: le coordinate.
			</div>
		</div>

		<p>Se giochi a scacchi sicuramente ti sarai reso conto che nell'Othello i numeri delle righe sono contrari:
		negli scacchi vanno dal basso verso l'alto (più precisamente: dal bianco verso il nero), mentre nell'Othello
		vanno dall'alto verso il basso.</p>

		<h2 id="caselle_speciali">Le caselle "speciali"</h2>

		<p>Durante il corso ti accorgerai che alcune caselle hanno un ruolo privilegiato
		rispetto ad altre. Per questo è stata introdotta un'apposita notazione che ho
		riportata nel diagramma 2.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="notazione-caselle-abcx.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
				Diagramma 2: le caselle A, B, C e X.
			</div>
		</div>

		<p>Le caselle adiacenti diagonalmente agli angoli (B2, G2, B7 e G7) sono
		indicate come "caselle X", mentre le caselle adiacenti orizzontalmente e
		verticalmente sono indicate come "caselle C". Il contesto permetterà di chiarire
		di quale particolare casella si sta parlando.</p>

        <p>Sicuramente avrai notato che le caselle A, B e C non sono in sequenza (anche se sono simmetriche rispetto
        agli assi della tavola da gioco). L'ordine che è stato scelto vuole essere un'indicazione
        della forza delle caselle: è preferibile occupare una casella A rispetto a una casella B, ed è preferibile occupare
        una casella B rispetto a una casella C. Tuttavia, come vedremo nel seguito del corso,
        questa è una strategia molto grossolana.</p>

		<h2>Le zone</h2>

		<p>Per indicare le zone della tavola, intese come gruppo di caselle più o meno
		definito, si usano le indicazioni tipiche
		della bussola. Per esempio: l'area vicina al bordo H1 è chiamata "angolo di nord est";
		il bordo superiore "bordo nord".</p>
