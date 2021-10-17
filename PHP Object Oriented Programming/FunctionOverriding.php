<?php

require_once "data/Manager.php";

$manager = new Manager;
$manager->name = "Cahyo";

$vp = new VicePresindent;
$vp->name = "Fajar";

$vp->sayHello("Rida");