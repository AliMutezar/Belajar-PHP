<?php

    // Recursive funtion adalah kemampuan function untuk memanggil function dirinya sendiri
    // Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti kasus factorial
    // Contoh factorial : Factorial 10, 10 * 9 * 8 * 7 * 6 dst

    
    // Factorial Loop menggunakan for
    function factorialLoop(int $value) : int {
        $total = 1;
        for ($i = 1; $i <= $value; $i++) {
            $total *= $i;
        }

        return $total;
    }

    var_dump(factorialLoop("5"));
    var_dump(1 * 2 * 3 * 4 * 5);


    // Factorial mengggunakan recursive
    function factorialLoopRecursive(int $value) : int {
        if ($value == 1) {
            return 1;
        } else {
            return $value * factorialLoopRecursive($value - 1);
        }
    }

    var_dump(factorialLoopRecursive(5));

    function loop(int $value) {
        if ($value == 0) {
            echo "End loop" . PHP_EOL;
        } else {
            echo "Loop - $value" . PHP_EOL;
            loop($value - 1);
        }
    }

    loop(3000000);