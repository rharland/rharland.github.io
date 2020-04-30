<html>
<title>Corona Virus</title>
<body>
<h2>Studien zum Corona-Virus</h2>
&copy; 2020 by R. Harlander<br>
based on data taken from <a href="https://interaktiv.morgenpost.de/corona-virus-karte-infektionen-deutschland-weltweit/">this URL</a>
<p align="right">
<i>In einer Welt, in der eine e-Funktion Erstaunen ausl&ouml;st,<br>
ist Statistik ein Fremdwort.</i><br>
J. Schnelzer, 2020
</p>
<hr>
<h3>Deutschland</h3>
Der exponentielle Fit bezieht nur die letzten 10 Tage mit ein.<br>
<img width="45%" src="plots/plot_germany-0.png">
<img width="45%" src="plots/plot_germany-1.png">
<h3>Europa</h3>
<img width="45%" src="plots/plot_europe-0.png">
<img width="45%" src="plots/plot_europe-1.png">
<h3>Blick in die Zukunft</h3>
<!-- <i>Prognose:</i> Morgen (06.04.2020) betr&auml;gt die Zahl der Infizierten
in Deutschland 105990.</p>-->
<img width="70%" src="plots/plot.gif"><br>
Der Plot zeigt die Gesamtzahl der am Corona-Virus erkrankten Menschen 
in Deutschland auf einer logarithmischen Skala,
sowie diese Zahl nach Bundesl&auml;ndern aufgespalten.
Zus&auml;tzlich ist ein exponentieller Fit an die Gesamtzahl eingezeichnet.
Der Schnittpunkt mit der gr&uuml;nen horizontalen Linie entspricht dem
Zeitpunkt, an dem alle in Deutschland lebenden Menschen infiziert sind
(gem&auml;&szlig; diesem sehr vereinfachten exponentiellen Modell).
<p>
Der Schnittpunkt wandert tendenziell in die Zukunft, was bedeutet, dass
die exponentielle Infizierungsrate abnimmt. Diese Verschiebung
ist im folgenden Plot gezeigt. Die y-Achse zeigt den voraussichtlichen Tag, 
an dem alle Deutschen infiziert sind, berechnet am Tag x.
Die Steigung <i>a</i> gibt an, wie schnell sich der Tag entfernt/n&auml;hert, 
an dem alle Deutschen infiziert sind: pro Tag r&uuml;ckt dieser Tag um <i>a</i>
Tage von uns weg. Wenn also <i>a</i>&lt;1 ist, r&uuml;ckt der Tag n&auml;her.
<p>
<img width="50%" src="plots/dum3.png">
<p>
Als n&auml;chstes die Zahl der Neu-Erkrankungen pro Tag in Deutschland und Europa,
gemittelt &uuml;ber 10-Tage-Intervalle:
<p>
<img width="45%" src="plots/plot_germany-2.png">
<img width="45%" src="plots/plot_europe-2.png">
<p>
Jetzt noch die Basisreproduktionszahl, berechnet 
<a href="https://de.wikipedia.org/wiki/SIR-Modell">gem&auml;&szlig;</a>
R<sub>0</sub> = n &Delta;I/&Delta;R, wobei &Delta;I die Zahl der im Zeitintervall
&Delta;t neu infizierten Personen ist, und &Delta;R die Zahl der in &Delta;t
neu genesenen. Der Normierungsfaktor ist N/(N-I), mit N=Einwohner Deutschlands,
und I=Zahl der Infizierten (Genesene mit eingerechnet). Um statistische Schwankungen
klein zu halten, mitteln wir wieder &uuml;ber ein 10-Tage-Intervall:
<p>
<img width="45%" src="plots/plot_germany-3.png">
<img width="45%" src="plots/plot_europe-3.png">
<p>
</body>
</html>
