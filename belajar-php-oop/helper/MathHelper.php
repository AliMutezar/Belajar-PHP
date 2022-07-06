<?php

// Untuk mengakses properties static, tidak bisa menggunakan object tapi menggunakan class
// Function static bisa langsung diakses dari class-nya tanpa harus membuat object-nya dan otomatis tidak bisa memanggil function lain yg bukan static

namespace Helper;
class MathHelper
{
    static public string $name = "Math Helper";

    static public function sum(int...$numbers):int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;

    }
}


