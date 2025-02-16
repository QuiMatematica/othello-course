<h1>Gli attacchi alle caselle C isolate</h1>

<p>Parlando delle pedine stabili si è osservato che è pericoloso porre una pedina in una
casella C. &Egrave; ancor più pericoloso se la pedina è l'unica del bordo e l'avversario ha
piena libertà di manovra in tutte le altre caselle.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Definizione</div>
    <div class="card-body">
        <p class="card-text">Chiamiamo <b>caselle C isolata</b> una pedina posta in una casella C
            di un bordo in cui non ci sono altre pedine.</p>
    </div>
</div>

<p>Nel diagramma 1 il bianco ha una pedina nella casella B8 e le rimanenti caselle del bordo
sud sono vuote. Se il nero gioca in E8 il bianco non può rispondere né in C8 né in D8. Questo
è sufficiente al nero per avere garanzia di conquistare l'angolo A8, con la sequenza proposta nel diagramma.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-alle-caselle-c-1.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 1: attacco alla casella C isolata.
			</div>
		</div>

<p>La manovra vista nel diagramma 1 è possibile solo se, dopo la mossa in E8, l'attaccato non
    può muovere in C8 o D8.</p>

<p>Modifichiamo il diagramma 1 in modo da permettere al bianco di giocare in C8 o in D8. Vediamo nei diagrammi
    2 e 3 come potrebbe difendersi dall'attacco.</p>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

                <div class="card mx-auto board-card my-3">
                    <div class="card-body">
                        <div class="match-file-board" data-file="attacchi-alle-caselle-c-2.json"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma 2: dopo E8 il bianco gioca in C8.
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="match-file-board" data-file="attacchi-alle-caselle-c-3.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 3: dopo E8 il bianco gioca in D8.
					</div>
				</div>

            </div>
        </div>

<p>Se il bianco può rispondere in C8 o in D8,
allora il nero deve modificare l'attacco andando in F8. A questo punto si aprono diverse possibilità.</p>

<p>Se alla mossa F8 il bianco risponde con C8, allora il nero deve giocare in D8.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-alle-caselle-c-4.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 4: attacco alla casella C isolata.
			</div>
		</div>

<p>Se alla mossa F8 il bianco risponde con D8, allora il nero deve giocare in C8.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-alle-caselle-c-5.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 5: attacco alla casella C isolata.
			</div>
		</div>

<p>Se alla mossa F8 il bianco risponde con E8, allora il nero deve rispondere in C8.</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-alle-caselle-c-6.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 6: attacco alla casella C isolata.
			</div>
		</div>

<p>Se alla mossa F8 il bianco non risponde sul lato sud, allora il nero ha due possibilità:
    o aspetta che il bianco
giochi sul bordo in una mossa successiva (tornando così a una delle sequenze viste sopra)
    o forza la mano giocando in D8 (diagramma 7).</p>

		<div class="card mx-auto board-card my-3">
			<div class="card-body">
				<div class="match-file-board" data-file="attacchi-alle-caselle-c-7.json"></div>
			</div>
			<div class="card-footer text-body-secondary text-center">
    			Diagramma 7: attacco alla casella C isolata.
			</div>
		</div>

<h2>Uno sguardo più ampio</h2>

<p>Da quanto abbiamo visto sopra, è estremamente semplice attaccare una casella C isolata e ottenere così un angolo
e un bordo intero. Ne potremmo dedurre che non è mai una buona idea giocare in una casella C isolata.
Ma nell'Othello, ormai l'avrai capito, questi assoluti non valgono.</p>

<p>La posizione del diagramma 8 è tratta da una partita che ho giocato (con il nero) contro il maestro Paolo
Scognamiglio (bianco) su eOthello. Il nero ha appena giocato in B8 prendendo il cinque sul bordo sud. Tocca al bianco.
Prenditi qualche minuti per analizzare la posizione e scegliere quale mossa potresti giocare.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="signorini-scognamiglio-21.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 8: Signorini - Scognamiglio (eOthello): dopo la mossa 21.
    </div>
</div>

<p>Che idea ti sei fatto? Chi è in vantaggio, secondo te? E soprattutto: se tu fosse il bianco
dove giocheresti?</p>

<p>Il bianco è in leggero svantaggio perché si trova con un muro verso nord-est. Inoltre, visto
che tocca a lui muovere, è costretto a perdere ancora mobilità. Cercherà di farlo nel modo più
indolore possibile.</p>

<p>Escludiamo subito B7. Ed escludiamo subito anche G7: sembra un attacco al cinque ma il nero
può rispondere in G8 senza consentire al bianco di prendere l'angolo H8.</p>

<p>Le mosse B6 e B5 non sono buone. &Egrave; vero che sono centrali, ma girano pedine in due
direzioni, offrendo diverse mosse al nero.</p>

<p>B3 e B4 sembrano migliori. Girano una sola pedina e allungano il muro "solo" di due pedine.
B3 è la migliore tra le due perché non offre buone risposte al nero.</p>

<p>Ci rimangono due mosse da analizzare: le due mosse sul lato est. H6 sembra una buona mossa,
ma gira sia G6 sia F6. Il problema di questa mossa è che dopo la risposta nera in H3 il cinque
a sud non è più attaccabile.</p>

<p>E H7?</p>

<p>H7 è una pedina C isolata (diagramma 9). Pericolo!!! O no?</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="signorini-scognamiglio-22.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 9: Signorini - Scognamiglio (eOthello): dopo la mossa 22.
    </div>
</div>

<p>Non vi dico il mio stupore quando Paolo ha giocato questa mossa. Subito ho pensato: "Bene,
adesso attacco la casella isolata. Non posso farlo giocando in H4 (perché il bianco può rispondere
in H5 o H6, ma anche perché fare un enorme muro a nord). Quindi devo giocare in H3. Ma..."</p>

<p>Se il nero gioca in H3 il cinque a sud diventa pieno e facilmente attaccabile. Quindi
il bianco può rispondere in G7. Segui nel diagramma 10 una possibile sequenza.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="signorini-scognamiglio-23-attacco.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 10: Signorini - Scognamiglio (eOthello): possibile continuazione.
    </div>
</div>

<p>Capito che H3, e in generale l'attacco alla casella C isolata, non era una buona idea,
mi sono rassegnato all'aver perso un tempo di gioco e ho mosso in D3.
E da qui la partita ha preso tutto un altro corso.</p>

<p>La morale di questo esempio è, ancora una volta, quella di non concentrarsi su un unico aspetto,
ma cercare di avere una visione complessiva del gioco. Quella mossa nella casella C è stata una buona
mossa, perché ha permesso di guadagnare un tempo di gioco, di perdere mobilità e di preparare
un attacco al cinque a sud. E soprattutto... era una mossa inattesa!</p>

<h2>Tocca a te</h2>

<p>Nel diagramma 11 è di turno il bianco che può attaccare la casella C H2 in
modo da poter conquistare con certezza l'angolo H1. Nel diagramma 12 il compito è lo
stesso, ma è di turno il nero. Attenzione a qual è il tipo di attacco corretto!</p>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

                <div class="card mx-auto board-card my-3">
                    <div class="card-body">
                        <div class="sequence-board" data-file="attacchi-alle-caselle-c-8.json"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma 11: il bianco muove e attacca la caselle C isolata.
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
                    <div class="card-body">
                        <div class="sequence-board" data-file="attacchi-alle-caselle-c-9.json"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma 12: il nero muove e attacca la caselle C isolata.
                    </div>
                </div>

            </div>
        </div>
