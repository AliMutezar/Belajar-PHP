<?php

    require_once "exeption/ValidationExeption.php";
    require_once "data/LoginRequest.php";
    require_once "helper/Validation.php";

    $loginRequest = new LoginRequest();
    $loginRequest->username = " ";
    $loginRequest->password = " ";


    // Multiple catch bisa pake 2 class (ValidationExeption | Exception)
    try {
        ValidateLoginRequest($loginRequest); // panggil method yg nyebabin exeption
    } catch (ValidationExeption | Exception $exeption) {
        echo "Error : {$exeption->getMessage()}" . PHP_EOL; // lakuin sesuatu kalo exeption terjadi

        var_dump($exeption->getTrace()) . PHP_EOL;
        echo $exeption->getTraceAsString() . PHP_EOL;
    } finally {
        echo "Error nggak error tetep dipanggil" . PHP_EOL;
    }

    echo "User Valid";