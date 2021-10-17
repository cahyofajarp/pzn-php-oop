<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APP as APP;

$conflict1  = new Conflict1();
$conflict2  = new Conflict2();

help();

echo APP;

/**
 * 
 *  Ga sabar mau jadi programmer guys heheheh ....
 * 
 * 
 */