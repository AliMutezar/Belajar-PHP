<?php

    function sayHello() {
        echo "Hello function" . PHP_EOL;
    }

    // Cara mengeksekusi block function 
    sayHello();


    // Function Argument
    // Kita bisa mengirim informasi ke function yang ingin kita panggil
    // Untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter di function yang sudah kita buat
    // Cara membuat argument sama seperti membuat variable
    // Argument ditempatkan di dalam kurung () pada deklarasi function
    // Argument bisa lebih dari satu, dan harus dipisahkan menggunakan tanda koma (,)

    function hello($firstName, $lastName) {
        echo "Hello $firstName $lastName" . PHP_EOL;
    }

    hello("Ahmad", "Ali");