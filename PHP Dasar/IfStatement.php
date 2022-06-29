<?php

$nilai = 10;
$absen = 90;


if ($nilai >= 80 and $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70)
    echo "Nilai Anda B " . PHP_EOL;
else {
    echo "Nilai Anda E " . PHP_EOL;
}

if ($nilai >= 80 and $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B " . PHP_EOL;
else :
    echo "Nilai Anda E " . PHP_EOL;
endif;