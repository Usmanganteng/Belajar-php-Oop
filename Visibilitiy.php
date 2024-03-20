<?php

require_once "data/Product.php";

use Data\product;

$product = new ProducT("Apple", 10000);

echo $product->getName() .PHP_EOL;

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 2000);
$dummy->info();