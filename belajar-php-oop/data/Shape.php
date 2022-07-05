<?php

namespace Data;

class Shape {
    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape {
    public function getCorner()
    {
        return 10;
    }

    public function getParentCorner()
    {
        // return $this->getCorner(); // ini akses di child-nya
        return parent::getCorner(); // ini akses parent-nya
    }

}