<?php
    // $a++        Post Increment      Kembalikan $a lalu naikan 1 array_change_key_case
    // ++$a        Pre Increment       Naikan 1 angka, lalu kembalikan $a
    // $a--        Post Decrement      Kembalikan $a lalu turunkan 1 array_change_key_case
    // --$a        Pre Decrement       Turunkan 1 angka, lalu kembalikan $a

    $a = 10;
    $d = 10;
    $b = $a++;
    $c = ++$d;

    var_dump($b);
    var_dump($c);