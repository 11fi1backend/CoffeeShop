<<<<<<< HEAD
<?php

require_once('../../../lib/AutoLoader.php');

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

=======
<?php 

require_once('../../../lib/AutoLoader.php');

$MYSQLDB = new DataBaseConnection('10.161.10.36', 'coffeeshop', 'root', '');



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

print_r($MYSQLDB);
>>>>>>> origin/master
