<?php

class Product 
{

    private string $name;
    private int $price;

    protected string $nama;
    protected int $harga;



    public function __construct(string $name, int $price, string $nama, int $harga)
    {
        $this->name = $name;
        $this->price = $price;

        $this->nama = $nama;
        $this->harga = $harga;
    }

    // Cara mengakali properties dengan visibility private agar bisa diakses
    public function getName():string 
    {
        return $this->name;
    }

    // Cara mengakali properties dengan visibility private agar bisa diakses
    public function getPrice():int 
    {
        return $this->price;
    }

    public function getNama():string 
    {
        return $this->nama;
    }

    public function getHarga():int 
    {
        return $this->harga;
    }

}

class ProductDummy extends Product
{
    public function info()
    {
        echo "Nama  : $this->nama" . PHP_EOL;
        echo "Harga : $this->harga" . PHP_EOL;
    }
}