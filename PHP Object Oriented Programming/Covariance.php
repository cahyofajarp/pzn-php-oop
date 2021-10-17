<?php

require_once "data/Food.php";
require_once "data/AnimalShelter.php";
require_once "data/Animal.php";

$catShelter = new \Data\CatShelter;
$cat = $catShelter->adobt("Luni");

$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\DogShelter;
$dog = $dogShelter->adobt("Lunz");
$dog->eat(new \Data\Food);
