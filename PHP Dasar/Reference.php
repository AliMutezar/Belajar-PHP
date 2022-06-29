<?php

    // Tanpa reference
    $name = "Ali";
    $otherName = $name;
    $otherName = "Fulan";
    echo $name . PHP_EOL;


    // Dengan reference
    $nama = "Ahmad";
    $namaLain = &$nama;
    $namaLain = "Mutezar";
    echo $nama . PHP_EOL;


    // Pass By Reference, mengirim data ke function dengan reference
    // Contoh function dengan reference

    function increment(int $value) {
        $value++;
    }

    $counter = 1;
    increment($counter);
    echo $counter . PHP_EOL;


    // Function dengan reference
    function incrementReference(int &$value) {
        $value++;
    }

    $counter = 1;
    incrementReference($counter);
    echo $counter;
    

