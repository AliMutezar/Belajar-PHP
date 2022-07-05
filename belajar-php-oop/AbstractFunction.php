<?php

require_once "data/Animal.php";
use data\{Animal, Cat};

$cat = new Cat();
$cat->name = "Catty";
$cat->run();