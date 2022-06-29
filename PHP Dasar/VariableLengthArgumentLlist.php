<?php
    // Variable-length Argument List merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
    // Variable-length Argument List secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke function-nya
    // Variable-length Argument List hanya bisa dilakukan di argument posisi terakhir
    // Untuk membuat variable-length argument list, kita bisa menggunakan tanda ...(titik 3x) sebelum nama argument

    function sumAllArray(array $values) {
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }

        echo "Total " . implode(", ", $values) . " = $total" . PHP_EOL;
    }

    // Jika menggunakan tipe data array biasa, maka kita harus manual mengirimkan array-nya ke dalam argument ketika memanggil function
    sumAllArray([1, 2, 3, 4, 5]);


    function sumAllArgumentList(...$values) {
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }

        echo "Total " . implode(", ", $values) . " = $total" . PHP_EOL;
    }

    sumAllArgumentList(1, 2, 3, 4, 5);


    function sumAllArgumentListCase(...$values) {
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }

        echo "Total " . implode(", ", $values) . " = $total" . PHP_EOL;
    }

    // Jika variable sudah terlanjur dibuatkan array, maka cara memanggil function argument list-nya kita bisa tambahkan titik 3x di depan seperti contoh dibawah
    $values = [1, 2, 3, 4, 5];
    sumAllArgumentList(...$values);

