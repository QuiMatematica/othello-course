<p>Quando in una regione rimangono due caselle vuote, può capitare che uno dei due
giocatori possa giocare in entrambe le caselle, guadagnando così due tempi di gioco. &Egrave; il caso
del diagramma <span data-board-ref="due-su-due-1"></span>,
    in cui il bianco può muovere in <b>A1</b> senza consentire al nero di rispondere in <b>A2</b>,
casella che verrà occupata successivamente dallo stesso bianco.</p>

<board data-type="show" data-label="due-su-due-1" data-file="due-su-due-1.json"
       data-caption="Due mosse su due."></board>

<p>&Egrave; importante analizzare quali elementi hanno impedito al nero di muovere nella casella <b>A2</b>,
elementi evidenziati dai colori nel diagramma <span data-board-ref="due-su-due-2"></span>.</p>

<board data-type="show" data-label="due-su-due-2" data-file="due-su-due-2.json"
       data-caption="Due mosse su due."></board>

<p>Per giocare in <b>A2</b> il nero deve voltare pedine in una delle direzioni tra sud, sud-est ed est.</p>
<ul>
    <li>Verso sud e verso sud-est il nero non volta alcuna pedina perché la prima pedina della direzione è nera
    (frecce gialle nel diagramma <span data-board-ref="due-su-due-2"></span>).</li>
    <li>Verso est il nero non volta alcuna pedina perché la linea <b>2</b> è occupata solo da pedine bianche
    (freccia rossa nel diagramma <span data-board-ref="due-su-due-2"></span>).</li>
</ul>
<p>Questi sono quindi i due elementi da ricercare per capire se si possono giocare entrambi le mosse in una regione
formata da due caselle:</p>
<ul>
    <li>la prima pedina della direzione di voltura è del colore avversario;</li>
    <li>la direzione di voltura è controllata da se stessi.</li>
</ul>

<p>Spesso le posizioni favorevoli per uno swindle di questo tipo nascono da una linea controllata
dal colore che subirà la trappola. Nel diagramma <span data-board-ref="due-su-due-3"></span>, per esempio,
    la diagonale <b>B2-F6</b> è interamente nera, quindi il bianco può muovere in <b>A1</b> senza voltare la pedina
    <b>B2</b>. In questo modo il nero non ha accesso alla casella <b>B2</b> perché tutte le direzioni hanno come prima
una pedina nera.</p>

<board data-type="show" data-label="due-su-due-3" data-file="due-su-due-3.json"
       data-caption="Due mosse su due."></board>

<h2>Tocca a te</h2>

<p>Nel diagramma <span data-board-ref="due-su-due-quiz-1"></span> sono presenti quattro regioni di due caselle.
Ma in una sola di queste puoi giocare uno swindle. Quale? E dove devi giocare?</p>

<board data-type="quiz" data-label="due-su-due-quiz-1" data-file="due-su-due-quiz-1.json"
       data-caption="Due mosse su due."></board>

<h2>Difendersi dagli swindle</h2>

<p>Questo <b>esercizio comparativo</b> vuole insegnare a difenderti dagli swindle.
    I diagrammi <span data-board-ref="due-su-due-quiz-2a"></span>
e <span data-board-ref="due-su-due-quiz-2b"></span> presentano la stessa identica posizione.
Nel diagramma <span data-board-ref="due-su-due-quiz-2a"></span> devi giocare la mossa
sbagliata, mentre nel diagramma <span data-board-ref="due-su-due-quiz-2b"></span> devi
giocare la mossa corretta.</p>

<gather>
    <board data-type="quiz" data-label="due-su-due-quiz-2a" data-file="due-su-due-quiz-2a.json"
       data-caption="Due mosse su due."></board>
    <board data-type="quiz" data-label="due-su-due-quiz-2b" data-file="due-su-due-quiz-2b.json"
       data-caption="Due mosse su due."></board>
</gather>

<h2>Preparare uno swindle</h2>

<p>Nella posizione del diagramma <span data-board-ref="due-su-due-quiz-3"></span>
giochi con il nero. Hai davanti due regioni pari, ma grazie a uno swindle potresti ottenere la parità
in una delle due regioni.</p>

<board data-type="quiz" data-label="due-su-due-quiz-3" data-file="due-su-due-quiz-3.json"
       data-caption="Due mosse su due."></board>

<h2>Conclusione</h2>

<div class="card border-primary mb-3">
	<div class="card-header">Strategia</div>
	<div class="card-body">
        <p class="card-text">Se è presente una regione formata da due caselle:</p>
        <ul class="card-text">
            <li>prova a cercare la sequenza che ti permetta di giocare tutte e due le mosse;</li>
            <li>stai attento che il tuo avversario non possa giocare tutte e due le mosse.</li>
        </ul>
	</div>
</div>
