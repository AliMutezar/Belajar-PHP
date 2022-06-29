<?php

echo <<<NULL
    Null
    1. Null case InsenTive
    2. Kita bisa hapus data di dalam suatu variable dengan memberikannya null / NULL, Null
NULL;

$name = "Ali";
$name = NULL;

$age = Null;
$alamat = null;

echo "\n";
echo "Nama : " . $name;
echo "\n";
echo "Umur : " . $age;
echo "\n";
echo "Alamat : ". $alamat;
$name = "Ali";

echo "\n";
echo "Is Name Null ? : ";

// Lebih baik check isNull menggunakan var_dump ketimbang echor 
var_dump(is_null($name));
