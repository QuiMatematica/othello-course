<h1>Le ultime mosse sicure</h1>

<p>In una partita in cui nessun angolo � stato occupato dover muovere � pi� un imbarazzo
che un vantaggio: si pu� giocare solo nelle caselle pi� vicine agli angoli e pu� essere
molto pericoloso farlo. Ma anche tra le ultime mosse ce ne possono essere alcune
<a href="../LaMobilita/ChiudereIlGiocoAllAvversario.html">mosse sicure</a>
che permettono di giocare senza che l'avversario possa occupare immediatamente un angolo.
E' evidente che il giocatore che raggiunge questa fase con il maggior numero di mosse
sicure � avvantaggiato rispetto all'avversario: pu� giocare pi� mosse senza correre
pericoli.</p>

<p>I finali dell'Othelo, quando sono equilibrati, sono relativamente complessi
essenzialmente per due ragioni:</p>

<ul>
  <li>alcune mosse siure possono essere annullate dalle mosse dell'avversario</li>
  <li>il giocatore con meno mosse sicure non ha nessun interesse a lanciarsi in una
  battaglia fino "all'ultima mossa sicura": egli spesso cercher� di sacrificare subito
  un angolo per recuperare un
  <a href="../ITempiDiGioco/index.html">tempo di gioco</a>, grazie alla
  <a href="../LaParita/index.html">parit�</a>.</li>
</ul>

<p>Vediamo alcuni esempi.</p>

<p>Nel diagramma 1 il bianco deve muovere. Le sue mosse sicure sono B1, G2 e B7. Anche le
due ultime mosse, pur essendo su caselle X, vengono considerate sicure perch� non permettono
al nero di prendere subito un angolo. Il nero, invece, ha un'unica mossa sicura in H8.</p>

	<p align="center">
    <applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="231" height="231"
            code="it.claudiosignorini.tao.TaoApplet.class"
            hspace="0" vspace="0" align="top">
        <param name="function" value="static">
        <param name="position" value="--OOOO--#-#O#O-##O#OOO####OOOO###O#O######OO#OO##-O##O---OOOOOO-">
        Mi dispiace: il tuo browser non supporta le Applet Java.
    </applet>
	<br>
	Diagramma 1: mossa al bianco.
	</p>

<p>Ci sono dunque tre mosse sicure contro una e ci� indubbiamente d� un grosso vantaggio al
bianco. Non bisogna comunque pensare che tutte le scelte siano uguali. Non � semplice
scegliere la sequenza giusta. Nei diagrammi 2, 3, 4 e 5 vengono proposte quattro prosecuzioni
diverse. Il diagramma 5 riporta il finale perfetto.</p>

	<p align="center">
	<table border="0" width="90%">
	  <tr><td align="center">
<applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="241" height="390"
        code="it.claudiosignorini.tao.TaoApplet.class"
        hspace="0" vspace="0" align="top">
   	<param name="function" value="match">
   	<param name="matchFile" value="LeUltimeMosseSicure2.txt">
    Mi dispiace: il tuo browser non supporta le Applet Java.
</applet>
     </td>
	  <td align="center">
<applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="241" height="390"
        code="it.claudiosignorini.tao.TaoApplet.class"
        hspace="0" vspace="0" align="top">
   	<param name="function" value="match">
   	<param name="matchFile" value="LeUltimeMosseSicure3.txt">
    Mi dispiace: il tuo browser non supporta le Applet Java.
</applet>
	  </td></tr>
	  <tr><td align="center">
		Diagramma 2: il bianco muove in B1.
      </td>
	  <td align="center">
		Diagramma 3: il bianco gioca in B7.
	  </td></tr>
	</table>
	</p>
	<p align="center">
	<table border="0" width="90%">
	  <tr><td align="center">
<applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="241" height="390"
        code="it.claudiosignorini.tao.TaoApplet.class"
        hspace="0" vspace="0" align="top">
   	<param name="function" value="match">
   	<param name="matchFile" value="LeUltimeMosseSicure4.txt">
    Mi dispiace: il tuo browser non supporta le Applet Java.
</applet>
     </td>
	  <td align="center">
<applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="241" height="390"
        code="it.claudiosignorini.tao.TaoApplet.class"
        hspace="0" vspace="0" align="top">
   	<param name="function" value="match">
   	<param name="matchFile" value="LeUltimeMosseSicure5.txt">
    Mi dispiace: il tuo browser non supporta le Applet Java.
</applet>
	  </td></tr>
	  <tr><td align="center">
		Diagramma 4: il bianco muove in G2.
      </td>
	  <td align="center">
		Diagramma 5: il bianco gioca in G2<br>finale perfetto.
	  </td></tr>
	</table>
	</p>

<p>Nel diagramma 6 la mossa spetta al nero. Egli ha una sola mossa sicura contro tre del
bianco, ma pu� procurarsene una seconda sulla stessa diagonale. Infatti giocando in G2, il
nero annulla la mossa sicura del bianco in B7 e la trasforma in una sua mossa sicura.</p>

<p align="center">
<applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="241" height="390"
        code="it.claudiosignorini.tao.TaoApplet.class"
        hspace="0" vspace="0" align="top">
   	<param name="function" value="match">
   	<param name="matchFile" value="LeUltimeMosseSicure6.txt">
    Mi dispiace: il tuo browser non supporta le Applet Java.
</applet>
<br>
Diagramma 6: mossa al nero.
</p>

<p>Il diagramma 7 � identico al 6, salvo che per la pedina G6 diventata bianca. Il nero
ha la mossa e gioca ugualmente in G2. Adesso, tuttavia, questa mossa annulla
contemporaneamente due mosse sicure del bianco: quella gi� vista in B7 e quella in G1,
perch� ora il bianco giocando in G1 girerebbe le pedine sulla colonna G e darebbe
l'angolo H1 al nero.</p>

<p align="center">
<applet codebase="../.." archive="Tao.jar" name="TaoApplet" width="241" height="390"
        code="it.claudiosignorini.tao.TaoApplet.class"
        hspace="0" vspace="0" align="top">
   	<param name="function" value="match">
   	<param name="matchFile" value="LeUltimeMosseSicure7.txt">
    Mi dispiace: il tuo browser non supporta le Applet Java.
</applet>
<br>
Diagramma 7: mossa al nero.
</p>

<p>I due ultimi esempi mostrano bene la complessit� e la "fragilit�" delle posizioni finali.
Soprattutto mostrano quanto sia difficile pervenire in maniera calcolata ad una posizione
finale vincente: una sola pedina girata e le posizione � completamente cambiata.</p>
<p>Bisogna inoltre notare che nella battaglia per le mosse sicure finali le case X
svolgono un ruolo molto importante e spesso vengono occupate prima della case C,
perch� hanno maggiore influenza sulle altre mosse sicure.</p>

<h2>Per riassumere</h2>

<ul>
  <li>Chi ha pi� mosse sicure in finale si trova in situazione di vantaggio;</li>
  <li>chi ha meno mosse sicure deve cercare di sfruttare zone dispari per cercare di
  guadagnare un tempo di gioco;</li>
  <li>cercare sempre di equilibrare tra consumo e guadagno delle proprie mosse sicure e,
  soprattutto, consumo e guadagno delle mosse sicure avversarie.</li>
</ul>
