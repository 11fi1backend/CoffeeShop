<?php

$INVOICE_NR=12345;

echo shell_exec('java -jar /etc/coffeeshop/fop-2.0/build/fop.jar -fo /etc/coffeeshop/fop-2.0/invoice.report.fo -pdf /etc/coffeeshop/fop-2.0/Rechnung_'.escapeshellarg($INVOICE_NR).".pdf");

?>