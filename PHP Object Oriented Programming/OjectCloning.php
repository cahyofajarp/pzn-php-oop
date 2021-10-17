<?php

require_once "data/Student.php";

$student = new Student;

$student->id = "1";
$student->name = "Cahyo";
$student->value = 100;

$student->sample("ccc");

var_dump($student);

$student2 = clone $student;

var_dump($student2);

