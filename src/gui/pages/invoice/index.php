<?php

require_once '../../../lib/Autoloader.php';

spl_autoload_register(array('fantasyAutoloader', 'load'));


#$te = new TemplateEngine('/etc/coffeeshop/invoice/invoice.report.fo', '/etc/coffeeshop/invoice/fo/invoice.report.fo');
$te = new TemplateEngine('../../fop-2.0/examples/fo/basic/border.fo', '../../fop-2.0/invoice_fo/border.fo');


/*$te->render(
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
);*/