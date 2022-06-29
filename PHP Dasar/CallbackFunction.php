<?php

    // Callback adalah sebuah mekanisme sebuah function yang memanggil function lainnya sesuai dengan yang diberikan di dalam argument
    // Cara mengimplementasi callback, bisa menggunakan tipe data callable
    // Untuk memanggil callback function tersebut, kita bisa menggunakan function call_user_func(callable, arguments)

    // Note : kalo misal kita membuat parameter argument, lalu jika itu adalah suah function, kita bisa tambahkan tipe nya sebagai callbale

    function sayHello(string $name, callable $filter) {

        $finalName = call_user_func($filter, $name);

        // kode diatas sama seperti $filter($name)
        // Hanya cara memanggilnya saja yang berbeda

        echo "Hello $finalName" . PHP_EOL;
    }

    sayHello("Ali", function (string $name) : string {
        return strtoupper($name);
    });

    sayHello("Ali", fn($name) => strtoupper($name));
    sayHello("Ali", "strtoupper");
    sayHello("Ali", "strtolower");