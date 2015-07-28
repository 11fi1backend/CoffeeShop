<?php

require_once('lib/Autoloader.php');
spl_autoload_register('autoload');

$db = Factory::getFactory()->getConnection();

$db->query(new insertUserMySQLQuery());

$te = new TemplateEngine('/etc/coffeeshop/invoice/invoice.report.fo', '/etc/coffeeshop/invoice/fo/invoice.report.fo');

$te->render(
	[
		'%Lehrername%' 		=> 'LEHRER',
		'%Konsumenten_ID' 	=> 'KDNR', 
		'%Rechnungs_ID%' 	=> 'RECHNR', 
		'%Auftrags_ID%' 	=> 'AUFNR',
		'%Auftragsdatum%' 	=> 'AUFDAT',
		'%Artikelnr%' 		=> 'ARTNR',
		'%Bezeichnung%' 	=> 'BEZEICHNUNG',
		'%Menge%' 			=> 'MENGE',
		'%Rechnungspreis%' 	=> 'RECHPREIS'
	]
);

