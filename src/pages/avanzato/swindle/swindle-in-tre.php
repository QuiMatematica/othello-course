<p>&Egrave; possibile giocare uno swindle in una regione formata da tre caselle?</p>

<p>Beh, in linea di principio sì, ma attenzione.</p>

<p>Se uno swindle prevede il guadagno di <i>almeno due tempi di gioco</i>, allora per ottenere uno swindle in
una regione di tre caselle bisogna poter giocare tutte e tre le mosse senza che l'avversario abbia possibilità
di replica.</p>

<p>Infatti la semplice alternanza dei colori (bianco-nero-bianco o nero-bianco-nero) consente il guadagno di
un solo tempo di gioco, tempo legato - come ben sappiamo - al concetto di parità.</p>

<h2>Tre mosse in una regione a tre</h2>

<p>Nel diagramma <span data-board-ref="swindle-in-tre-1"></span> è presente a nord-est una regione di tre caselle.
Il bianco ha la possibilità di giocare tutte e tre le mosse e, grazie a questo, vincere la partita.
Prova a individuare la sequenza corretta prima di vederla sul diagramma.</p>

<board data-type="show" data-label="swindle-in-tre-1" data-file="swindle-in-tre-1.json"></board>

<h2>Falso swindle</h2>

<p>Attenzione però. Il fatto che il tuo avversario non abbia la possibilità di replicare alla prima mossa non vuol dire
che hai giocato uno swindle. L'avversario potrebbe, infatti, poter replicare dopo la seconda mossa, e questo sarebbe un problema
perché vuol dire che si è preso la parità.</p>

<p>&Egrave; quello che succede nel diagramma <span data-board-ref="swindle-in-tre-2"></span>. Il bianco gioca
nell'angolo <b>H8</b> convinto di giocare uno swindle, visto che il nero non può rispondere.
Ma in verità il nero potrà giocare l'ultima mossa e, con questa, vincere la partita.</p>

<board data-type="show" data-label="swindle-in-tre-2" data-file="swindle-in-tre-2.json"></board>

<p>Nel diagramma <span data-board-ref="swindle-in-tre-3"></span> è presente la stessa posizione
del diagramma precedente, ma questa volta il bianco sta attento a non perdere la parità. Deve
rinunciare all'angolo e al bordo est, ma l'importante è avere più pedine, non avere più bordi.</p>

<board data-type="show" data-label="swindle-in-tre-3" data-file="swindle-in-tre-3.json"></board>
