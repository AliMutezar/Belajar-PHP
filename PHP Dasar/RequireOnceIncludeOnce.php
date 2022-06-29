<?php

    /*

        Function require dan include akan selalu mengambil file yang kita inginkan
        Jika kita beberapa kali menggunakan require dan include file yangsama, maka file tersebut akan berkali-kali pula kita ambil

        Hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi function, sehingga jika diambil berkali-kali akan menyebabkan error redeclare function
        Pada PHP terdapat function require_once dan include_once, function ini bisa mendeteksi jika kita sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi

    */

    // Error redeclare sayHallo()
    // include "lib/MyFunction.php";
    // include "lib/MyFunction.php";

    include_once "lib/MyFunction.php";
    include_once "lib/MyFunction.php";


    echo sayHallo("Ali", "Mutezar" . PHP_EOL);
