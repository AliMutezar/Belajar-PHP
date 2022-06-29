<?php

    // Tipe Data Boolean
    echo "Tipe Data Boolean";
    echo "Benar : ";
    var_dump(true);

    echo "Salah : ";
    var_dump(false);
    echo "\n";


    // Tipe Data String
    echo "Tipe Data String";
    echo "\n";
    echo '  ';
    echo 'Nama : ';
    echo 'Ahmad Ali Mutezar';
    echo "\n";

    echo "  ";
    echo "Nama : ";
    echo "Ahmad \t Ali Mutezar";


    // Heredoc adalah fitur untuk membuat string yang panjang, sehingga kita tidak perlu manual melakukan
    // enter, tab dan yang lain-lain secara manual.

    echo <<<TEST


        ini adalah contoh string yang sangat
        panjang, dan juga nggak perlu ngetik secara manual dan 
        "bisa pake qoute" juga
    TEST;



    // Nowdoc mirip seperti Heredoc, yang membedakan adalah Nowdoc tidak memiliki kemampuan
    // parsing seperti di heredoc (parsing variable) atau Double Qoute.

    echo <<<'TEST'


        ini adalah contoh string yang sangat
        panjang, dan juga nggak perlu ngetik secara manual dan 
        "bisa pake qoute" juga
    TEST;




