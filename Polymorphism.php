<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("aldizar");
var_dump($company);

$company->programmer = new BackendProgrammer("aldizar");
var_dump($company);

$company->programmer = new FrontendProgrammer("aldizar");
var_dump($company);

sayHelloprogrammer(new Programmer("aldizar"));
sayHelloprogrammer(new BeckendProgrammer("aldizar"));
sayHelloprogrammer(new FrontendProgrammer("aldizar"));