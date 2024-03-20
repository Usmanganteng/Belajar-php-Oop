<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "aldizar";
$manager->sayHello("lulu");

$vp = new VicePersident();
$vp->name = "lucian";
$vp->sayHello("lulu");