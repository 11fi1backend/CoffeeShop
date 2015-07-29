<?php

require_once('lib/Autoloader.php');
spl_autoload_register('autoload');

/*$ DB = Factory::getFactory()->getConnection();
$result = $DB->query((new getInvoiceDataMySQLQuery()));
$invoices = $result->fetchAll();*/

$te = new TemplateEngine('template/invoice.report.fo', '../fop-2.0/invoice_fo/invoice.report.fo');

$te->render(
    array(
        '%Lehrername%' 		=> 'Karl Steinam',
        '%Konsumenten_ID%' 	=> '12345',
        '%Auftragsdatum%' 	=> date("d.m.y"),
        '%Menge%' 			=> '15',
        '%Rechnungspreis%' 	=> '250.00',
        '%Rechnungs_ID%'    => '25',
        '%Auftrags_ID%'     => '25',
        '%Artikelnr%'       =>  '1',
        '%Bezeichnung%'      => 'Kaffee'
    )
);

/*foreach($invoices AS $invoice) {
    $te->render(
        array(
            '%Lehrername%' 		=> $invoice['customerName'],
            '%Konsumenten_ID%' 	=> $invoice['customerID'],
            '%Auftragsdatum%' 	=> date("d.m.y"),
            '%Menge%' 			=> $invoice['totalQuantity'],
            '%Rechnungspreis%' 	=> $invoice['invoiceAmount']
        )
    );
}*/