<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "budi";
$manager->sayHello("aldizar");

$vp = new VicePresident();
$vp->name = "lulu";
$vp->sayHello("aldizar");