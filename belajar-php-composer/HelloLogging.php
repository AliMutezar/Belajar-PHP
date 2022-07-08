<?php

    require_once __DIR__ .'/vendor/autoload.php';

    use Monolog\Level;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $log = new Logger("Belajar Bersama PZN");
    $log->pushHandler(new StreamHandler('/src/application.log', Logger::INFO));

    $log->info("Hello World");
    $log->info("Selamat Belajar Composer");

