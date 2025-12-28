<p>La logica dell'iper parità potrebbe essere applicata a qualunque regione pari in cui uno dei due giocatori
non ha mosse legali. Ma in verità già con quattro caselle è possibile applicare un tecnica per evitare
l'effetto dell'iper parità.</p>

<p>Questa tecnica va sotto il nome di <b>alimentare le mosse dell'avversario</b>, in inglese
    <i>feeding the opponent</i>.</p>

<p>Osserva il diagramma <span data-board-ref="alimentare1"></span>.</p>

<board data-type="show" data-label="alimentare1" data-file="alimentare1.json"></board>

<p>Il nero è riuscito a formare, a nord-ovest, una regione pari in cui non ha mosse legali. Tocca quindi al bianco
fare la prima mossa in quella regione e, per alternanza delle mosse, il nero dovrebbe avere il vantaggio
dell'ultima mossa.</p>

<p>Infatti se il bianco gioca in questo modo (diagramma <span data-board-ref="alimentare2"></span>) perde.</p>

<board data-type="show" data-label="alimentare2" data-file="alimentare2.json"></board>

<p>Ma il bianco ha un'altra possibilità. Deve cioè:</p>
<ul>
    <li>giocare nella zona pari in modo da concedere all'avversario due mosse; nel diagramma proposto la mossa giusta è
    <b>A2</b> che concede al nero le mosse <b>A1</b> e <b>B2</b>;</li>
    <li>dopo la prima risposta dell'avversario, giocare altrove; nel diagramma il bianco deve giocare in <b>G7</b>;</li>
    <li>a questo punto l'avversario sarà costretto a giocare anche la seconda mossa e perdere la parità globale.</li>
</ul>

<board data-type="show" data-label="alimentare3" data-file="alimentare3.json"></board>

<h2>Secondo esempio</h2>

<p>Aumentiamo la complessità della situazione: nel diagramma <span data-board-ref="alimentare4"></span>
abbiamo una regione pari in cui il bianco non ha mosse legali e una regione di tre caselle.</p>

<board data-type="show" data-label="alimentare4" data-file="alimentare4.json"></board>

<h2>Tocca a te</h2>

<board data-type="quiz" data-label="alimentare-quiz" data-file="alimentare-quiz.json"></board>