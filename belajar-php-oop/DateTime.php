<?php

    $date = new DateTime();
    $date->setDate(1999,7,18);
    $date->setTime(1,18,50);

    $date->add(new DateInterval("P1Y"));

    $minusOneMonth = new DateInterval("P1M");
    $minusOneMonth->invert = true;
    $date->add($minusOneMonth);
    var_dump($date);


    $now = new DateTime();
    $now->setTimezone(new DateTimeZone("Asia/Jakarta"));
    $string = $now->format("Y-m-d H:i:s");
    
    var_dump($now);
    echo "Waktu saat ini di Jakarta : $string" . PHP_EOL;


    // Conversi inputan string menjadi datetime menggunakan static function
    $waktu = DateTime::createFromFormat("Y-m-d H:i:s", "2022-07-6 11:14:40", new DateTimeZone("Asia/Jakarta"));
    var_dump($waktu);

    if ($waktu) {
        var_dump($waktu);
    } else {
        echo "Fomat waktu salah, silahkan input ulang";
    }