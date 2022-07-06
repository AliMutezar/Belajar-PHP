<?php

    // cara yg biasa
    // Anonymous class memiliki kemampuan untuk mendeklarasikan class, sekaligus menginstansiasi object-nya

    interface HelloWorld
    {
        function sayHello(): void;
    }

    // class SampleHello implements HelloWorld
    // {
    //     public function sayHello(): void
    //     {
    //         echo "Hello" . PHP_EOL;
    //     }
    // }

    // $sample = new SampleHello();
    // $sample->sayHello();


    // Jika kasusnya sederhana seperti diatas, kita bisa ganti dengan anonymous class, jadi tidak perlu buat childnya dan objec-nya langsung bisa menggunakan anonymous class

    // di dalam anonymous kita juga bisa tambahkan construct
    $helloWorld = new class("Ali") implements HelloWorld {
        public string $name;


        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function sayHello(): void
        {
            echo "Hello $this->name" . PHP_EOL;
        }
    };

    $helloWorld->sayHello();
