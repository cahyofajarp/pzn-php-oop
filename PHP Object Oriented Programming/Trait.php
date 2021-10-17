<?php

require_once "data/SayGoodbye.php";

use Data\Traits\{SayGoodbye,SayHello,Person};

$person = new Person();
$person->hello('fajar');
$person->goodBye('Cahyo');
$person->name  = 'Pamungkas';

var_dump($person);

$person->run();