<h1>Incunearsi</h1>

<p>Gli angoli sono strategicamente importanti: questo ormai l'abbiamo capito. Questo si ripercuote
    immediatamente sul modo di giocare sui bordi. Considera, per esempio, il diagramma 1.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="incunearsi-1.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 1: incunearsi.
    </div>
</div>

<p>Se il nero gioca in C8, qualunque sia la risposta del bianco, potrà poi prendere A8.
    La pedina C8, infatti, non può essere girata dal momento che è circondata da due pedine bianche.
    Si dice che la pedina nera è <b>"incuneata"</b> (in inglese "wedged"). Vedi nel diagramma 2 un possibile sequenza
di mosse.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="incunearsi-2.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 2: incunearsi.
    </div>
</div>

<p>Ora guardiamo il lato est: il nero può fare la stessa manovra?
    Se il nero giocasse in H6, il bianco potrebbe giocare in H5 (diagramma 3).
    E se il nero giocasse in H5, il bianco risponderebbe in H6.</p>
<p>Il nero non riesce a incunearsi perché ci sono due caselle libere: qualunque delle due scelga, il bianco può
rispondere nell'altra.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="incunearsi-3.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 3: incuneamento fallito.
    </div>
</div>

<p>Infine, concentriamoci sul lato nord. Se il nero gioca in C1 minaccia di andare in A1; il bianco può difendersi
giocando in D1. Ma, a questo punto il nero può incunearsi in E1. Vedi il diagramma 4.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="incunearsi-4.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 4: incuneamento riuscito.
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
            ma non si è sbilanciato in una casella C, puoi comunque incunearti e guadagnare un tempo di gioco.</p>
    </div>
</div>

<h2>Tocca a te</h2>

<p>Nel diagramma 5 giochi con il nero. A sud non hai mosse a disposizione. Evita di cedere un angolo. Quale mossa
ti rimane che non permette al bianco di incunearsi?</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="incunearsi-5.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 5: impedire al bianco di incunearsi.
    </div>
</div>

<p>Nel diagramma 6 giochi con il bianco. Muovi ma facendo attenzione a impedire al nero di incunearsi.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="incunearsi-6.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 6: impedire al nero di incunearsi.
    </div>
</div>

<p>Nel diagramma 7 giochi con il bianco. Conquista un angolo in due mosse.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="incunearsi-7.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 7: conquista un angolo in due mosse.
    </div>
</div>

<p>Nel diagramma 8 giochi con il nero. Conquista un angolo in non più di tre mosse.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="sequence-board" data-file="incunearsi-8.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 8: conquista un angolo in non più di tre mosse.
    </div>
</div>
