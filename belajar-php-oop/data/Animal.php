<?php

namespace Data;
require_once "Food.php";

// Abstract function harus ada di dalam abstract class
abstract class Animal
{
    public string $name;
    abstract function run(): void;
    abstract function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal 
{
    public function run():void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat eating" . PHP_EOL;
    }
}

// Jika menggunakan abstract function, maka harus mengiplementasi function run
// Gunakan abstract function ketika kita memiliki kebutuhan untuk memaksa semua turunannya mengimplementasi sebuah function

class Dog extends Animal
{

    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $animalFood): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}