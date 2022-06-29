<?php

    /*

        Pada PHP, kita bisa membuat variable dimanapun yang kita mau
        Scope variable adalah dibagian mana saja sebuah variable dapat kita akses

        PHP punya 3 jenis variable scope:
            - Global Scope
                Variable yang dibuat diluar function memiliki scope global
                Variable di scope global hanya bisa diakses dari luar function
                Artinya di dalam function, kita tidak bisa mengakses variable di global scope


            - Local Scope
                Variable yang dibuat di dalam function memiliki scope local
                Variable di scope local hanya bisa diakses dari dalam function itu sendiri
                Artinya, variable tersebut tidak bisa diakses dari luar function ataupun dari function lain


            - Static Scope
                Secara default, local variable mempunyai siklus hidup yang terbatas hanya ketika function tersebut diksekusi saja
                Jika sebuah function selesai dieksekusi, maka siklus hidup local variable-nya selesai
                
                Static scope hanya bisa di set di local variable
                Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
                Artinya, jika function tersebut di eksekusi lagi, maka static variable tersebut akan memiliki value dari function sebelumnya



            Note : 
            Global Keyword:
                Namun, jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global
                Dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada di global scopre dari dalam function
            
            $GLOBAL Variable
                Selain menggunakan global keyword, setiap variable yang dibuat di dalam global scope, secara otomatis akan disimpan di dalam array $GLOBAL oleh PHP

                Jadi kita bisa menggunakan $GLOBAL variable dengan key nama variable-nya dari dalam function jika ingin mengakses global variable

                $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun

    */

    
    $nama = "Ali"; // Global Scope
    function sayName() {
        // undefines variable $nama
        // echo $nama;
    }
    sayName();



    function createName() {
        $name = "Ali"; // local scope
    }

    createName();
    echo $name . PHP_EOL;

    
    function globalKeyword() {
        global $nama; // global keyword
        echo "Hello $nama" . PHP_EOL;
        echo " Hallo Globals {$GLOBALS['nama']}" . PHP_EOL;
    }

    globalKeyword();
    var_dump($GLOBALS);


    
    function incrementLocalVariable() {
        $counter = 1;
        echo "Counter = $counter" . PHP_EOL;
        $counter++;
    }

    incrementLocalVariable();
    incrementLocalVariable();
    incrementLocalVariable();


    function incrementStaticVariable() {
        static $counter = 1; // static variable
        echo PHP_EOL . "Counter = $counter" . PHP_EOL;
        $counter++;
    }

    incrementStaticVariable();
    incrementStaticVariable();
    incrementStaticVariable();
