<?php

// Class child hanya bisa punya satu parent saja, tapi class parent bisa punya banyak class child
// Pada class child harus menggunakan keyword extends

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Manager";
$manager->sayHello("Fulan");


$vp = new VicePresident();
$vp->name = "Vice President";
$vp->sayHello("Wakil President");