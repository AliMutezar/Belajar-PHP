<?php


// Jika kita bener-bener butuh 2 class dengan nama yg sama, kita bisa taro di namespace
// namespace digunakan untuk menyimpan class, bukan file

namespace Data\one 
{
    class conflict
    {
    
    }

    class sample 
    {

    }

    class dummy
    {

    }
}

namespace Data\two 
{
    class conflict 
    {
    
    }
}