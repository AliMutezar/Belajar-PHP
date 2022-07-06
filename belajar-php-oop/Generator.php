<?php

function getGenap(int $max): iterator
{
    $array = [];
    for ($i=1; $i < $max; $i++) { 
        if($i % 2 == 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

foreach (getGenap(10) as $value) {
    echo "Genap : $value" . PHP_EOL;
}



function getGanjil(int $max): iterator
{
    for ($i=1; $i < $max; $i++) { 
        if($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getGanjil(10) as $value) {
    echo "Ganjil : $value" . PHP_EOL;
}