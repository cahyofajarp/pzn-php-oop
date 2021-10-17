<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Fajar";

$manager->sayHello("Pamungkas");

$vp = new VicePresindent();
$vp->name = "Fajar";

$vp->sayHello("Pamungkas");

