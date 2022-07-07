<?php

    require_once "exeption/ValidationExeption.php";
    require_once "data/LoginRequest.php";
    require_once "helper/ValidationUtil.php";

    $request = new LoginRequest();
    $request->username = "Test";
    $request->password = "Rahasia";

    ValidationUtil::validateReflection($request);



    class RegisterUserRequest
    {
        public ?string $nama;
        public ?string $alamat;
        public ?string $email;
    }


    $daftar = new RegisterUserRequest();
    $daftar->nama = "Ali";
    $daftar->alamat = "Kebon Jeruk";
    $daftar->email = "aamutezar@gmail.com";

    ValidationUtil::validateReflection($daftar);