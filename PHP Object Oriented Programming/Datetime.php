<?php

// $datetime = new DateTime();
// $datetime->setDate(2021,5,28);
// $datetime->setTime(10,10,0,0);

// // $datetime->add(new DateInterval("P1Y"));

// // $datetime->add(new DateInterval("P10D"));

// $minusOneMonth = new DateInterval("P1M");
// $minusOneMonth->invert = 4;

// $datetime->add($minusOneMonth);

// var_dump($datetime);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));

var_dump($now);


// $string = $now->format("Y-m-d H:i:s");

$date = DateTime::createFromFormat("Y-m-d H:i:s","2021-05-28 10:10:10",new DateTimeZone("Asia/Jakarta"));

var_dump($date);