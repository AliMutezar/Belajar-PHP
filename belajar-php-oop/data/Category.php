<?php

class Category 
{
    private $name;
    private bool $expensive;

    // Untuk ngambil data properties
    public function getName():string
    {
        return $this->name;
    }

    // Untuk mengubah data properties
    public function setName(string $name):void
    {
        if(trim($name) != "") {
            $this->name = $name;
        }
    }



    // Untuk ngambil data properties
    public function isExpensive():bool
    {
        return $this->expensive;
    }

    
    // Untuk mengubah data properties
    public function setExpensive(string $expensive):void
    {
        $this->expensive = $expensive;
    }
}