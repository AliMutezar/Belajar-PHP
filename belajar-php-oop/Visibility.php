<?php

require_once "data/Product.php";

$product = new Product("Apel", 20000, "Durian", 35000);
// ini error karena properties name di set private
// echo $product->name; 
// echo $product->price;

echo "Cara mengakali visibility private agar bisa di akses diluar class-nya" . PHP_EOL;
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL . PHP_EOL;

echo "Akses properties dengan visibility protected";
$dummy = new ProductDummy("Semangka", 15000, "Alpukat", 5000);
echo PHP_EOL;

echo $dummy->getNama() . PHP_EOL;
echo $dummy->getHarga() . PHP_EOL . PHP_EOL;

echo $dummy->info() . PHP_EOL;