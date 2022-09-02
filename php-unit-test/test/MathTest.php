<?php

namespace pzn\Test;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase {
    

    // Jika tidak pake @dataProvider, maka function dibawah ini dianggap menjadi 1 test
    public function testManual() {
        self::assertEquals(10, Math::sum([5,5]));
        self::assertEquals(20, Math::sum([4,4,4,4,4]));
        self::assertEquals(9, Math::sum([3,3,3]));
        self::assertEquals(0, Math::sum([0]));
        self::assertEquals(2, Math::sum([2]));
        self::assertEquals(4, Math::sum([2,2]));
    }



    // Dengan menggunakan annotation @dataProvider, maka akan dianggap sebanyak 6 test karena datanya ada 6. Dan jika ada 1 data yang gagal, maka akan diberitahu data ke berapa yang gagal
    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected) {
        self::assertEquals($expected, Math::sum($values));
    }


    public function mathSumData(): array {
        return [
            [[5,5], 10],
            [[4,4,4,4,4], 20],
            [[3,3,3], 9],
            [[], 0],
            [[2], 2],
            [[2,2], 5],
        ];
    }


    // Kalo data yang sederhana bisa pake @testWith
    /**
     * @testWith [[5,5], 10]
     *           [[3,3,3], 9]
     *           [[3,3], 6]
     */
    public function testWith(array $values, int $expected) {
        self::assertEquals($expected, Math::sum($values));
    }
}
