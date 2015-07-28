<?php

function autoload($class) {
	echo $class . ' | ' . __DIR__ . '<br>';
    include_once __DIR__. DIRECTORY_SEPARATOR . $class . '.php';
}