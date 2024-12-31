<h1>Incunearsi</h1>

<p>Nelle formazioni incomplete bisogna stare molto attenti alle caselle che rimangono libere tra due pedine sul bordo.
    Considera, per esempio, il diagramma 1.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="incunearsi-1.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 1: incunearsi.
    </div>
</div>

<p>Se il nero gioca in C8, qualunque sia la risposta del bianco, poi può prendere l'angolo A8.
    La pedina nera in C8, infatti, è incastrata tra due pedine nere e non può essere girata.
    Si dice che la pedina nera è <b>incuneata</b> (in inglese "wedged").
    Vedi nel diagramma 2 una possibile continuazione della partita.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="incunearsi-2.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 2: incunearsi.
    </div>
</div>

<p>Torniamo al diagramma 1 e guardiamo il lato est: il nero può fare la stessa manovra?
    Se il nero gioca in H6, il bianco risponde in H5 (diagramma 3);
    se il nero gioca in H5, il bianco risponde in H6 (diagramma 4). Il nero non riesce a incunearsi perché ci sono
    due caselle libere: qualunque delle due scelga, il bianco può
rispondere nell'altra.
&Egrave; lo stesso concetto della parità: se ci sono due caselle libere (o comunque un numero pari
di caselle libere) alla mossa di un colore l'altro può replicare.</p>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
                    <div class="card-body">
                        <div class="match-file-board" data-file="incunearsi-3.json"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma 3: incuneamento fallito.
                    </div>
                </div>


            </div>
            <div class="col">

				<div class="card mx-auto board-card my-3">
                    <div class="card-body">
                        <div class="match-file-board" data-file="incunearsi-3b.json"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma 4: incuneamento fallito.
                    </div>
                </div>

            </div>
        </div>

<p>Infine, concentriamoci sul lato nord. Se il nero gioca in C1 minaccia di andare in A1; il bianco può difendersi
giocando in D1. Ma, a questo punto il nero può incunearsi in E1. Vedi il diagramma 5.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="incunearsi-4.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 5: incuneamento riuscito.
    </div>
</div>

<p>Ancora una volta è d'obbligo il confronto con la parità: se ci sono tre caselle libere (un numero
    dispari) chi gioca
per primo gioca anche per ultimo.</p>

<p>Si parla di <b>incunearsi</b> anche quanto l'avversario non si è sbilanciato su una casella C, ma ha lasciato
    una casella vuota tra due pedine sul bordo. Nel diagramma 6 vedi una situazione di questo tipo:
    il nero gioca in E1, il bianco non può rispondere sullo stesso bordo, e il nero guadagna un tempo
di gioco.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="incunearsi-4b.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 6: incunearsi in una casella singola libera.
    </div>
</div>

<div class="card border-primary mb-3">
    <div class="card-header">Strategia</div>
    <div class="card-body">
        <p class="card-text">Se hai più pedine su un bordo, in particolare se sei sbilanciato in una casella C,
            devi lasciare un numero pari di caselle vuote tra le pedine.</p>
    </div>
</div>

<div class="card border-primary mb-3">
    <div class="card-header">Tattica</div>
    <div class="card-body">
        <p class="card-text">Se il tuo avversario ha lasciato un numero dispari di caselle vuote tra due pedine sul bordo,
            e si è sbilanciato in una casella C, puoi incunearti e prendere un angolo.</p>
        <p class="card-text">Se il tuo avversario ha lasciato una casella vuota tra due pedine sul bordo,
            ma non si è sbilanciato in una casella C, puoi comunque incunearti. Se l'avversario non può rispondere
            sullo stesso lato hai guadagnato un tempo di gioco.</p>
    </div>
</div>

<h2>Quattro caselle vuote sul bordo</h2>

<p>Nel diagramma 7 giochi con il bianco. Devi muovere, ma facendo attenzione a impedire al nero di incunearsi.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="incunearsi-6.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 7: impedire al nero di incunearsi.
    </div>
</div>

<p>La mossa in H7 ti ha permesso si muovere in una posizione molto compromessa. A ovest sei chiuso dal muro e
ti rimangono solo mosse a est. G1, G2, G7 e G8 compromettevano ancora di più la situazione.
H6 lasciava un numero dispari di caselle vuote sul bordo. L'unica giocabile, quindi, era H7.</p>

<p>Ora però devi sapere come rispondere alle varie mosse del nero sullo stesso bordo. Prova a rispondere alle
quattro situazioni qui proposte.</p>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="sequence-board" data-file="incunearsi-6-H7-H3.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 8: cosa giochi dopo H7 - H3?
					</div>
				</div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="sequence-board" data-file="incunearsi-6-H7-H6.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 9: cosa giochi dopo H7 - H6?
					</div>
				</div>

            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

                <div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="sequence-board" data-file="incunearsi-6-H7-H4.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 10: cosa giochi dopo H7 - H4?
					</div>
				</div>

            </div>
            <div class="col">

				<div class="card mx-auto board-card my-3">
					<div class="card-body">
						<div class="sequence-board" data-file="incunearsi-6-H7-H5.json"></div>
					</div>
					<div class="card-footer text-body-secondary text-center">
						Diagramma 11: cosa giochi dopo H7 - H5?
					</div>
				</div>

            </div>
        </div>

<p>Hai visto come devi rispondere alle possibili mosse del nero sul bordo est. Ma se non ti fosse possibile
rispondere in quei modi?</p>

<p>Le prime due situazioni non creano mai problemi: se il nero gioca in una casella B, allora hai sempre la casella A
adiacente a disposizione.</p>

<p>Ma se il nero gioca in una casella A, non è assicurato il fatto che il bianco possa rispondere nella casella B opportuna.
Osserva cosa succede nel diagramma 12 in cui, rispetto al diagramma 7, è stata cambiata una sola pedina.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="incunearsi-6-H7-H4-variante.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 12: impedire al nero di incunearsi.
    </div>
</div>

<p>In conclusione: se giochi lasciando quattro caselle vuote sul bordo, devi fare molta attenzione ad avere la possibilità
di giocare tutte le necessarie contromosse alle minacce dell'avversario. E questi accessi dovranno essere tenuti sotto controllo a
ogni mossa successiva.</p>

<p>Il rischio è troppo alto. A meno che tu non sia costretto, come nella posizione proposta, non è opportuno
lasciare quattro caselle libere sul bordo occupando le due caselle C.</p>

<h2>Tocca a te</h2>

<p>Nel diagramma 13 giochi con il nero. A sud non hai mosse a disposizione. Evita di cedere un angolo. Quale mossa
ti rimane che non permette al bianco di incunearsi?</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="incunearsi-5.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 13: impedire al bianco di incunearsi.
    </div>
</div>

<p>Nel diagramma 14 giochi con il bianco. Conquista un angolo in due mosse.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="incunearsi-7.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 14: conquista un angolo in due mosse.
    </div>
</div>

<p>Nel diagramma 15 giochi con il nero. Conquista un angolo in non più di tre mosse.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="incunearsi-8.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 15: conquista un angolo in non più di tre mosse.
    </div>
</div>
