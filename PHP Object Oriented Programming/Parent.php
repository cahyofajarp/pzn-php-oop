<?php

require_once "data/Shape.php";

use Data\{ Shape , Rectangle };

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$reactangle = new Rectangle;
echo $reactangle->getParentCorner() . PHP_EOL;