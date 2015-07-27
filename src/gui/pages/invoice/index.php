<?php

require_once('../../../lib/Autoloader.php');
spl_autoload_register('my_autoloader');

$te = new TemplateEngine('../../../template/invoice.report.fo', '../../../../fop-2.0/invoice_fo/invoice.report.fo');
$te -> render(
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