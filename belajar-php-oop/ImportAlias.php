<?php

// Alias digunakan untuk membuat nama lain dari class, function dan constant
// Keywordnya as setelah kata use

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\conflict as Conflict1;
use Data\two\conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as app;


$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();
echo app . PHP_EOL;