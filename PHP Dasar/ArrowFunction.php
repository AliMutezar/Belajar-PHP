<?php

    // Arrow function ada sebagai alternative dari Anonymous function yang lebih sederhana
    // Array function dan anonymous function adalah 2 hal yang sama
    // Perbedaannya adalah jika arrow function, secara otomatis bisa mengakses variable di luar closure, tidak seperti anonymous yang harus dibuat secara manual menggunakan keyword use
    // Pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn
    // Arrow function dikhususkan untuk pembuatan function yang sederhana


    // Anonymous Function
    $firstName = "Ali";
    $lastName = "Mutezar";

    $sayHelloAli = function () use ($firstName, $lastName) {
        echo "Hello $firstName $lastName" . PHP_EOL;
    };

    $sayHelloAli();


    // Arrow Function
    $firstName = "Ali";
    $lastName = "Mutezar";

    $sayHello = fn() => "Hello $firstName $lastName" . PHP_EOL;
    echo $sayHello();