<h1>La complessità dell'Othello</h1>

<h2>Cosa intendiamo per complessità</h2>

<p>Il concetto di complessità deriva dal mondo dell'informatica e in particolare
della "ricerca operativa".</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
        <p class="card-text">Dato un problema, si definisce <b>complessità</b>
il numero di operazioni che bisogna eseguire per risolverlo.</p>
	</div>
</div>

<p>Per esempio, se io ho un insieme di <i>n</i> numeri in ordine sparso, quante
operazioni devo compiere per verificare se un dato numero <i>x</i> è
presente tra quelli dati? Nel caso peggiore (ovvero il numero non è presente),
dovrò eseguire <i>n</i> confronti tra i numeri dell'insieme e <i>x</i>.

<p>Se invece i numeri di partenza sono ordinati, possiamo partire dal centro e capire se il numero <i>x</i>
che cerchiamo si trova nella prima o nella seconda metà dell'elenco. Capito in quale metà si trova, ripetiamo
il procedimento fino a individuarlo. Il numero di confronti necessari è inferiore, per l'esattezza è al massimo
log<sub>2</sub><i>n</i>.</p>

<p>Analogamente, <b>la complessità dell'Othello è data dal numero
di operazioni necessarie per trovare la partita perfetta</b>, quella che rappresenta
il finale perfetto calcolato dalla prima mossa.</p>

<h2>60!</h2>

<p><a href="tre-o-piu-mosse.php">All'inizio di questo capitolo</a> abbiamo visto
come si calcola il finale perfetto a partire da una posizione. A questo punto
facciamo queste osservazioni:</p>

<ul>
  <li>all'ultima mossa c'è sempre una sola casella libera, quindi c'è al più
  una sola mossa possibile;</li>
  <li>alla penultima mossa ci sono due caselle libere, quindi ci sono al più
  due mosse possibili; il numero massimo di sequenze possibili è, quindi, 2 ⋅ 1 = 2, due per la scelta della penultima
      casella e una per la scelta-obbligata dell'ultima casella;</li>
  <li>alla terz'ultima mossa ci sono tre caselle libere, quindi ci sono al più
  tre mosse possibili; a ciascuna di queste corrispondo nel turno successivo
  al più due mosse, seguita da una mossa obbligata, quindi avremo al massimo 3 ⋅ 2 ⋅ 1 = 6 sequenze;</li>
  <li>alla quart'ultima mossa ci sono quattro caselle libere, quindi ci sono al più
  quattro mosse possibili; a ciascuna di queste corrispondo nel turno successivo
  le mosse calcolate al punto precedente, quindi avremo al massimo 4 ⋅ 3 ⋅ 2 ⋅ 1 = 24 sequenze;</li>
  <li>...</li>
</ul>

<p>Generalizzando, alla <i>n</i>-esima mossa ci sono
    <b>60 - <i>n</i></b> caselle vuote (non 64 - <i>n</i> perché si parte con 4 caselle già
    occupate) e quindi <b>60 - <i>n</i></b> possibili mosse. Ripetendo a ritroso fino
alla prima mossa questo ragionamento abbiamo che il numero totale di sequenze
possibili è dato da:</p>

<p class="text-center"><b>60 ⋅ 59 ⋅ 58 ⋅ ... ⋅ 4 ⋅ 3 ⋅ 2 ⋅ 1</b></p>

<p>Questa catene di moltiplicazioni è "sintetizzabile" in:</p>

<p class="text-center"><b>60!</b></p>

<p>dove il punto esclativo "!" indica l'operazione di fattoriale. Quindi il numero di sequenze possibili è "60 fattoriale".</p>

<p>Confessa che muori dalla voglia di sapere quanto fa 60!... Ebbene:</p>

<p class="text-center"><b>60! ≃ 8,321 ⋅ 10<sup>81</sup></b></p>

<p>come dire, un 8 seguito da 81 zeri!!!</p>

<h2>Trovare la partita perfetta (1)</h2>

<p>Immagina ora di avere un calcolatore in grado di calcolare 1000 miliardi di nodi
dell'albero delle mosse in un secondo. Per costruire tutto l'albero ci
impiegherà:</p>

<p class="text-center">8,321 ⋅ 10<sup>81</sup> nodi : 10<sup>12</sup> nodi/secondo =
8,321 ⋅ 10<sup>69</sup> secondi = <b>2,639 ⋅ 10<sup>62</sup> anni</b></p>

<p>Decisamente troppo tempo!</p>

<p>In effetti questa è la logica del fattoriale: se, per esempio, per calcolare
l'albero con 15 caselle libere ci metti 1 secondo, per calcolare l'albero con
16 caselle libere ci metterai 16 secondi: per ciascuna mossa possibile arriverai
a un albero da 15 caselle che avrà bisogno di 1 secondo per essere percorso.
Quindi con 17 caselle libere ci metterai 272 secondi (4 minuti e mezzo), con
18 caselle libere ci metterai 4896 secondi (1 ora e 20 minuti), eccetera
eccetera eccetera...</p>

<h2>Un conteggio diverso</h2>

