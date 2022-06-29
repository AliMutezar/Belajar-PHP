<?php

    // Default Argument Value memungkinkan ketika kita memanggil function dan tidak memasukkan parameter, kita bisa menentukan data default-nya
    // Untuk membuat default argument value, disarankan membuatnya pada argument ke dua atau setelahnya, tidak disarankan di awal, karena tidak berguna


    function sayHello($name = "Anonymous") {
        echo "Hello $name" . PHP_EOL;
    }

    sayHello();
    sayHello("Ali");

    function sayUseless($firstName = "Fulan", $lastName) {
        echo "Hello $firstName $lastName";
    }

    // Kita tidak bisa mengosongkan posisi argument pertama ketika memanggil function
    // sayUseless(, "Ali");