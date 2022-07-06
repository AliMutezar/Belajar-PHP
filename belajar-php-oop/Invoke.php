<?php

    require_once "data/Student.php";

    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Ali";
    $student1->value = 100;

    $student1("Ali", 18, 1999);