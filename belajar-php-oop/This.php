<?php

    require_once "data/Person.php";
    
    // kata kunci this digunakan untuk mengakses object saat ini
    $person = new Person("Ali", null);
    $person->sayHello("Ali Mutezar");

    var_dump($person);