<?php

/*set_include_path(
    implode(
        PATH_SEPARATOR,
        array(get_include_path(), 'lib', 'gui', 'template')
    )
);
spl_autoload_register();*/

class fantasyAutoloader {

	public static function load($classname) {
		$pfad= 'D:\xampp\htdocs\CoffeeShop\src\lib' . DIRECTORY_SEPARATOR . $classname . '.php';
		// echo Entfernen wenn alles funktioniert!
		echo $pfad;
		
		if (file_exists($pfad))
		{
			require_once $pfad;
			echo "yey";
		}
		else
		{
			return false;
		}
	}
};