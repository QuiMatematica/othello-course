<h1>Regioni chiuse e parità</h1>

<div class="card border-primary mb-3">
    <div class="card-header">Definizione</div>
    <div class="card-body">
        <p class="card-text">Chiamiamo <b>regione chiusa</b> un gruppo di caselle vuote adiacenti.</p>
    </div>
</div>

<p>Considera per esempio la posizione del diagramma 1
    (tratto da <a href="https://www.youtube.com/watch?v=GSaPYWmVGmo">Othello Academy - EP010</a>).</p>

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

<p>Un giocatore ha interesse a poter fare l'ultima mossa in una regione
chiusa. L'ultima mossa infatti permette di voltare delle pedine nell'intorno di quella regione,
    pedine che difficilmente l'avversario potrà riconquistare muovendo in un'altra regione.</p>

<p>Nella posizione del diagramma 1 tocca al nero. Dove muoveresti?</p>

<p>Certamente il nero non ha interesse a giocare nella regione a sud-ovest: ci sono solo due caselle libere,
    quindi se il nero muove per primo il bianco avrà la possibilità di compiere l'ultima mossa.</p>

<p>Più interessante è la regione a nord-ovest, perché se il nero gioca per primo rimangono solo due caselle
    libere, quindi il bianco è svantaggiato a muovere per secondo in quella regione.</p>

<p>Lo stesso vale per la regione a sud-est: anche questa regione è formata da tre caselle,
    quindi il nero avrebbe interesse a giocare per primo per lasciare al bianco una regione di due caselle.</p>

<p>E già intuiamo quanto siano diverse regioni chiuse formate da un numero dispari di caselle vuote e regioni
chiuse formate da un numero pari di caselle vuote.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Definizione</div>
    <div class="card-body">
        <p class="card-text">Chiamiamo <b>regione dispari</b> una regione chiusa costituita da un numero dispari di caselle vuote.</p>
        <p class="card-text">Chiamiamo <b>regione pari</b> una regione chiusa costituita da un numero pari di caselle vuote.</p>
    </div>
</div>

<p>Per il semplice meccanismo di alternanza del turno di gioco, se gioco in una regione dispari ho la possibilità
di giocare l'ultima mossa in quella regione; se gioco in una regione pari è il mio avversario ad avere la possibilità
di giocare l'ultima mossa.</p>

<p>Ma tornando al diagramma 1, c'è una profonda differenza tra la regione a nord-ovest e la regione a sud-est.
    Nella regione a nord-ovest
anche il bianco può giocare per primo, mentre nella regione a sud-est non può farlo. Quindi se il nero giocasse
a sud-est, il bianco potrebbe giocare a nord-ovest e lasciare al nero solo regioni pari; se invece
il nero giocasse a nord-ovest, il bianco non potrebbe giocare a sud-est e si troverebbe costretto a giocare in
    una delle due regioni pari.</p>

<p>Potremmo riassumere la situazione in questo modo.</p>
<ul>
    <li>In questa posizione il nero ha due regioni dispari e una regione pari: è interessato
    a giocare in una delle regioni dispari.</li>
    <li>Se il nero gioca a sud-est, il bianco ha due regione pari e una regione dispari: può
    quindi giocare nella regione dispari (nord-ovest) e al nero rimangono tre regioni pari.
    Il nero non è contento.</li>
    <li>Se il nero gioca a nord-ovest, il bianco ha due regione pari. Non può infatti giocare a sud-est, che sarebbe
        dispari, ma gli è preclusa.
    E il nero è contento!</li>
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
    <div class="card-header">Strategia</div>
    <div class="card-body">
        <p class="card-text">In ciascuna regione chiusa in cui l'avversario può giocare,
            cerca di <b>lasciare un numero pari di caselle vuote</b>.</p>
    </div>
</div>

<div class="card border-primary mb-3">
    <div class="card-header">Definizione</div>
    <div class="card-body">
        <p class="card-text">Chiamiamo <b>parità</b> questa strategia, ovvero lasciare un numero pari di caselle vuote
        in ciascun regione chiusa in cui l'avversario ha accesso.</p>
        <p class="card-text">Si dice che <b>un colore ha la parità in una regione</b> se ha il vantaggio
            dell'ultima mossa in quella stessa regione.</p>
    </div>
</div>

<p>Per esempio il nero ha la parità nella regione a sud-est: indipendentemente da chi sia di turno ha possibilità
    di ottenere l'ultima mossa.</p>

<h2>Lasciarsi guidare dalla parità</h2>

<p>Un effetto interessante della parità è che quando la ottieni puoi permetterti il lusso di smettere di pensare,
e lasciarti guidare dalla parità stessa. Guarda il diagramma 3: il bianco ha lasciato all'avversario solo regioni
pari. Qualunque sia la mossa del nero, il bianco sa già cosa fare: dovrà semplicemente chiudere la regione in cui
il nero ha giocato.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="parita-3.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 3: lasciarsi guidare dalla parità.
    </div>
</div>

<h2>Quiz</h2>

<p>Nel diagramma 4 giochi con il nero. Utilizzare la strategia della parità ti permetterà di vincere la parita.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="parita-4.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 3.
    </div>
</div>