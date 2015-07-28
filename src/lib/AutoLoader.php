<?php

function autoload($class) {
    include_once __DIR__. DIRECTORY_SEPARATOR . $class . '.php';
}