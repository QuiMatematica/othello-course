<h1>La tecnica dell'estrazione</h1>

<p>In base a quello che abbiamo visto nella <a href="cinque-non-attaccabili.php">pagina precedente</a>,
se il cinque non è pieno ma il controbordo adiacente è occupato solo da pedine dell'attaccante o solo da pedine
    dell'attaccato, allora il cinque non è attaccabile.</p>

<p>Questo significa che se il controbordo adiacente ha pedine di entrambi i colori, allora è sempre attaccabile?</p>

<p>La risposta è <b>no</b>. Come direbbero i matematici, il fatto che il controbordo adiacente è occupato da
entrambi i colori è condizioni necessaria ma non sufficiente affinché il cinque sia attaccabile. Cioè
esistono situazioni in cui il controbordo adiacente è misto, ma il cinque non è comunque attaccabile.</p>

<p>Osserva la posizione del diagramma 1.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="estrazione-1.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 1: attacco che sembra funzionare.
    </div>
</div>

<p>Il nero pensa che se gioca in G7, allora l'attacco funziona. Se infatti il bianco prende l'angolo H8, il nero può
incunearsi in G8; se invece il bianco prende la casella C G8, il nero può prendere l'angolo H8. Ma... guarda nel
diagramma 2 come il bianco può difendersi diversamente.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="estrazione-2.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 2: il bianco trova il modo di salvare il cinque.
    </div>
</div>

<p>L'attacco non funziona perché il bianco ha il modo di rendere tutto il controbordo adiacente del proprio colore, anche
se l'attacco è già stato lanciato. Questa tecnica si chiama <b>estrazione</b>, perché viene estratta (tramite voltura,
ovviamente) la pedina avversaria dalla posizione indesiderata.</p>

    <div class="card border-primary mb-3">
        <div class="card-header">Tattica</div>
        <div class="card-body">
            <p class="card-text">Se il cinque non è pieno e il controbordo adiacente al cinque è misto,
                se l'attaccato può estrarre le pedine avversarie dal controbordo adiacente,
                il cinque non è attaccabile.</p>
            <p class="card-text">Se un tuo cinque è stato attaccato verifica se è possibile estrarre le
                pedine avversarie dal controbordo adiacente.</p>
        </div>
    </div>

<h2>Tocca a te</h2>

<p>Nel diagramma 3 giochi con il nero e il bianco ti ha appena attaccato. Utilizza la tecnica dell'estrazione
per salvare il cinque.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="attacchi-ai-5-non-funzionano-4.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 3: tecnica dell'estrazione.
    </div>
</div>
