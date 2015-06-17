<?php

#include('../fpdf17/fpdf.php');
include('../prince/prince.php'); 

$prince = new Prince("C:/Program Files (x86)/Prince/Engine/bin/prince");
$prince -> convert_file_to_file("../src/Rechnung.xml", "Rechnung.pdf");


#"../src/Rechnung.xml"

/**
 * 
 */
/*class PDF
{
    public function __construct()
    {
    	$prince = new Prince("../../Program Files (x86)/Prince/Engine/bin/prince.exe");
    	$prince -> convert_file("../src/Rechnung.xml");
    	
		
    }
    
}


*/
?>