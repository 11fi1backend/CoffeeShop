<?php

include('../fpdf17/fpdf.php');

$pdf = new FPDF("P", "mm", "A4");
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hallo Welt!');
$pdf->Output();



/**
 * Dummy Class
 */
/*class PDF
{
    public function __construct()
    {
    	
		
    }
}


*/
?>