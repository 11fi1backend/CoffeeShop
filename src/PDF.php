<?php

#include('../fpdf17/fpdf.php');
#include('../prince/prince.php');

#$princepath muss noch angepasst werden! 





echo "Nicht im Konstruktor"."<br>";


/**
 * 
 */
class PDF
{

    public function __construct()
    {
    	echo "Ich bin im Konstruktor"."<br>";
    	$princepath="D:\Program Files\Prince\Engine\bin\prince.exe";
    	
    	
    	$newPDF = new Prince($princepath, true);
    	$newPDF -> convert_file_to_file("..\prince\lieferschein.xml", "..\prince\lieferschein.pdf");
    	
    	echo "PDF erzeugt"."<br>";
    }
    
}




