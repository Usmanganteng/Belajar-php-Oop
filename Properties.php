<?php

require_once "data/Person.php";

$person = new Person("aldizar", "Bogor");
$person->name = "Aldizar";
$person->address = "Bogor";
$person->country = "Indonesia";

var_dump($person);

echo "name : {$person->name}" . PHP_EOL;
echo "address : {$person->address}" . PHP_EOL;
echo "country : {$person->country}" . PHP_EOL;