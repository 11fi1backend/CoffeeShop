<?php

$factory = new Factory();

$dataBaseConnection = $factory->getDataBase();

$dataBaseConnection->query(
    new insertUserMySQLQuery(
        $_POST['name'],
        $_POST['lastname'],
        $_POST['copyCode']
    )
);




