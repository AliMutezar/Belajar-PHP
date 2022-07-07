<?php

$matches = [];
$result = (bool)preg_match_all("/u|mu|ar/i", "Ahmad Ali Mutezar", $matches);

var_dump($result) . PHP_EOL;
var_dump($matches) . PHP_EOL;


$ngomongJorok = preg_replace("/babi|❤️❤️|goblok/i", "***", "Dasar anak ❤️❤️, nyusahin aja lu goblok");
var_dump($ngomongJorok);

$split = preg_split("/[\s,-]/", "Ahmad Ali-Mutezar,Fulan");
var_dump($split);

// Note Dokumentasi REGEX: https://www.php.net/manual/en/book.pcre.php