<?php

    // penggunaan if statement bisa disederhanakan menggunakan ternary operator menggunakan kata kunci ? dan :
    
    // contoh menggunakan if biasa
    $gender = "PRIA";
    if ($gender == "PRIA") {
        $hi = "Hi Bro !";
    } else {
        $hi = "Hi Nona !";
    }

    echo $hi . PHP_EOL;

    // Code diatas dipersingkat dengan ternary operator

    $hi = $gender == "PRIA" ? "Hi Bro !" : "Hi Nona !";
    echo $hi . PHP_EOL;