<p>Come ti sarà molto facile comprendere, la tecnica sopra utilizzata sbaglia in eccesso
e di molto. Alla prima mossa, quando ci sono 60 caselle libere, abbiamo conteggiato
60 mosse possibili. In verità sappiamo benissimo che sono solo 4, e per di più simmetriche, quindi potremmo contarle
    come una sola. Più generalmente
è assai difficile che alla <i>n</i>-esima mossa ci siano 60 - <i>n</i> mosse
giocabili.</p>

<p>C'è inoltre un secondo difetto, più sottile. Se potessimo calcolare tutte le mosse,
troveremmo spesso posizioni uguali in nodi diversi dell'albero. In quel
caso ci sarà sufficiente calcolare le rimanenti mosse una sola volta.</p>

<p>Un conteggio diverso può nascere allora da questa osservazione: se costruiremo
l'albero delle mosse troveremo sicuramente tutte le posizioni ottenibili.</p>

<p>Proviamo allora a contare le posizioni possibili.</p>

<p>Ciascuna casella può trovarsi in tre possibili stati:</p>
<ul>
    <li>vuota;</li>
    <li>occupata da una pedina che mostra il lato nero;</li>
    <li>occupata da una pedina che mostra il lato bianco.</li>
</ul>

<p>In un'ipotetica tavola di due caselle avremo 9 posizioni possibili: per
ciascuno degli stati possibili della prima (che sono tre), la seconda ha tre
    stati possibili. <b>3 ⋅ 3 = 9</b>.</p>
<p>In un'ipotetica scacchiera di tre caselle, per ciascuno
degli stati possibili della prima (che sono sempre tre), le altre due avrebbero
    9 stati possibili, per un totale di <b>3 ⋅ 9 = 27</b>.</p>

<p>Generalizziamo per una scacchiera di 64 caselle raggiungiamo il numero di:</p>

<p class="text-center"><b>3<sup>64</sup></b></p>

<p>stati possibili.</p>

<p>Ok, ok, ti dico subito quanto fa:</p>

<p class="text-center"><b>3<sup>64</sup> = 3,434  ⋅ 10<sup>30</sup></b></p>

<p>Molti meno rispetto a quelli precedenti... ma pur sempre tantissimi!</p>

<p>Anche questo conteggio è sovrabbondante: per esempio stiamo conteggiando una
gran quantità di posizioni impossibili, o perché le quattro caselle centrali sono
vuote o perché le pedine sono in gruppetti staccati tra loro. Comunque sia siamo
riusciti a ottenere una stima un po' più precisa rispetto all'esagerato 60!</p>

<h2>Trovare la partita perfetta (2)</h2>

<p>Rifacciamo un po' i conti... Dunque un calcolatore che analizza 1000
miliardi di posizioni in un secondo, per calcolare tutte le posizioni possibili
impiegherebbe:</p>

<p class="text-center">3,434 ⋅ 10<sup>30</sup> nodi : 10<sup>12</sup> nodi/secondo =
3,434 ⋅ 10<sup>18</sup> secondi = <b>1,089 ⋅ 10<sup>11</sup> anni</b></p>

<p>Molto meglio... :-) Ma ancora troppo!!!</p>

<p>Per ora non mi pare il caso di tentare calcoli ancora più precisi. Tanto
credo che il numero di posizioni possibili sia comunque enorme!</p>

<h2>Othello 6×6</h2>

<p>E con una scacchiera più piccola? Beh, le cose cambiano molto!</p>

<p>Una variante simpatica dell'Othello é quella di utilizzare una tavola 6×6.</p>

<p>Con il nostro calcolo sovrabbondante il numero di mosse possibili è:</p>

<p class="text-center"><b>3<sup>36</sup> = 150.094.635.296.999.121</b></p>

<p>che un (più reale) calcolatore che calcola 1 milione di nodi al secondo
analizza in:</p>

<p class="text-center">150.094.635 secondi = <b>4,8 anni</b></p>

<p>Beh, dell'Othello 6×6 è stata calcolata la partita perfetta (in meno di 4 anni,
ovviamente) e si è scoperto che il bianco vince per 20 a 16. Se invece si mettono
le quattro pedine iniziali parallele il bianco vince per 19 a 17.</p>

<h2>E se un calcolatore ci riuscisse?...</h2>

<p>Anno 2052, un super-mega calcolatore quantistico trova la partita perfetta
dell'Othello... Fine del gioco?</p>

<p>No, sicuramente no!!! Anche se tutti memorizzassero la partita perfetta,
non appena uno cambia mossa (anche alla seconda), va rifatto il calcolo
per trovare il finale perfetto... E non è umanamente possibile memorizzare
tutti i finali perfetti di tutte le posizioni.</p>

<p>Alcuni giochi più "semplici" (nel senso che hanno una complessità inferiore) dell'Othello sono già stati risolti, come la dama
 e alcune versioni più famose del mancala, eppure sono tuttora giocati!!!</p>

<p>Non è stato risolto l'Othello. Non è stato risolto il gioco degli scacchi.
E non è ancora stato risolto il Go, che, tra i giochi che conosco, è sicuramente quello con complessità più
elevata, pari a 3<sup>(19 ⋅ 19)</sup>.</p>

<p>Ma i computer sono ormai imbattibili in tutti questi giochi. E di questo parleremo in un apposito capitolo.</p>