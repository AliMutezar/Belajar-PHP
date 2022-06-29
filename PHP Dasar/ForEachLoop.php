<?php

    // Di php terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di Array secara otomatis tanpa harus membuat counter lalu mengakses array menggunakan counter yang telah dibuat tersebut

    // Jika kita tidak butuh output index dari array, maka bisa gunakan foreach untuk mengakses data pada array

    // Cara mengakses data array menggunakan for biasa
    $nama = ["Ahmad", "Ali", "Mutezar"];
    for ($i = 0; $i < count($nama); $i++) {
        echo "Data ke $i = $nama[$i]" . PHP_EOL;
    }

    // Cara mengakses data array index menggunakan foreach tapi tidak membutuhkan output index
    foreach($nama as $data) {
        echo "Data $data" . PHP_EOL;
    }

    // Cara mengakses data array index menggunakan foreach tapi  membutuhkan output index
    foreach($nama as $index => $data) {
        echo "Data ke $index = $data" . PHP_EOL;
    }

    // Cara mengakses data array map menggunakan foreach dengan key
    $person = [
        "first_name" => "Ahmad",
        "middle_name" => "Ali",
        "last_name" => "Mutezar"
    ];

    foreach ($person as $key => $value) {
        echo "$key : $value" . PHP_EOL;
    }
