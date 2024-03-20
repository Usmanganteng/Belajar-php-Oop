<?php
$matches = [];
$result = preg_match_all("/eko|awan|edy/i", "Muhamad aldizar ilham", $matches);

var_dump($result);
var_dump($matches);

// $result = preg_replace("/minuman|botol/i", "***", "dasar lu botol, minuman")
// var_dump($result);

$result = preg_replace("/[\s,-]/", "Muhamad Aldizar Ilham Lucian, 666-now");

var_dump($result);

