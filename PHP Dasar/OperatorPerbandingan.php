<?php

    // Operator                Keterangan
    // $a == $b                true jika $a sama dengan $b setelah dilakukan konversi tipe data
    // $a === $b               true jika $a sama dengan $b memiliki tipe data yang sama
    // $a != $b                true jika $a tidak sama dengan $b setelah dilakukan konversi
    // $a !== $b               true jika $a tidak sama dengan $b atau tidak sama tipe data
    

    var_dump("10" == 10);
    var_dump("10" === 10);
    var_dump("10" === "10");

    var_dump(10 < 9);