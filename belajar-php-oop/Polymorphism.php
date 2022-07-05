<?php

    require_once "data/Programmer.php";
    require_once "data/Manager.php";

    // Polymorpshim memiliki kemampuan untuk merubah bentuk / tipe dari sebuah properties
    // Berubahan bentuknya terbatas hanya pada class turunannya
    $company = new Company();
    $company->programmer = new Programmer("Web Developer");
    var_dump($company);

    $company->programmer = new BackendProgrammer("PHP");
    var_dump($company);

    $company->programmer = new FrontendProgrammer("Javascript");
    var_dump($company);


    // Ini error, karena manager bukan turnan dari class programmer
    // $company->programmer = new Manager();
    // var_dump($company);

    sayHelloProgrammer(new Programmer("Web Developer"));
    sayHelloProgrammer(new BackendProgrammer("PHP"));
    sayHelloProgrammer(new FrontendProgrammer("Javascript"));


