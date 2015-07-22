<?php

require_once('../../lib/AutoLoader.php');

$te = new \lib\TemplateEngine('/etc/coffeeshop/invoice/invoice.report.fo', '/etc/coffeeshop/invoice/fo/invoice.report.fo');

$te->render(
	array(
		'%Lehrername%' 		=> 'LEHRER',
		'%Konsumenten_ID' 	=> 'KDNR', 
		'%Rechnungs_ID%' 	=> 'RECHNR', 
		'%Auftrags_ID%' 	=> 'AUFNR',
		'%Auftragsdatum%' 	=> 'AUFDAT',
		'%Artikelnr%' 		=> 'ARTNR',
		'%Bezeichnung%' 	=> 'BEZEICHNUNG',
		'%Menge%' 			=> 'MENGE',
		'%Rechnungspreis%' 	=> 'RECHPREIS'
	)
);

