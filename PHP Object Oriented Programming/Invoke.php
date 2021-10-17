<?php


require_once "data/Student.php";

$student = new Student;

$student->id = "1";
$student->name = "Cahyo";
$student->value = 100;

$student(1,2,3,4,5,6,7);