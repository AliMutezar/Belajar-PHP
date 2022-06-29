<?php

    // Do While Loop adalah perulangan yg mirip dengan while
    // Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
    // oleh karena itu do while loop, minimal pasti sekali melakukan perulangan walaupun kondisinya false

    $counter = 1;
    while ($counter <= 10) {
        echo "Hello while loop ke - $counter " . PHP_EOL;
        $counter++;
    }

    $counter = 1;
    do {
        echo "Hello do while loop ke - $counter " . PHP_EOL;
        $counter++;
    } while ($counter <= 10);