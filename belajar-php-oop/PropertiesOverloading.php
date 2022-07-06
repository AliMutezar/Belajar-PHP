<?php

class Zero 
{
    private array $properties = [];


    // Jika property yg di aksee tidak ada, makan function __get akan dijalankan
    // Untuk mengambil data berdasarkan properti name-nya
    public function __get($name)
    {
        // echo "Access Property $name" . PHP_EOL;
        return $this->properties[$name];
    }


    // Untuk mengubah data berdasarkan properti name-nya
    public function __set($name, $value)
    {
        // echo "Set Property $name with value $value" . PHP_EOL;
        return $this->properties[$name] = $value;
    }


    // Untuk mengecheck apakah sudah di set berdasarkan properti name-nya
    public function __isset($name): bool
    {
        // echo "Isset $name" . PHP_EOL;
        // return false;

        return isset($this->properties[$name]);
    }


    // Untuk meng-unset berdasarkan properti name-nya
    public function __unset($name)
    {
        // echo "Unset $name" . PHP_EOL;
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with argument $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with argument $join" . PHP_EOL;
    }

}


// Object untuk penjelasan Overloading
$zero = new Zero();
// $zero->firstName;
// $zero->middleName = "Ali";
// isset($zero->firstName);
// unset($zero->firstName);


// Coba properties dynamic
$zero->firstName = "Ahmad";
$zero->middleName = "Ali";
$zero->lastName = "Mutezar";

echo "First Name : $zero->firstName" . PHP_EOL; 
echo "Middle Name : $zero->middleName" . PHP_EOL; 
echo "Last Name : $zero->lastName" . PHP_EOL; 


// Coba function dynamic
$zero->sayHello("Ali", "Asik"); //non static function
Zero::sayHello("Ali", "Mantap"); // static function



// Note: jadi kita seakan-akan bisa bikin function secara dinamis meskipun tidak ada function-nya, karena PHP memanggil magic function __call dan __calStatic