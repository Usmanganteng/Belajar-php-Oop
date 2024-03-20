<?php

$date = new DateTime();
$date->setDate(2020, 12, 30);
$date->setTime(12, 12, 12);

$date->add(new DateInterval("P1Y"));
$dateInterval = new DateInterval("P1M");
$dataInterval->invert = 1;

$date->add($dateInterval);
var_dump($date);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->fotmat("Y-m-d H:i:s");
echo "Waktu Saat Ini : $string" . PHP_EOL;

$date = DataTime::createFromFormat("Y-m-d H:i:s", "2020-10-10", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "Format Salah" . PHP_EOL;
}