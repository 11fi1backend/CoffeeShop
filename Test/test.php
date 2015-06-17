<?php

require "../prince/prince.php";

$exepath = "C:/Program Files (x86)/Prince/Engine/bin/prince.exe";
$prince = new Prince($exepath);

if($prince) {
echo "Prince successfuly installed";
}


$prince->setHTML(1);

$htmlString = "<h1>Hellow World</h1>";

$convert = $prince->convert_string_to_file($htmlString, "test.pdf");

if($convert) {
echo "File successfuly generated";
}

?>