<?php

require_once "data/Animal.php";

use Data\{ Animal,Dog,Cat };

$cat = new Cat();
$cat->name = "Cahyo";
$cat->run();

//----------------------------------------------------------------------

$dog = new Dog();
$dog->name = "Fajar";
$dog->run();    