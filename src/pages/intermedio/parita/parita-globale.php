<h1>La parità globale: il nero e il bianco</h1>

<p>Inizia una nuova partita. Tu e il tuo avversario vi sedete davanti alla tavola da gioco e trovate
la posizione del diagramma 1: la posizione di partenza.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="parita-globale-1.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 1: la posizione di partenza.
    </div>
</div>

<p>Sulla scacchiera è presente un'unica regione formata da 60 caselle vuote. &Egrave; una regione pari.
E la mossa è al nero. Questo significa che il bianco ha la parità?</p>

<p>Ci sono due eccezioni: uno dei giocatori è costretto a passare, oppure la partita finisce con qualche casella
vuota. Ma se queste due situazioni non avvengono il bianco ha la parità fin dalla prima mossa, perché ha la
    possibilità di giocare l'ultima mossa.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Definizione</div>
    <div class="card-body">
        <p class="card-text">Chiamiamo <b>parità naturale</b> la possibilità per il bianco di giocare l'ultima mossa
            delle partite che si concludono alla sessantesima mossa e senza salti di turno.</p>
    </div>
</div>

<p>La parità <b>naturale</b> è, per definizione, del bianco. Se non si presentano le due
    eccezioni riportate sopra, la situazione rimarrà inalterata per tutta la partita:
    quando sarà di turno il nero ci sarà un numero pari di caselle vuote,
    quando sarà di turno il bianco ci sarà un numero dispari di caselle vuote.</p>

<p>Inoltre, all'avanzare della partita, cominceranno a formarsi delle regioni, che potranno essere pari
o dispari. Ma quando sarà di turno il nero ci sarà sempre un numero pari di spazi dispari (e zero è un numero pari).
E quando sarà di turno il bianco ci sarà sempre un numero dispari di spazi dispari: quindi il bianco avrà sempre almeno
uno spazio dispari a disposizione.</p>

<p>Tuttavia i due eventi "eccezionali", il salto di turno e la fine anticipata, possono comunque accadere.
In questi casi non è detto che sia il bianco a giocare l'ultima mossa. In particolare con un salto di turno
(o più genericamente, con un numero dispari di salti di turno) sarà il nero a compiere l'ultima mossa.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Definizione</div>
    <div class="card-body">
        <p class="card-text">Chiamiamo <b>parità globale</b> la possibilità per un colore di giocare l'ultima mossa.</p>
    </div>
</div>

<p>Il nero può ottenere la parità <b>globale</b> solo se uno dei due colori passa il turno oppure la partita finisce
con delle caselle vuote (e l'ultima mossa è del nero).</p>

<p>Chiaramente, se il nero ottiene la parità globale, le considerazioni numeriche riportate sopra devono cambiare
colore di riferimento.</p>

<h2>Il bianco parte avvantaggiato?</h2>

<p>La domanda in effetti è lecita. Se la parità è così importante, la possibilità per il bianco di giocare l'ultima
mossa gli dà un vantaggio sul nero?</p>

<p>Alcuni giocatori preferiscono giocare con il bianco proprio in forza di questo ragionamento.
    Ed è innegabile che aver la possibilità di fare l'ultima mossa sia in effetti un vantaggio.</p>

<p>Tuttavia gli studi che si stanno facendo con i computer alla ricerca della partita perfetta stanno indicando
che l'Othello è un gioco pari. Sono state trovate, infatti, milioni di sequenze perfette che portano alla parità
e nessuna che porta alla vincita certa dell'uno o dell'altro colore. (Sul concetto di partita o sequenza perfetta
    ci torneremo
quando parleremo dei finali.)</p>

<p>Questo equilibrio è sicuramente da ricercare nel numero di mosse che compone una partita.
    Se utilizziamo una tavola
"6 per 6" si giocano solo 32 mosse (36 caselle totali meno le 4 caselle occupate dalla posizione di partenza)
e le sequenze perfette portano alla vittoria del bianco. Invece con la tavola standard "8 per 8" si giocano
    60 mosse e questa quantità è sufficiente per equilibrare le sorti.</p>

<h2>Il nero deve giocare diversamente dal bianco?</h2>

<p>Ecco, questa è una domanda molto più interessante. Il nero può tentare di strappare la parità globale
al bianco e arrogarsi il diritto dell'ultima mossa. Alcuni degli esempi visti nelle pagine precedenti portavano
proprio a questa situazione. Ne faccio solo un altro per rafforzare questo concetto.</p>

<p>Nella posizione del diagramma 2 tocca al nero muovere. Ci sono 6 caselle libere, quindi la parità globale
è ancora al bianco: se non ci saranno interferenze nella normale alternanza di colori,
il bianco avrà la possibilità di giocare l'ultima mossa. Ma nella regione a sud-est il bianco non può giocare per primo:
    il nero ha la parità in quella regione.
Quindi il nero può giocare a nord-ovest lasciando al bianco solo uno spazio pari. Il bianco sarà quindi costretto
a passare e il nero conquisterà la parità globale, oltre alla parità "locale" in entrambe le regioni.
E nota che il nero giocherà due mosse su tre per ciascuna regione, ottenendo così anche due tempi di gioco.
E la vittoria.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="parita-globale-2.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 2: la parità globale.
    </div>
</div>

<p>Torna alla posizione di partenza del diagramma 2. In una posizione come questa la parità globale è ancora di
diritto in mano al bianco: infatti è di turno il nero e c'è un numero pari di caselle vuote. Tuttavia il nero ha
la certezza matematica di poter giocare l'ultima mossa, grazie al fatto che l'avversario non può giocare nella
regione a sud-est. Quindi possiamo già affermare che la parità globale è potenzialmente in mano al nero.
Sarà bravura del giocatore convertire questa parità potenziale in una parità globale attuale.</p>

<h2>Come giocare con il bianco e con il nero</h2>

<p>La cosa più importante è giocare al meglio delle proprie possibilità fin dalla prima mossa.
Qualunque sia il tuo colore, se giocherai meglio dell'avversario ti troverai in una situazione di vantaggio
che ti porterà alla vittoria. Ma tra le tante cose che dovrai tenere presente durante la partita c'è
anche la parità globale.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Strategia</div>
    <div class="card-body">
        <p class="card-text">Se giochi con il bianco, cerca di <b>mantenere la parità globale</b>.</p>
        <p class="card-text">Se giochi con il nero, cerca di <b>ottenere la parità globale</b>.</p>
    </div>
</div>

<p>Utilizzare al meglio la parità "locale" è uno dei modi per ottenere la parità globale.</p>
