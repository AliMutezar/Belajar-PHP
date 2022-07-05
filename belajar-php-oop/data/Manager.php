<?php

class Manager 
{
    var $name;
    var $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    // void tidak mengembalikan value
    function sayHello(string $name): void 
    {
        echo "Hi, $name my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{

    // Direkomendasikan untuk memanggil construct parent ketika ingin overriding construct
    // hanya function constructor saya yang jumlah parameternya bisa kita ubah ketika overriding
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VIP");        
    }


    function sayHello(string $nama): void 
    {
        echo "Hi, $nama my name is VP $this->name" . PHP_EOL;
    }
}