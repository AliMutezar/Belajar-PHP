<?php

class Data
{
    var string $first = "First"; //public
    public string $secone = "Second";
    private string $third = "Third";
    protected string $fourth = "Fourth";
}

$data = new Data();

// Hanya bisa dilakukan iterasi pada properties yg visibility-nya public 
foreach ($data as $property => $value) {
    echo "$property: $value" . PHP_EOL;
}