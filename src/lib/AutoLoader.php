<?php

function my_autoloader($class) {
    include_once __DIR__. DIRECTORY_SEPARATOR . $class . '.php';
}