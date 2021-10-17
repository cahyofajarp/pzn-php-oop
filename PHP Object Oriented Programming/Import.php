<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APP;

$conflict1  = new Conflict();
$conflict1  = new Data\Two\Conflict();

helpMe();

echo APP;
