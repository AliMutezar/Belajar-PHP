<?php
    
    // Dot
    // PHP_EOL = Endoffline

    $name = "Ahmad Ali Mutezar";
    echo "Nama : " . $name . PHP_EOL;
    echo "Nilai : " . 100 . "\n";


    // Konversi ke Number adan sebaliknya
    $valueString = (string)100;
    var_dump($valueString);

    $valueInt = (int)"100";
    var_dump($valueInt);

    $valueIntSalah = (int)"salah";
    var_dump($valueIntSalah);

    $valueFloat = (float)"100.5";
    var_dump($valueFloat);


    // Mengakses Karakter
    $name = "Ali";
    echo $name[0] . PHP_EOL;
    echo $name[1] . PHP_EOL;
    echo $name[2] . PHP_EOL;
    // echo $name[3] . PHP_EOL;


    // Variable Parsing, kalo pake single quote harus pake titik.
    echo 'Hello, nama saya ' . $name . PHP_EOL;
    echo "Hello, nama saya $name" . PHP_EOL;


    // Variable Parsing
    $var = "Var";
    echo "This is {$var}s" . PHP_EOL;