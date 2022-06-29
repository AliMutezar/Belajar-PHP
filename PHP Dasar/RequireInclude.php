<?php

    /*

        Saat membuat aplikasi, ada baiknya tidak dibuat dalam 1 file
        PHP memiliki function require dan include yang bisa kita gunakan untuk mengambil file php lain
        Require, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
        Include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namaun program akan tetap dilanjutkan


        
    */

        require "lib/MyFunction.php";
        echo sayHallo("Ali", "Mutezar" . PHP_EOL);

        // require "lib/MyFunctionSalah.php";
        // echo sayHallo("Ali", "Mutezar");

        // include "lib/MyFunctionSalah.php";
        // echo sayHallo("Ali", "Mutezar");

