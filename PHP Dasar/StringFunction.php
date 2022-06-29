<?php

    // Kumpulan string function https://www.php.net/manual/en/ref.strings.php
    /*
        Contoh string function pada PHP:

        Function                Keterangan
        join() / implode()      Menggabungkan array menjadi string
        explode()               Memecah string menjadi array
        strtolower()            Mengubah string menjadi lowercase
        strtoupper()            Mengubah string menjadi uppercase
        substr()                Mengambil sebagian string
        trim()                  Menghapus whitespace di depan dan belakang string

    */

    var_dump(join(", ", [5,4,3,2,1]));
    var_dump(explode(" ", "Ahmad Ali Mutezar"));
    var_dump(substr("Ahmad Ali Mutezar", 0, 5));


