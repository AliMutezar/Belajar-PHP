<?php

    // Anonymous function adalah function tanpa nama, di PHP disebut juga dengan closure
    // Anonymous function biasanya digunakan sebagai argument atau sebgai value di variable
    // Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya

    $sayHello = function(string $name) {
        echo "Hello $name" . PHP_EOL;
    };

    $sayHello("Ahmad");
    $sayHello("Ali");



    function sayGoodBye(string $name, $filter) {
        $finalName = $filter($name);
        echo "Good Bye $finalName" . PHP_EOL;
    }

    // Cara menggunakan anonymous function kita bisa membuat function pada argument ketika memanggil sebuah function
    sayGoodBye("Ali", function (string $name) : string {
        return strtoupper($name);
    });

    // Cara berikutnya kita tampung dulu function anonymous ke dalam variable seperti dibawah
    $filterFunction = function (string $name) : string {
        return strtoupper($name);
    };
    sayGoodBye("Fulan", $filterFunction);



    // Ketika kita menggunakan anonymous function, kita tidak bisa mengakses 2 variable dibawah ini, jika kita ingin mengaksesnnya menggunakan anonymous function, maka kita harus gunakan keyword use

    $firstName = "Ali";
    $lastName = "Mutezar";

    $sayHelloAli = function () use ($firstName, $lastName) {
        echo "Hello $firstName $lastName" . PHP_EOL;
    };

    $sayHelloAli();

    // Data di dalam anonymous function tidak bisa diubah ketika sudah digunakan pertama kali, seperti dibawah ini kita coba ubah value dari kedua variable nama diatas

    $firstName = "Fulan";
    $lastName = "Fulanah";
    $sayHelloAli();