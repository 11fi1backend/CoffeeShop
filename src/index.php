<?php

require_once('lib/Autoloader.php');
spl_autoload_register('autoload');

$DB = Factory::getFactory()->getConnection();
$result = $DB->query((new getInvoiceDataMySQLQuery()));
$invoices = $result->fetchAll();

print_r($invoices);

$te = new TemplateEngine('template/invoice.report.fo', '../fop-2.0/invoice_fo/invoice.report.fo');
foreach($invoices AS $invoice) {
    $te->render(
        array(
            '%Lehrername%' 		=> $invoice['customerName'],
            '%Konsumenten_ID' 	=> $invoice['customerID'],
            '%Auftragsdatum%' 	=> date("d.m.y"),
            '%Menge%' 			=> $invoice['totalQuantity'],
            '%Rechnungspreis%' 	=> $invoice['invoiceAmount']
        )
    );
}

