<?php

    // Cara ini tidak disarankan, dan cukup tau aja
    function &getValue() {
        static $value = 100;
        return $value;
    }

    $a = &getValue();
    $a = 200;

    $b = &getValue();
    echo $b . PHP_EOL;