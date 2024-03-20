<?php

$array = [
    "namapertama" => "Muhamad",
    "namatengah" => "aldizar",
    "namaterakhir" => "ilham"
];

$object = (object)$array;

var_dump($object);

echo $object->namapertama . PHP_EOL;
echo $object->namatengah . PHP_EOL;
echo $object->namaterakhir . PHP_EOL;

$arraylagi = (array) $object;
var_dump($arraylagi);

require_once "data/Person.php";

$person = new Person("aldizar", "bogor");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);