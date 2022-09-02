<?php

    namespace pzn\Test;

    use PHPUnit\Framework\Assert;
    use PHPUnit\Framework\TestCase;

    class CounterTest extends TestCase {
        public function testCounter() {
            $counter = new counter();
            $counter->increment();
            Assert::assertEquals(1, $counter->getCounter());


            // Cara lain untuk memanggil class Assert
            $counter->increment();
            $this->assertEquals(2, $counter->getCounter());

            $counter->increment();
            self::assertEquals(3, $counter->getCounter());
        }



        // Kalo nama function-nya tidak ada kata kata test seperti function 'testCounter', jika function dibawah ini ingin di eksekusi maka harus ditambahkan @test

        /**
         * @test
         */
        public function increment() {
            $counter = new counter();
            
            $counter->increment();
            self::assertEquals(1, $counter->getCounter());
        }



        public function testFirst(): Counter {
            $counter = new counter();

            $counter->increment();
            $counter->increment();
            $this->assertEquals(2, $counter->getCounter());
            return $counter;
        }


        // Tidak disarankan untuk menggunakan @depends, karena baiknya unit test harus independen

        /**
         * @depends testFirst
         */
        public function testSecond(Counter $counter): void {
            $counter->increment();
            $this->assertEquals(3, $counter->getCounter());
        }

       
    }