<?php

    // Break digunakan untuk menghentikan seluruh perulangan
    // Continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan perulangan selanjutnya

    // Note: untuk menghentikan perulangan tidak peduli apapun kondisinya true / false, maka gunakan break

    $counter = 1;
    while (true) {
        echo "Hello break loop ke - $counter " . PHP_EOL;
        $counter++;

        if($counter > 10) {
            break;
        }
    }

    // Ketika masuk bilangan genap, maka perulangan langsung di skip dan masuk ke poststatement ke perulangan berikutnya
    for ($counter = 1; $counter <= 10; $counter++) {
        if($counter % 2 == 0) {
            continue;
        }

        echo "Counter : $counter" . PHP_EOL;
    }

