<?php

    require_once "data/Person.php";
    
    // membuat object
    $person = new Person("Raka", null);
    $person->name = "Fulan";

    $person->sayHello("Ali");
    $person->info();
    var_dump($person);