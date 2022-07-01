<?php

class Person
{

    // Membuat properties di dalam class, awali dengan var
    // Tambahkan ? jika datanya boleh null
    // keyword this digunakan untuk mengakses object saat ini
    // function construct adalah function yang dipanggil untuk pertama kalinya ketika kita membuat object. Jika ada parameter di function construct, maka wajib ditambahkan parameter di dalam objectnya

    const AUTHOR = "Ahmad Ali Mutezar";

    var string $name;
    var ?string $address;
    var string $country = "Palestine";


    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }


    function sayHello(string $name) 
    {
        if(is_null($name)) {
            echo "Hello, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info() {
        echo "Kenalin dong : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}