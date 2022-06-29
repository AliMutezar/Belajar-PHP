<?php
    echo "Decimal : ";
    var_dump(1234);

    echo "Octal : ";
    var_dump(01234);

    echo "Hexadecimal : ";
    var_dump(0x1C);

    echo "Binary : ";
    var_dump(0b0011);

    // Mempermudah dibaca angkanya
    echo "Underscore in number : ";
    var_dump(1_231_432_448_9687);

    echo "Floating Point :";
    var_dump(12.4);

    echo "Floating Point dengan E notation Plus (1.7 x 1.000) :";
    var_dump(1.7e3);

    echo "Floating Point dengan E notation Plus (1.5 x 0,001) :";
    var_dump(1.5e-3);

    echo "Floating Point dengan E notation Plus (1.5 x 0,001) :";
    var_dump(1_555.1234);


    // Note:
    //     Secara default, kapasitas integer di PHP ada batasnya, 2.147.483.647 untuk sistem operasi 32 bit,
    //     dan 9.223.372.036.854.775.807 untuk sistem operasi 64 bit.

    //     Jika kita membuat integer yang melebihi nilai tersebut, maka otomatis tipe
    //     numbernya akan berubah menjadi floating point

    echo "Integer Overflow 64 bit : ";
    var_dump(9223372036854775807);

    echo "Integer Overflow 64 bit : ";
    var_dump(9223372036854775808);
