<?php

    // Goto Operator salah satu fitur yang sebenernya jarang sekali digunakan di PHP
    // Kenapa jarang, karena goto operator membuat kode program aplikasi menjadi membingungkan ketika dibaca
    // Goto merupakan fitur dimana kita bisa loncar ke kode program sesuai dengan keinginan kita
    // Agar goto bisa loncat ke kode program yg lain, kita harus membuat label di php dengan menggunakan nama label lalu diakhiri: (colon)


    // Penggunaan sederhana dari goto operator
    goto a;
    echo "Hello World" . PHP_EOL;

    a:
    echo "Hello A" . PHP_EOL;

    // Penggunaan goto operator pada loop
    $counter = 1;
    while (true) {
        echo "Hello break loop ke - $counter " . PHP_EOL;
        $counter++;

        if($counter > 10) {
            goto end;
        }
    }

    end:
    echo "End loop";