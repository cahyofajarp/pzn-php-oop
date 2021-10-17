<?php

require_once "data/Student.php";

$student = new Student;

$student->id = "1";
$student->name = "Cahyo";
$student->value = 100;
$student->sample('dample');

echo $student(1,1,1,1);