<?php

    // echo <<< ARRAY

    // Array adalah tipe data yang berisikan kosong atau banyak data
    // Array pada PHP berisikan data dengan jenis yang berbeda - beda
    // Array panjangnya dinamis, artinya kita bisa menambahkan data ke dalam Array sebanyak-banyaknya tanpa batas
    // ARRAY;

    $values = array(1, 2, 3.6);
    var_dump($values);

    $name = ['Ahmad', 'Ali', 'Mutezar'];
    var_dump($name);

    echo "\n";
    echo "\n";
    echo "Mengakses data di array pada nomor index" . "\n";
    echo $name[1];

    echo "\n";
    echo "\n";
    echo "Mengubah data di array pada nomor index dengan value yang baru" . "\n";
    echo $name[0] = "Fulan";
    var_dump($name);

    echo "\n";
    echo "\n";
    echo "Menambah data di array pada posisi paling belakang";
    $name[] = 'Fulanah';
    echo "\n";
    var_dump($name);


    echo "\n";
    echo "\n";
    echo "Menghapus data di array, index dan datanya hilang, jadi hati hati ketika menghapus data di dalam array";
    unset($name[1]);
    echo "\n";
    var_dump($name);
    var_dump(count($name));
    
