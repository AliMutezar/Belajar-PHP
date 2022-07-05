<?php

    namespace Data;

    // by default interface dan seluruh function-nya menjadi abstract
    // interface support multiple inheritance (menggunakan keyword implent)
    // seluruh function parent-nya harus di implementasikan di dalam child-nya


    interface hasBrand
    {
        public function getBrand(): string;
    }

    interface isMaintenance
    {
        public function isMaintenance(): bool;
    }

    interface Car extends hasBrand, isMaintenance
    {
        function Drive(): void;
        function getTire(): int;
    }

    class Avanza implements Car
    {
        public function Drive(): void
        {
            echo "Drive Avanza" . PHP_EOL;
        }

        public function getTire(): int
        {
            return 4;
        }

        public function getBrand(): string
        {
            return "Toyota";
        }

        public function isMaintenance(): bool
        {
            return false;
        }
    }