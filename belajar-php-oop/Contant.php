<?php

require_once "data/Person.php";

// constant data tidak dapat diubah
const APP_VERSION = "1.0.0";
echo APP_VERSION . PHP_EOL;

echo "Author : " . Person::AUTHOR;