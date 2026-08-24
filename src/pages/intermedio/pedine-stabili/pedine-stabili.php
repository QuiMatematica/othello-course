<p>Nota questo fatto:
    <b>una pedina posizionata in un angolo non può più essere girata</b>.
Infatti non è possibile imprigionarla tra due pedine avversarie
sulla stessa riga, colonna o diagonale.</p>

<p>Inoltre, una volta che un angolo è occupato da una pedina, anche le pedine
adiacenti orizzontalmente o verticalmente del medesimo colore non possono essere girate.
    Per esempio: tutte le pedine mostrate nel diagramma
    <span data-board-ref="pedine-stabili-diagramma-2"></span> non possono essere girate.</p>

<board data-type="show" data-label="pedine-stabili-diagramma-2" data-file="pedine-stabili-diagramma-2.json"
       data-caption="Pedine stabili"></board>

<div class="card border-primary mb-3">
    <div class="card-header">Definizione</div>
    <div class="card-body">
        <p class="card-text">Chiamiamo <b>stabili</b> le pedine che non possono essere girate.</p>
    </div>
</div>

<p>Le pedine posizionate negli angoli sono sempre stabili, grazie alla loro particolare posizione sulla
tavola.</p>

<p>Altre pedine possono diventare stabili, per esempio se adiacenti a un angolo. Hai già visto il diagramma
    <span data-board-ref="pedine-stabili-diagramma-2"></span>
in cui tutte le pedine sono stabili. Ma ne possiamo aggiungere altre: anche tutte le pedine del diagramma
    <span data-board-ref="pedine-stabili-diagramma-3a"></span>
sono stabili.</p>

<board data-type="show" data-label="pedine-stabili-diagramma-3a" data-file="pedine-stabili-diagramma-3a.json"
       data-caption="Pedine stabili"></board>

<p>Ma attenzione: non è sempre facile capire se una pedina è stabile o meno. Per esempio,
    la pedina <b>G2</b> del diagramma
    <span data-board-ref="pedine-stabili-diagramma-4a"></span> non è stabile perché può ancora essere girata con
    la mossa <b>H3</b> del bianco. La stessa cosa vale per <b>B3</b>: può essere girata dal bianco muovendo in <b>A4</b>.
    Sono stabili, invece, tutte le pedine nere della colonna <b>H</b>.
    Come pure sono stabili le pedine nere della colonna <b>A</b> e la pedina in <b>B1</b>.
    Anche le pedine <b>C1</b>, <b>D1</b>, <b>E1</b> ed <b>F1</b> sono stabili: anche se non sono
appoggiate a un angolo di uguale colore non possono essere girate.
    Non sono stabili, infine, le pedine bianche della riga <b>8</b>: possono essere girate dal nero muovendo in <b>B8</b>
(e diventano stabili).</p>

<board data-type="show" data-label="pedine-stabili-diagramma-4a" data-file="pedine-stabili-diagramma-4a.json"
       data-caption="La pedina <b>G2</b> non è stabile."></board>

<p>Mettiti alla prova con il conteggio di pedine stabili. Nella posizione del diagramma
    <span data-board-ref="pedine-stabili-diagramma-5"></span>
    (esempio tratto dal corso di Alessandro Di Mattei), il nero ha un'unica
pedina che, essendo in un angolo, è stabile. Sapresti dire quante delle 53 pedine bianche sono stabili?</p>

<board data-type="show" data-label="pedine-stabili-diagramma-5" data-file="pedine-stabili-diagramma-5.json"
       data-caption="Quante pedine stabili ha il bianco?"></board>

<p>Per tornare all'esempio della pagina precedente, il bianco ha perso perché aveva molte pedine
    instabili, che il nero è riuscito a girare in poche mosse.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Strategia</div>
    <div class="card-body">
        <p class="card-text">Non preoccuparti di massimizzare il numero di pedine del tuo colore.
        Preoccupati di <b>massimizzare il numero di pedine stabili</b>.</p>
    </div>
</div>

<p>Quindi <b>gli angoli sono caselle strategicamente molto importanti</b>.
    Se conquistati, possono aiutarti a raggiungere la vittoria.</p>

<p>Attenzione: <i>possono aiutarti</i>. Dopotutto un angolo è un'unica pedina che conta per 1 ai fini del
punteggio. Ma se partendo da un angolo riesci a estendere il controllo su tutta la tavola, conquisterai
la vittoria facilmente.</p>

<p>Per esempio, nella
    situazione del diagramma <span data-board-ref="pedine-stabili-diagramma-5a"></span>,
    il nero può muovere nell'angolo <b>H8</b>; nella sua mossa successiva
    potrà poi giocare in <b>H2</b>, conquistando altre 6 pedine stabili; dopo ancora può giocare in <b>C8</b>
e conquistare altre 5 pedine stabili.</p>

<board data-type="show" data-label="pedine-stabili-diagramma-5a" data-file="pedine-stabili-diagramma-5a.json"
       data-caption="Il nero può conquistare delle pedine stabili."></board>
