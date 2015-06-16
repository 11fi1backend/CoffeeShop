<?php
$mailtext = '<html>
		<head>
		<title>HTML-E-Mail mit PHp erstellen</title>
		</head>
		
		<body>
		
		<h1>HTML-E-Mail mit Php erstellen</h1>
		
		<p>Diese E-Mail wurde mit PHP und HTML erstellt</p>
		
		<table border="1">
		<tr>
			<td>Beschreibung</td>
			<td>Anzahl Seiten</td>
		</tr>
		<tr> 
			<td>PHP lernen mit PHP-Kurs.com</td>
			<td>über 100</td>
		</tr>
		</table>
		<p> Die meisten HTML-Tags wie <b>fett</b>
		und <i>kursiv</i> stehen zur Verfügung</p>
		</body>
		</html>
		';
$empfaenger = "du@testkarnickel.de";
$absender = "ich@testkarnickel.de";
$betreff = "Mail-Test - HTML-E-Mail mit PHP erstellen";
$antworten = "ICH@testkarnickel.de";

$header = "MIME-Version: 1.0\r\n";
$header .= "Contect-Type: text/html; charset=iso8859-1\r\n";

$header .= "From: $absender\r\n";
$header .= "Reply-To:$antworten\r\n";

$header .= "X-Mailer: PHP " . phpversion ();

mail ( $empfaenger, $betreff, $mailtext, $header );

echo "Mail wurde gesendet!"?>

