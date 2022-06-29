<?php

    // Sama seperti pada argument, pada return value kita bisa mendeklarasikan tipe datanya
    // Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
    // Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan : diikut tipe data kembaliannya

    function sum(int $first, int $second) : int 
    {
        $total = $first + $second;
        return $total;
    }

    $result = sum(10,10);
    var_dump($result);