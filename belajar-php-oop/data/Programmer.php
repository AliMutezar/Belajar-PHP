<?php

class Programmer
{
    public string $name;
    public function __construct(string $name)
    {
        echo $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
    // Class Company punya properties $progammer dengan type-nya Programmer dari parent
    // Polymorphism adalah kemampuan untuk berubah bentuk terhadap class-class turunannya (Backend & Frontend)
    public Programmer $programmer;
}



// intanceof digunakan untuk check apakah sebuah objek memiliki tipe data class tertentu atau bukan, jika sesuai return-nya true

// untuk check tipe data bukan objeck bisa pake is_string dll, kalo check tipe data objek bisa gunakan instanceof
function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}