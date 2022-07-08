<?php

    namespace PZN\Data;

    class People
    {
        public function __construct(private string $name)
        {
            
        }

        // $this->name mengacu pada function __construct
        public function sayHello(string $name)
        {
            echo "Hello $name, my name is $this->name";
        }
    }