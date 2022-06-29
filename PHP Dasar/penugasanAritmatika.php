<?php
    // Penugasan       Keterangan
    // $a += $b    |   $a = $a + $b
    // $a -= $b    |   $a = $a - $b
    // $a *= $b    |   $a = $a * $b
    // $a /= $b    |   $a = $a / $b
    // $a %= $b    |   $a = $a % $b

    $total = 0;
    $fruit = 5000;
    $orangeJuice = 10000;
    $chiken = 20000;

    $total += $fruit;
    $total += $orangeJuice;
    $total += $chiken;

    var_dump($total);