<?php
require_once "data/Person.php";

$person = new Person("Aldizar", "Bogor");
$person->country = "indonesia";

$person->sayHello("ilham");
$person->sayHello(null);