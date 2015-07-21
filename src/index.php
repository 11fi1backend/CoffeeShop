<?php

require_once('lib/AutoLoader.php');

$te = new \lib\TemplateEngine('template/test.xml', 'template/CoffeeShop/templateOutput.xml');

echo shell_exec('java -jar /etc/coffeeshop/fop-2.0/build/fop.jar -fo /etc/coffeeshop/fop-2.0/examples/fo/basic/images.fo -pdf /etc/coffeeshop/fop-2.0/images.pdf');

$te->render(array('%NAME%' => 'fooBar'));



