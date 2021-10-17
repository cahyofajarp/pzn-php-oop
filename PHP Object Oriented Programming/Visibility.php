<?php
require_once "data/Product.php";

$product = new Product("Iphone",1200000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$product2 = new ProductDummy("Iphone",1200000);

$product2->info();
