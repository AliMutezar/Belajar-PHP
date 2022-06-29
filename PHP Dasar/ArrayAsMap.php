<?php

    // echo <<< ARRAYMAP
    //     Biasanya di bahasa pemograman lain terdapat tipe data Map, yaitu asosiasi antara key dan value, tapi di PHP tipe  data map bisa menggunakan Array

    //     By Default, array pada PHP menggunakan index(number) sebagai key dan value-nya bebas

    //     Jika mau, kita juga bisa mengubah index menjadi string. Nah hal ini kaya tipe data Map di bahasa pemograman yang lain
    // ARRAYMAP;

    $karyawan = array(
        'id' => 1,
        'name' => 'Ali Mutezar',
        'umur' => 22,
        'address' => [
            'city' => 'Jakarta Barat',
            'country' => 'Indonesia'
        ]
    );
    var_dump($karyawan);
    var_dump($karyawan['address']['country']);

    $karyawati = [
        'id' => 2,
        'name' => 'Fulanah',
        'umur' => 21
    ];
    var_dump($karyawati);