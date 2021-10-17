<?php


require_once "helper/MathHelper.php";

use Helper\MathHelper;

MathHelper::$name = 'Jiraya';

echo MathHelper::$name. PHP_EOL;

$result = MathHelper::sum(20,10,11);

echo $result .PHP_EOL;