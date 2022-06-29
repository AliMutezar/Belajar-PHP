<?php
    
    // Operator Array
    
    // Contoh          Nama           Keterangan
    // $a + $b         Union          Menggabungkan array $a dan array $b
    // $a == $b        Equality       true jika array $a dan array $b memiliki key-value sama
    // $a === $b       Identity       true jika array $a dan array $b memiliki key-value dan posisi yang sama
    // $a != $b        Inequality     true jika array $a dan array $b tidak sama
    // $a !== $b       Nonidentity    true jika array $a dan array $b tidak identik


    $a = [
        "first_name" => "Ahmad",
        "last_name"  => "Ali"
    ];

    $b = [
        "last_name" => "Ali",
        "first_name" => "Ahmad"
    ];


    // Operasi Union
    // $full = $a + $b;
    // var_dump($full);



    // Operasi Equality
    var_dump($a == $b);

     // Operasi Identity 
    var_dump($a === $b);