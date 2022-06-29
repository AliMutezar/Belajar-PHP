<?php

    // Expression, sederhananya expression adalah apapun yang memiliki nilai atau value

    // $a = 5, ketika kita menuliskan "5", maka tentu itu adalah nilai. Oleh karena itu, angka 5 tersebut adalah expression
    // Lalu kita menulis kode $b = $a;  Maka, $a bisa kita bilang adalah expression, karena $a bernilai 5;

    $a = 5;
    $b = $a;

    // Pada kode dibawah, getValue() adalah expression, karena getValue() bernilai angka 100
    function getValue() {
        return 100;
    }

    $value = getValue();