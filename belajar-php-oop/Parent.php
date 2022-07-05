<?php

require_once "data/Shape.php";
use Data\{Shape, Rectangle};

$shape = new Shape();
echo "Parent dengan return nilai = " . $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo "Child dengan return nilai = " . $rectangle->getCorner() . PHP_EOL;
echo "Child dengan return nilai parent = " . $rectangle->getParentCorner() . PHP_EOL; 
