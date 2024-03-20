<?php
require_once "data/Person.php";

$aldizar = new Person("aldizar", "bogor");
$aldizar->name = "Ilham";
$aldizar->sayHello("Aldizar");

$ilham = new Person("ilham", "jakarta");
$ilham->name = "Ilham";
$ilham->sayHello(null);

$ilham->info();
$aldizar->info();
