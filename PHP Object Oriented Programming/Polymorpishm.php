<?php

require_once "data/Programmer.php";

$company =   new Company;

$company->programmer  = new Programmer("Cahyo");
var_dump($company);

$company->programmer = new Backend("fajar");
var_dump($company);

$company->programmer = new FrontEnd("Pamungkas");
var_dump($company);


sayHelloProgrammer(new Programmer('Cahyo'));
sayHelloProgrammer(new FrontEnd('Fajar'));
sayHelloProgrammer(new Backend('Pamungkas'));