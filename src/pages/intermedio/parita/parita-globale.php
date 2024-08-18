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

<p>Sulla scacchiera è presente un'unica regione chiusa formata da 60 caselle vuote. &Egrave; una regione pari.
E la mossa è al nero. Questo significa che il bianco ha la parità?</p>

<p>Ci sono due eccezioni: uno dei giocatori è costretto a passare, oppure la partita finisce con qualche casella
vuota. Ma se queste due situazioni non avvengono il bianco ha la parità fin dalla prima mossa, perché ha la
    possibilità (speranza?) di giocare l'ultima mossa.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Definizione</div>
    <div class="card-body">
        <p class="card-text">Chiamiamo <b>parità globale</b> la possibilità per un colore di giocare l'ultima mossa.</p>
    </div>
</div>

<p>All'inizio della partita la parità globale è al bianco. E questa situazione (sempre al netto delle due
    eccezioni riportate sopra) rimane inalterata per tutta la partita: il nero giocherà sempre in uno spazio pari,
mentre il bianco giocherà sempre in uno spazio dispari.</p>

<h2>Il bianco parte avvantaggiato?</h2>

<p>La domanda in effetti è lecita. Se la parità è così importante, la possibilità per il bianco di giocare l'ultima
mossa gli dà un vantaggio sul nero?</p>

<p>Alcuni giocatori preferiscono giocare con il bianco proprio in forza di questo ragionamento.
    Ed è innegabile che aver la possibilità di fare l'ultima mossa sia in effetti un vantaggio.</p>

<p>Tuttavia gli studi che si stanno facendo con i computer alla ricerca della partita perfetta stanno indicando
che l'Othello è un gioco pari. Sono state trovate, infatti, milioni di sequenze di mosse perfette che portano alla parità
e nessuna che porta alla vincita certa dell'uno o dell'altro colore. (Sul concetto di partita perfetta ci torneremo
quando parleremo dei finali.)</p>

<p>Questo equilibrio è sicuramente da ricercare nella quantità di mosse da giocare. Se utilizziamo una tavola
"6 per 6" si giocano solo 32 mosse (36 caselle totali meno le 4 caselle occupate dalla posizione di partenza)
e le sequenze perfette portano alla vittoria del bianco. Invece con la tavola standard "8 per 8" si giocano
    60 mosse e questa quantità è sufficiente per equilibrare le sorti.</p>

<h2>Il nero deve giocare diversamente dal bianco?</h2>

<p>Ecco, questa è una domanda molto più interessante. Il nero può tentare di strappare la parità globale
al bianco e arrogarsi il diritto dell'ultima mossa. Molti degli esempi visti nelle pagine precedenti portavano
proprio a questa situazione. Ne faccio solo un altro per rafforzare questo concetto.</p>

<p>Nella posizione del diagramma 2 tocca al nero muovere. Ci sono 6 caselle libere, quindi la parità globale
è ancora al bianco: se non ci saranno interferenze nella normale alternanza di colori,
il bianco avrà la possibilità di giocare l'ultima mossa. Ma nella regione a sud-est il bianco non può giocare per primo:
    il nero ha la parità in quella regione.
Quindi il nero può giocare a nord-ovest lasciando al bianco solo uno spazio pari. Il bianco sarà quindi costretto
a passare e il nero conquisterà la parità globale, oltre alla parità "locale" in entrambe le regioni chiuse.
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

<h2>Come giocare con il bianco e con il nero</h2>

<p>La cosa più importante è giocare al meglio delle proprie possibilità fin dalla prima mossa.
Qualunque sia il tuo colore, se giocherai meglio dell'avversario ti troverai in una situazione di vantaggio
che ti porterà alla vittoria. Ma tra le tante cose che dovrai tenere presente durante la partita c'è
anche la parità globale.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Strategia</div>
    <div class="card-body">
        <p class="card-text">Se giochi con il bianco, cerca di mantenere la <b>parità globale</b>.</p>
        <p class="card-text">Se giochi con il nero, cerca di ottenere la <b>parità globale</b>.</p>
    </div>
</div>
