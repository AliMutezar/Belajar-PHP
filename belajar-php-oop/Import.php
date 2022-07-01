<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\two\Conflict(); // jika nama class-nya sama, hasus pake namespace

helpMe();
echo APPLICATION . PHP_EOL;