<h1>Appendice: la complessità dell'Othello</h1>

<h2>Cosa intendo per complessità</h2>

<p>Il concetto di complessità deriva dal mondo dell'informatica e in particolare
della "ricerca operativa".</p>

<p><b>Dato un problema, si definisce complessità
il numero di operazioni che bisogna eseguire per risolverlo.</b>.</p>

<p>Per esempio, se io ho un insieme di <i>n</i> numeri in ordine sparso, quante
operazioni devo compiere per verificare se un dato numero <i>x</i> è
presente tra quelli dati? Nel caso peggiore (ovvero il numero non è presente),
dovrò eseguire <i>n</i> confronti tra un numero dell'insieme e <i>x</i>.

<p>Similmente, <b>la complessità dell'Othello è data dal numero
di operazioni necessarie per trovare la partita perfetta</b>, quella che rappresenta
il finale perfetto analizzato fin dalla prima mossa.</p>

<h2>60!</h2>

<p>Beh, nella <a href="tre-o-piu-mosse.php">pagina precedente</a> abbiamo capito
come si calcola il finale perfetto a partire da una mossa. A questo punto
facciamo queste osservazioni:</p>

<ul>
  <li>all'ultima mossa c'è sempre una sola casella libera, quindi c'è al più
  una sola mossa possibile;</li>
  <li>alla penultima mossa ci sono due caselle libere, quindi ci sono al pi�
  due mosse possibili; il numero di sequenze possibili è, quindi, 2;</li>
  <li>alla terz'ultima mossa ci sono tre caselle libere, quindi ci sono al pi�
  tre mosse possibili; a ciascuna di queste corrispondo nel turno successivo
  al pi� due sequenze, quindi avremo al massimo 3 x 2 = 6 sequenze;</li>
  <li>alla quart'ultima mossa ci sono quattro caselle libere, quindi ci sono al pi�
  quattro mosse possibili; a ciascuna di queste corrispondo nel turno successivo
  al pi� sei sequenze, quindi avremo al massimo 6 x 4 = 24 sequenze;</li>
  <li>...</li>
</ul>

<p>Generalizzando, abbiamo che alla <i>n</i>-esima mossa ci sono
60 - <i>n</i> caselle vuote (non 64 - n perché si parte con 4 caselle già
occupate) e quindi 60 - <i>n</i> possibili mosse. Ripetendo a ritroso fino
alla prima mossa questo ragionamento abbiamo che il numero totale di sequenze
possibili � dato da:</p>

<p align="center">60 x 59 x 58 x ... x 4 x 3 x 2 x 1</p>

<p>Questo numero è "sintetizzabile" in:</p>

<p align="center">60!</p>

<p>dove il punto esclativo "!" indica l'operazione di fattoriale.</p>

<p>Confessa che muori dalla voglia di sapere quanto fa 60!... Ebbene:</p>

<p align="center">60! = 8,321 x 10<sup>81</sup></p>

<p>come dire, un 8 seguito da 81 zeri!!!</p>

<h2>Trovare la partita perfetta (1)</h2>

<p>Immagina ora di avere un calcolatore che riesca a costruire 1000 miliardi di nodi
dell'albero delle mosse in un secondo. Per costruire tutto l'albero ci
impiegherò:</p>

<p align="center">8,321 x 10<sup>81</sup> nodi : 10<sup>12</sup> nodi/sec =
8,321 x 10<sup>69</sup>sec = 2,639 x 10<sup>62</sup> anni</p>

<p>Uhm... un po' troppo, no?...</p>

<p>In effetti questa � la logica del fattoriale: se, per esempio, per calcolare
l'albero con 15 caselle libere ci metti 1 secondo, per calcolare l'albero con
16 caselle libere ci metterai 16 secondi: per ciascuna mossa possibile arriverai
ad un albero da 15 caselle che avr� bisogno di 1 secondo per essere percorso.
Quindi con 17 caselle libere ci metterai 272 secondi (4 minuti e mezzo), con
18 caselle libere ci metterai 4896 secondi (1 ora e 20 minuti), eccetera
eccetera eccetera...</p>

<h2>Un conteggio diverso</h2>

<p>Come ti sar� molto facile comprendere, la tecnica sopra utilizzata sbaglia in eccesso
e di molto. Alla prima mossa, quando ci sono 60 caselle libere, abbiamo conteggiato
60 mosse possibili. In verità sappiamo benissimo che sono solo 4. Più generalmente
è assai difficile che alla <i>n</i>-esima mossa ci siano 60 - <i>n</i> mosse
giocabili.</p>

