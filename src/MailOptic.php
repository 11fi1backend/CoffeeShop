<?php
include('../fpdf17/fpdf.php');

$pdf = new FPDF("P", "mm", "A4");
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hallo Welt!');


// == Konfiguration
$mailTo = "cm2809mue@googlemail.com";
$mailFrom = "christian.muendlein94@web.de";
$mailSubject = "Feedback";
$returnPage = 'http://server/formular-verarbeitet.html';
$returnErrorPage = 'htpp://server/Fehler-aufgetreten.html';
$mailText = '';


$pdf->Output($mailTo, $mailFrom, $mailSubject, $mailText);
?>

z