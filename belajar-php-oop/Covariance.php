<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter;
$cat = $catShelter->adopt("Catty");
$cat->eat(new \Data\AnimalFood);

$dogShelter = new \Data\DogShelter;
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new \Data\Food);


// Note: Contravariance child jadi parent, kalo Covariance parent jadi child