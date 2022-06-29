<?php

    // echo <<<UNSET
    //     cara menghapus variable pada PHP adalah menggunakan "unset(nama_variable)"
        
    //     Tapi hati hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut, bahkan function is_null(nama_variable) pun akan menjadi error ketika mengakses variable yang telah di unset tersebut
        
    //     agar lebih aman, kita bisa menggunakan function isset(nama_variable) untuk mengecek apakah sebuah variable ada dan nilainya tidak null
    // UNSET;

    $contoh = "Ali";
    // unset($contoh);

    // echo "ini is_null untuk variable unset : ";
    // echo "\n";
    // var_dump(is_null($contoh));
    // echo $contoh;

    $contoh = null;
    var_dump(isset($contoh));