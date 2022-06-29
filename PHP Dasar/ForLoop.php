<?php
    // for (init statement; kondisi; post statement) {
    //     block perulangan
    // }

    // Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
    // Kondisi akan dilakukan pengecekan dalam setiap kali perulangan, jika true. maka perulangan akan dilakukan, jika false perulangan akan berhenti
    // Post statement akan dieksekusi setiap kali diakhiri perulangan
    // Init statement, kondisi dan post statement tidak wajib diisi, jika kondisi tidak diisi, berarti kondisi selalu bernilai true

    for ($counter = 1; $counter <= 10; $counter++) {
        echo "Looping ascending ke - $counter" . PHP_EOL;
    }

    for ($counter = 1; $counter <= 10; $counter++) :
        echo "Looping descending ke - $counter" . PHP_EOL;
    endfor;