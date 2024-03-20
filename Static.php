<?php

require_once "Helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Aldizar Ilham";
echo MathHelper::$name . PHP_EOL;

$total = MathHelper::sum(10, 10, 10, 10, 10);
echo "Total $total". PHP_EOL;