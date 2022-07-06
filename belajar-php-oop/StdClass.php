<?php

$array = [
    "firstName" => 'Ahmad',
    "middleName" => 'Ali',
    "lastName" => 'Mutezar',
];

// Mengkonversi tipe data array menjadi tipe object

$object = (object) $array;
var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;


// Mengkonbersi lagi dari tipe object menjadi array
$arrayBalik = (array) $object;
var_dump($arrayBalik);