<?php

require_once('lib/Autoloader.php');
spl_autoload_register('my_autoloader');

#$db = Factory::getFactory()->getConnection();


print_r(parse_ini_file("config.ini"));

exit;
$db->query(new insertUserMySQLQuery());

$te = new TemplateEngine('/etc/coffeeshop/invoice/invoice.report.fo', '/etc/coffeeshop/invoice/fo/invoice.report.fo');

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

