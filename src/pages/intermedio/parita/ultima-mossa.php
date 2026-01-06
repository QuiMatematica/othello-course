
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

<p>Ci sono <b>due eccezioni</b>:</p>
<ul>
    <li>uno dei giocatori è costretto a passare;</li>
    <li>la partita finisce con qualche casella vuota.</li>
</ul>

<p>Ma <b>se queste due eccezioni non si presentano</b> il bianco ha la parità fin dalla prima mossa:</p>
<ul>
    <li>quando sarà di turno il nero ci sarà un numero pari di caselle vuote;</li>
    <li>quando sarà di turno il bianco ci sarà un numero dispari di caselle vuote;</li>
    <li>il bianco ha la possibilità di giocare l'ultima mossa.</li>
</ul>

<p>Inoltre, all'avanzare della partita, cominceranno a formarsi delle regioni, che potranno essere pari
o dispari. Ma quando il nero sarà di turno ci sarà sempre un numero pari di spazi dispari (e zero è un numero pari).
E quando il bianco sarà di turno ci sarà sempre un numero dispari di spazi dispari.</p>

<p>Tuttavia i due eventi <i>eccezionali</i>, il salto di turno e la fine anticipata, possono comunque accadere.
In questi casi non è detto che sia il bianco a giocare l'ultima mossa. In particolare con un salto di turno
(o più genericamente, con un numero dispari di salti di turno), se non rimarranno casella vuote,
    sarà il nero a compiere l'ultima mossa.</p>

<p>Il nero può ottenere l'ultima mossa della partita solo se uno dei due colori passa il turno oppure la partita finisce
con delle caselle vuote.</p>

<h2>Il bianco parte avvantaggiato?</h2>

<p>La domanda in effetti è lecita. Se la parità è così importante, la possibilità per il bianco di giocare l'ultima
mossa gli dà un vantaggio sul nero?</p>

<p>Alcuni giocatori preferiscono giocare con il bianco proprio in forza di questo ragionamento.
    Ed è innegabile che aver la possibilità di fare l'ultima mossa sia in effetti un vantaggio.</p>

<p>Tuttavia le analisi fatte con i computer indicano
    che <b>l'Othello è un gioco pari</b>. Sono state trovate, infatti, milioni di sequenze perfette che portano al pareggio
e nessuna che porta alla vincita certa dell'uno o dell'altro colore. (Sul concetto di partita o sequenza perfetta
    ci torneremo
quando parleremo dei <a href="../finale/chapter.php">finali</a>.)</p>

<p>Questo equilibrio è sicuramente da ricercare nel numero di mosse che compone una partita.
    Se utilizziamo una tavola
"6 per 6" si giocano solo 32 mosse (36 caselle totali meno le 4 caselle occupate dalla posizione di partenza)
e le sequenze perfette portano alla vittoria del bianco. Invece con la tavola standard "8 per 8" si giocano
    60 mosse e questa quantità è sufficiente per equilibrare le sorti.</p>

<h2>Il nero deve giocare diversamente dal bianco?</h2>

<p>Ecco, questa è una domanda molto più interessante. Il nero può tentare di strappare
al bianco il diritto dell'ultima mossa. Alcuni degli esempi visti nelle pagine precedenti portavano
proprio a questa situazione. Ne faccio solo un altro per rafforzare questo concetto.</p>

<p>Nella posizione del diagramma 2 tocca al nero muovere. Ci sono 6 caselle libere:
    se non ci saranno interferenze nella normale alternanza di colori,
il bianco avrà la possibilità di giocare l'ultima mossa. Ma nella regione a sud-est il bianco non ha
    mosse legali: il nero ha la parità in quella regione.
Quindi il nero può giocare a nord-ovest lasciando al bianco solo uno spazio pari. Il bianco sarà quindi costretto
a passare e il nero conquisterà l'ultima mossa, oltre alla parità locale in entrambe le regioni.
E nota che il nero giocherà due mosse su tre per ciascuna regione, ottenendo così anche due tempi di gioco.
E la vittoria.</p>

<div class="card mx-auto board-card my-3">
    <div class="card-body">
        <div class="match-file-board" data-file="parita-globale-2.json"></div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        Diagramma 2: il nero ottiene l'ultima mossa.
    </div>
</div>

<h2>Come giocare con il bianco e con il nero</h2>

<p>La cosa più importante è giocare al meglio delle proprie possibilità fin dalla prima mossa.
Qualunque sia il tuo colore, se giocherai meglio dell'avversario ti troverai in una situazione di vantaggio
che ti porterà alla vittoria. Ma tra le tante cose che dovrai tenere presente durante la partita ci sarà
anche l'ultima mossa.</p>

<div class="card border-primary mb-3">
    <div class="card-header">Strategia</div>
    <div class="card-body">
        <p class="card-text">Se giochi con il bianco, cerca di <b>mantenere la possibilità di giocare l'ultima mossa</b>.</p>
        <p class="card-text">Se giochi con il nero, cerca di <b>ottenere la possibilità di giocare l'ultima mossa</b>.</p>
    </div>
</div>

<p>Utilizzare al meglio la parità locale è uno dei modi per ottenere la possibilità di giocare l'ultima mossa.</p>
