<?php

require_once('lib/AutoLoader.php');



$te = new \lib\TemplateEngine('template/test.xml');

$te->render(['anschriftBox' => 'test']);



