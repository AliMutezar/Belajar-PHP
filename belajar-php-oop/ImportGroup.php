<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// cara mengimport class, function, const sekaligus di dalam namespace yang sama
use Data\one\{conflict as conf, dummy as dum, sample as sam};
use function Helper\{helpMe as help, sayHello as salam};



$conflict = new conf();
$dummy = new dum();
$sample = new sam();
salam();