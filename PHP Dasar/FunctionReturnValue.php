<?php

    // Secara default, function tidak menghasilkan value apapun. Namun jika kita ingin, kita bisa membuat sebuah function dapat mengembalikan nilai
    // Di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan
    // Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu

    function sum(int $first, int $second) {
        $total = $first + $second;
        return $total;
    }

    // return value harus di simpan ke dalam variable
    $result = sum(10,10);
    var_dump($result);


    // Jika function telah menemukan return, maka nilai langsung dikembalikan dan code dibawahnya tidak di eksekusi
    function getValue(int $value) {
        if ($value >= 80) {
            return "A";
        } else if($value >= 70) {
            return "B";
        } else if($value >= 60) {
            return "C";
        } else if($value >= 50) {
            return "D";
        } else {
            return "E";
        }

        echo "Upps" . PHP_EOL;
    }

    $score = getValue(90);
    var_dump($score);

    function getValueCase(int $value) {
        if ($value >= 80) {
            echo "A";
        } else if($value >= 70) {
            echo "B";
        } else if($value >= 60) {
            echo "C";
        } else if($value >= 50) {
            echo "D";
        } else {
            echo "E";
        }

        echo PHP_EOL . "Upps" . PHP_EOL;
    }

    $scoreCase = getValueCase(70);
    var_dump($scoreCase);