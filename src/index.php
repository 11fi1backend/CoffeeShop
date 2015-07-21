<?php

require_once('lib/AutoLoader.php');

$te = new \lib\TemplateEngine('template/test.xml', 'template/CoffeeShop/templateOutput.xml');

$te->render(array('%NAME%' => 'fooBar'));



