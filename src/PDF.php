<?php

#include('../fpdf17/fpdf.php');

/**
 * 
 */
class PDF
{
    public function __construct()
    {
    	$prince = new Prince('../prince/prince.php');
    	#$prince -> convert_file_to_file("../src/Rechnung.xml", "../src/Rechnung.pdf");
    	
		
		
    }
    
}



?>