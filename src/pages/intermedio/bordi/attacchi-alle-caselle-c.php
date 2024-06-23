<h1>Gli attacchi alle caselle C isolate</h1>

<p>Parlando delle pedine stabili si è osservato che è pericoloso porre una pedina in una
casella C. &Egrave; ancor più pericoloso se la pedina è l'unica del bordo e l'avversario ha
piena libertà di manovra in tutte le altre caselle.</p>

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

<h2>Tocca a te</h2>

<p>Nel diagramma 8 è di turno il bianco che può attaccare la casella C H2 in
modo da poter conquistare con certezza l'angolo H1. Nel diagramma 9 il compito è lo
stesso, ma è di turno il nero. Attenzione a qual è il tipo di attacco corretto!</p>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">

                <div class="card mx-auto board-card my-3">
                    <div class="card-body">
                        <div class="sequence-board" data-file="attacchi-alle-caselle-c-8.json"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma 8: il bianco muove e attacca la caselle C isolata.
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="card mx-auto board-card my-3">
                    <div class="card-body">
                        <div class="sequence-board" data-file="attacchi-alle-caselle-c-9.json"></div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        Diagramma 9: il nero muove e attacca la caselle C isolata.
                    </div>
                </div>

            </div>
        </div>
