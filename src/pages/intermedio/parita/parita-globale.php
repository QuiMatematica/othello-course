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
mossa gli dà un certo vantaggio?</p>

<p>Alcuni giocatori preferiscono giocare con il bianco proprio in forza di questo ragionamento e di questo ipotetico
ragionamento. Ed è innegabile che aver la possibilità di fare l'ultima mossa sia in effetti un vantaggio.</p>

<p>Tuttavia gli studi che si stanno facendo con i computer alla ricerca della partita perfetta stanno indicando
che l'Othello è un gioco pari. Sono state trovate, infatti, milioni di sequenze di mosse perfette che portano alla parità
e nessuna che porta alla vincita certa dell'uno o dell'altro colore. (Sul concetto di partita perfetta ci torneremo
quando parleremo dei finali.)</p>

<p>Questo equilibrio è sicuramente da ricercare nella quantità di mosse da giocare. Se utilizziamo una tavola
"6 per 6" ci saranno solo 32 mosse (36 caselle totali meno le 4 caselle occupate dalla posizione di partenza)
e le sequenze perfette portano alla vittoria del bianco. Invece con la tavola standard "8 per 8" ci saranno
60 mosse e questa quantità è sufficiente per equilibrare le sorti.</p>

<h2>Il nero deve giocare diversamente dal bianco?</h2>

<p>Ecco, questa è una domanda molto più interessante. Il nero può tentare di strappare la parità globale
al bianco e arrogarsi in diritto dell'ultima mossa. Molti degli esempi visti nelle pagine precedenti portavano
proprio a questa situazione. Ne faccio solo un altro per rafforzare questo concetto.</p>

<p>Nella posizione del diagramma 2 tocca al nero muovere. Ci sono 6 caselle libere, quindi la parità globale
è ancora al bianco che, se non ci sono interferenze nella normale alternanza di colori,
ha ancora la possibilità di giocare l'ultima mossa. Ma nella regione a sud-est il bianco non può giocare per primo.
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





<p>Se durante una partita nessuno dei due giocatori è costretto a passare il turno, ci
sarà sempre un numero pari di caselle libere quando deve giocare il nero, e un numero
    dispari di caselle libere quando deve giocare il bianco.
    In un certo senso, questo vuol dire che
è il bianco a detenere la parità fin dall'inizio della partita.</p>

<p>Per questo motivo, fino a qualche anno fa, si era convinti che il bianco avesse
un leggero vantaggio rispetto al nero e che la partita perfetta portasse a una
vittoria (seppur limitata) del bianco. Ma 60 mosse sono tante e può succedere di tutto.
    I recenti studi con il computer hanno evidenziato che
ci sono moltissime sequenze che portano al pareggio (ma di questo parleremo più
avanti).</p>

<p>Resta il fatto che, dal punto di vista della parità, è più facile giocare con il
bianco.</p>

<p>E il nero, allora?</p>

<p>Banalmente, la prima cosa che si può dire è che il nero ha la possibilità di
vincere se arriva in finale con un numero sufficientemente alto di pedine stabili,
in modo da bilanciare lo svantaggio derivante dalla parità.
Muovendo per primo può girare più pedine per primo, in modo da cercare di mantenerle
fino in fondo. Ma non è una strategia facilmente attuabile e il vantaggio dell'ultima mossa
    è dominante su quello della prima mossa.</p>

<p>Più concretamente, come abbiamo visto in molti degli esempi precedenti,
    il nero può cercare di costruire delle regioni dispari in cui ha la parità.
Così facendo può giocare in modo da riempire tutti gli altri spazi, per poi costringere
l'avversario a passare, ottenendo così la parità.</p>

<p>Una seconda possibilità, più complessa e più rischiosa, è di porsi in una situazione in cui
è costretto a passare, in modo da ottenere comunque la possibilità di fare l'ultima mossa.</p>

<p>Una terza possibilità più interessante, ma difficilmente attuabile, consiste nel costringere
il bianco a concedere altri vantaggi strategici per evitare di perdere la parità.</p>

<p>Ma in verità c'è un unico modo per vincere con il nero: giocare meglio del bianco.</p>
