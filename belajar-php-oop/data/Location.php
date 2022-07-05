<?php

    namespace Data;

    // Class abstract tidak bisa dibuat objek
    abstract class Location
    {
        public string $name;
    }

    class City extends Location
    {

    }

    class Province extends Location
    {

    }

    class Country extends Location
    {
        
    }