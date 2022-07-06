<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = '1';
$student1->name = 'Ali';
$student1->value = 100;
$student1->setSample("Test");

var_dump($student1);

// Cara otomatis
$student2 = clone $student1;
var_dump($student2);


// Cara manual clone
// $student2 = new Student();
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value = $student1->value;

 