<p>C'è inoltre una seconda pecca, più sottile. Se potessimo calcolare tutte le mosse,
troveremmo spesso una stessa posizione in diversi punti dell'albero. In quel
caso ci sarà sufficiente calcolare le rimanenti mosse una sola volta.</p>

<p>Un conteggio diverso può nascere allora da questa osservazione: se costruiremo
l'albero delle mosse troveremo sicuramente tutte le posizioni ottenibili.</p>

<p>Proviamo allora a contare le posizioni possibili.</p>

<p>Ciascuna casella può trovarsi in tre possibili stati: vuota, occupata da una
pedina che mostra il lato nero, occupata da una pedina che mostra il lato bianco.</p>

<p>In un'ipotetica scacchiera di due caselle avremo 9 posizioni possibili: per
ciascuno degli stati possibili della prima (che sono tre), la seconda ha tre
stati possibili. 3 x 3 = 9. In un'ipotetica scacchiera di tre caselle, per ciascuno
degli stati possibili della prima (che sono sempre tre), le altre due avrebbero
9 stati possibili, per un totale di 3 x 9 = 27.</p>

<p>Generalizziamo per una scacchiera di 64 caselle raggiungiamo il numero di:</p>

<p align="center">3<sup>64</sup></p>

<p>stati possibili.</p>

<p>Ok, ok, ti dico subito quanto fa:</p>

<p align="center">3<sup>64</sup> = 3,434  x 10<sup>30</sup></p>

<p>Molti meno rispetto a quelli precedenti... ma pur sempre tantissimi!</p>

<p>Anche questo conteggio è sovrabbondante: per esempio stiamo conteggiando una
gran quantità di posizioni impossibili, o perch� le quattro caselle centrali sono
vuote o perché le pedine sono in gruppetti staccati tra loro. Comunque sia siamo
riusciti a ottenere una stima un po' pi� precisa rispetto all'esagerato 60!</p>

<h2>Trovare la partita perfetta (2)</h2>

<p>Rifacciamo un po' i conti... Dunque un calcolatore che analizza 1000
miliardi di posizioni in un secondo, per calcolare tutte le posizioni possibili
impiegherebbe:</p>

<p align="center">3,434  x 10<sup>30</sup> nodi : 10<sup>12</sup> nodi/sec =
3,434  x 10<sup>18</sup>sec = 1,089 x 10<sup>11</sup> anni</p>

<p>Molto meglio... :-) Ma ancora troppo!!!</p>

<p>Per ora non mi pare il caso di tentare calcoli ancora pi� precisi. Tanto
credo che il numero di posizioni possibili sia comunque enorme!</p>

<h2>Othello 6 x 6</h2>

<p>E con una scacchiera più piccola? Beh, le cose cambiano molto!</p>

<p>Una variante simpatica dell'Othello é utilizzare una scacchiera 6 x 6.</p>

<p>Con il nostro calcolo sovrabbondante il numero di mosse possibili è:</p>

<p align="center">3<sup>36</sup> = 150094635296999121</p>

<p>che un (più reale) calcolatore che calcola 1 milione di nodi al secondo
analizza in:</p>

<p align="center">150094635 secondi = 4,8 anni</p>

<p>Beh, dell'Othello 6 x 6 è stata calcolata la partita perfetta (in meno di 4 anni,
ovviamente) e si è scoperto che il bianco vince per 20 a 16. Se invece si mettono
le quattro pedine iniziali parallele il bianco vince per 19 a 17.</p>

<h2>E se un calcolatore ci riuscisse?...</h2>

<p>Anno 2048, il super-mega calcolatore della NASA trova la partita perfetta
dell'Othello... Fine del gioco?</p>

<p>No, sicuramente no!!! Anche perché se tutti memorizzassero la partita perfetta,
non appena uno cambiasse mossa (anche alla seconda), andrebbe tutto ricalcolato
per trovare nuovamente il finale perfetto... E non è certo umanamente possibile memorizzare
tutti i finali perfetti...</p>

<p>Alcuni giochi più "semplici" dell'Othello sono già stati risolti, come la dama
 e alcune versioni più famose del mancala, eppure sono tuttora giocatissimi!!!</p>

<p>Non � stato risolto l'Othello, come non è stato risolto il gioco degli scacchi,
e il Go, che, tra i giochi che conosco, è sicuramente quello con complessità più
elevata, pari a 3<sup>(19 x 19)</sup>.</p>
