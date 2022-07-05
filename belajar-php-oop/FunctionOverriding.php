<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko") . PHP_EOL;

$vp = new VicePresident();
$vp->name = "Fulan";
$vp->sayHello("Joko") . PHP_EOL;
