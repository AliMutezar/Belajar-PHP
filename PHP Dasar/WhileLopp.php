<?php

    // While loop adalah versi perulangan yang lebih sederhana dibanding for loop
    // Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement

    $counter = 1;
    while ($counter <= 10) {
        echo "Hello while loop ke - $counter " . PHP_EOL;
        $counter++;
    }

    $counter = 1;
    while ($counter <= 10) :
        echo "Hello while loop ke - $counter " . PHP_EOL;
        $counter++;
    endwhile;