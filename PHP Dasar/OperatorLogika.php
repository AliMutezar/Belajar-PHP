<?php
    // $a xor $b       true jika $a dan $b salah satu true, tapi tidak keduanya
    // Kalo keduanya keduanya true maka nilainya menjadi false

    var_dump(true && true);
    var_dump(true and false);

    var_dump(true || true);
    var_dump(true or false);

    var_dump(true xor false);
    var_dump(true xor true);
    var_dump(false xor false);

    var_dump(!false);