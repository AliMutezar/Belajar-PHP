<?php

class Manager 
{
    var $name;

    // void tidak mengembalikan value
    function sayHello(string $name): void 
    {
        echo "Hi, $name my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    
}