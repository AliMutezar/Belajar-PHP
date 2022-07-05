<?php

// Getter digunakan untuk mendapatkan data properties / field
// Setter digunakan untuk mengubah data properties / field
// Semua propertiesnya harus dijadikan private invisibility

require_once "data/Category.php";

$category = new Category();
$category->setName("Laptop");
$category->setExpensive("True");


$category->setName("         "); // ada validasi, sehingga yg muncul hanya yang ada namanya
echo "Name      : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;