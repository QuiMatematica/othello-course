<h1>Controllo del controbordo</h1>

<p>Riprendo il concetto di controbordo, che ti ho già presentato parlando di
    <a href="../../intermedio/attacchi-ai-5/definizioni.php">attacchi ai cinque</a>.</p>

<div class="card border-primary mb-3">
	<div class="card-header">Definizione</div>
	<div class="card-body">
		<p class="card-text">Chiamiamo <b>controbordo</b> le caselle adiacenti a un bordo, come evidenziato
            nel diagramma <span data-board-ref="controbordo"></span>.</p>
	</div>
</div>

<board data-type="show" data-label="controbordo" data-file="controbordo.json"
       data-caption="I quattro controbordi."></board>

<p>In base a quali pedine sono presenti in controbordo, il suo controllo ha effetto sulla casella <b>X</b>
o sulla casella <b>C</b> libera.</p>

<p>Per esempio, nel diagramma <span data-board-ref="esempio-1"></span> il bianco controlla il controbordo nord
dalla casella <b>C2</b> alla casella <b>F2</b>. A causa di questo controllo, e non avendo altre direzioni lungo
    cui voltare, il nero non può giocare nelle caselle <b>B2</b> e <b>G2</b>.</p>

<p>Nello stesso diagramma, il nero controlla il controbordo ovest. Il bianco può muovere in <b>B2</b> perché può
voltare pedine in diagonale, ma con questa mossa in gira la pedina <b>B3</b>. In questo modo il bianco <b>allunga</b>
il controllo del controbordo nord e il nero risulta impossibilitato a giocare in <b>A2</b>.</p>

<board data-type="show" data-label="esempio-1" data-file="controbordo-esempio-1.json"
       data-caption="Gli effetti del controllo del controbordo."></board>