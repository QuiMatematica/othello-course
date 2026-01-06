<h1>Attacchi ai cinque e parità</h1>

<p>L'analisi di una posizione e la scelta della mossa successiva non può limitarsi all'applicazione di un'unica
strategia o un'unica tattica. Questo significa che se il tuo avversario ha un cinque attaccabile, non è detto
che attaccarlo, e attaccarlo subito, sia la scelta migliore. Devi vagliare la tua possibilità anche alla luce
di tutte le altre strategie, in particolare, visto che stiamo giocando sui bordi,
    della
    <a href="../parita/chapter.php">parità</a>.</p>

<h2>Attacco da regione pari</h2>

<p>Iniziamo con il diagramma 1, in cui il nero ha un cinque attaccabile sul bordo ovest.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="cinque-e-parita-1.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 1: attacchi al cinque e parità.
    </div>
</div>

<p>Se il bianco pensasse solo ad attaccare il cinque e prendere il bordo ovest, si metterebbe nei guai.
Osserva la sequenza nel diagramma 2.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="cinque-e-parita-2.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 2: attacchi al cinque e parità.
    </div>
</div>

<p>L'analisi corretta della situazione doveva certamente tenere conto dell'opportunità di attaccare il cinque a ovest,
    ma doveva tenere conto anche della parità.</p>
<p>La regione a nord-ovest è formata da quattro caselle, quindi dal punto di vista della parità il bianco non
dovrebbe giocarci. &Egrave; più opportuno sfruttare la regione dispari a nord-est, in modo da costringere
    il nero a giocare in regioni pari. Osserva la sequenza corretta nel diagramma 3.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="cinque-e-parita-3.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 3: attacchi al cinque e parità.
    </div>
</div>

<h2>Attacco da regione dispari</h2>

<p>Analizza ora la posizione del diagramma 4.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="cinque-e-parita-4.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 4: attacchi al cinque e parità.
    </div>
</div>

<p>Abbiamo sia un cinque del nero sia un cinque (pieno) del bianco. Tocca al bianco, che ha ancora la parità, infatti
può giocare nell'area dispari a nord-ovest. E giocandoci inizia l'attacco al cinque nero.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="cinque-e-parita-5.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 5: attacchi al cinque e parità.
    </div>
</div>

<p>L'attacco del bianco, alla fine, non è servito a prendere il cinque, ma per giocare in una zona dispari. E il nero ha perso
non tanto perché ha sbagliato l'attacco, ma perché era già in una posizione di svantaggio.</p>

<p>Se dopo la mossa B2 del bianco il nero avesse giocato in A1... beh, guarda nel diagramma 6 cosa sarebbe successo.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="cinque-e-parita-6.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 6: attacchi al cinque e parità.
    </div>
</div>

<h2>Confronto</h2>

<p>Nel primo esempio il bianco deve evitare di attaccare perché dovrebbe giocare in una regione pari.
Nel secondo esempio, invece, il bianco può attaccare, perché giocherebbe in una regione dispari.</p>

<p>Nel primo esempio, se il bianco attacca, per il nero è vantaggioso prendere l'angolo anche se perde tutto il bordo ovest,
tanto gioca la parità in quella regione e mette in salvo il bordo nord. Nel secondo esempio, invece, se il bianco
    attacca, il nero non
deve rispondere prendendo l'angolo, altrimenti si trova in ritardo di una mossa rispetto all'attacco a sud.</p>

<p>Ovviamente, proprio perché dobbiamo tenere conto di tutti gli elementi caratterizzanti della posizione, queste
    osservazioni non sono sempre vere. Se ci sono altri vantaggi da sfruttare, può essere conveniente giocare
    "contro la parità". Però, in generale, associare un attacco corretto con la parità è vantaggioso.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Strategia</div>
    <div class="card-body">
        <p class="card-text">&Egrave; vantaggioso attaccare un cinque se devi giocare in una zona dispari;
            è svantaggioso attaccare un cinque se devi giocare in una zona pari.</p>
        <p class="card-text">Se sei stato attaccato: è vantaggioso prendere l'angolo se è in una zona dispari;
        è svantaggioso prendere l'angolo se è in una zona pari.</p>
    </div>
</div>
