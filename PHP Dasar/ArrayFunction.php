<?php
    /*
        Function bawaan PHP yang bisa kita gunakan untuk memanipulasi data array
        source : https://www.php.net/manual/en/ref.array.php

        Contoh Array Function

        Function                Keterangan
        array_keys()            Mengambil semua keys milik array
        array_values()          Mengambil semua values milik array
        array_map()             Mengubah semua data array dengan callback
        sort()                  Mengurutkan array
        rsort()                 Mengurutkan array terbalik
        shuffle()               Mengubah posisi data di arrat secara random
    */
    $data = [1, 2, 3, 4, 5];
    $dataPerson = [
        "first_name"    => "Ahmad Ali",
        "last_name"     => "Mutezar",
        "age"           =>  22,
        "Job"           => "Software Enginerr"
    ];

    $dataResult = array_map(fn(int $value)  =>  $value * 10, $data);
    var_dump($dataResult);

    // rsort($dataPerson);
    var_dump($dataPerson);

    var_dump(array_keys($dataPerson));
    var_dump(array_values($dataPerson));



