<?php
    // Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
    // kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
    // Di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
    // Jika tipe data value tidak sesuai, maka akan terjadi error
    // Secara default, PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe int, tapi kita mengirim string, maka PHP akan otomatis mengkonversi string tersebut menjadi int

    function sum(int $first, int $last) {
        $total = $first + $last;
        echo "Total $first + $last = $total" . PHP_EOL;
    }

    sum("100", "100");
    sum(100, 100);
    sum(true, false);

    // Error, karena PHP tidak bisa mengkonversi array menjadi integer
    // sum([], []);