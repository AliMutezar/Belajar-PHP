<?php

    require_once "data/SayGoodBye.php";
    use Data\Traits\{Person, SayGoodBye, SayHello};


    $person = new Person();
    $person->goodbye("Fulan");
    $person->hello("Fulanah");

    $person->name = "Ali";
    var_dump($person);

    $person->run();

