<?php

    require_once "data/Person.php";
    
    // membuat object
    $person = new Person("Dody", "Jawa");

    // manipulasi properti object
    $person->name = "Ahmad Ali Mutezar";
    $person->country = "Indonesia";
    $person->address = "Jl. Yusuf Raya No.13";

    var_dump($person);

    // echo "Nama   : $person->name" . PHP_EOL;
    // echo "Negara : $person->country" . PHP_EOL;
    // echo "Alamat : $person->address" . PHP_EOL;

    $person2 = new Person("Anisa", null);
    $person2->name = "Fulan bin Fulan";
    // $person2->country = "Uni Emirat Arab";
    $person2->alamat = "St. Dubai Ahay";

    var_dump($person2);


    $person3 = new Person("Febe", "Batak");
    // $person->name = []; // Error

    var_dump($person3);