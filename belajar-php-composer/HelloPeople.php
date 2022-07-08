<?php

    // autoload.php tersimpan di dalam namespace yg kita set, kasus ini yaitu di namespace data. jadi kita cukup require_once autoload-nya saja tanpa harus require_once satu-persatu file yg kita butuhkan
    require_once __DIR__ . '/vendor/autoload.php';
    use PZN\Data\People;

    $people = new People("Fulan");
    echo $people->sayHello("Ali");

