<?php

    require_once "helper/MathHelper.php";

    // Use dipake untuk mengakses class yg ada di dalam namespace
    use Helper\MathHelper;

    echo MathHelper::$name . PHP_EOL;

    MathHelper::$name = "Ali Mutezar";
    echo MathHelper::$name . PHP_EOL;

    $result = MathHelper::sum(10, 10, 10);
    echo "Total : $result";

    // Note: biasanya static digunakan untuk bikin function / properties yg tujuannya sebagai helper tanpa harus membuat object untuk memanggil function tersebut