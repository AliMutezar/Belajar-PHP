<?php


// Di dalam trait kita bisa memasukkan konkrit function(function dengan body), abstract function, properties
// Menambahkan properties ke dalam trait, secara otomatis class memiliki properties tersebut

namespace Data\Traits;
trait SayGoodBye
{
    public function goodbye(?string $name): void 
    {
        if(is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void 
    {
        if(is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait hasName
{
    public string $name;
}

trait CanRun
{
    abstract function run(): void;
}


// Jika class menggunakan trait yg ada abstract function-nya, maka function tersebut harus di overriding
// Jika class memiliki function yg sama seperti pada di trait, maka function di trait akan teroverride oleh function yg ada di class (lebih diprioritaskan function yg ada di class dulu)
// Jika parent class miliki function yg sama seperi pada di trait, maka function di parenct class akan teroverride oleh function yg ada di trait

// So, ParentClass override by Trait
// Trait override by Child


class ParentPerson
{
    public function goodbye(?string $name): void
    {
        echo "Good Bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

trait All 
{
    use SayGoodBye, SayHello, hasName, CanRun {
        // bisa di override
        // hello as private; 
        // goodbye as private;
    }
}

class Person extends ParentPerson
{
    // Otomatis class person bisa menggunakan function goodbye dan hello
    use All;

    public function run(): void
    {
        echo "Person $this->name is Running" . PHP_EOL;
    }

    // public function goodbye(?string $name): void
    // {
    //     echo "Good Bye in Person" . PHP_EOL;
    // }

    // public function hello(?string $name): void
    // {
    //     echo "Hello in Person" . PHP_EOL;
    // }
}