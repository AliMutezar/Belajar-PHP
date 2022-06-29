<?php

    // Jika hanya perbandingan ==, lebih baik menggunakan switch daripada if

    $nilai = "E";

    // if ($nilai == "A") {
    //     echo "Anda lulus dengan sangat baik" . PHP_EOL;
    // } else if ($nilai == "B" || $nilai == "C") {
    //     echo "Anda lulus" . PHP_EOL;
    // } else if ($nilai == "D") {
    //     echo "Anda tidak lulus" . PHP_EOL;
    // } else {
    //     echo "Mungkin anda salah jurusan" . PHP_EOL;
    // }

    switch($nilai) {
        case "A" :
            echo "Anda lulus dengan sangat baik" . PHP_EOL;
            break;
        case "B" :
        case "C" :
            echo "Anda lulus" . PHP_EOL;
            break;
        case "D" :
            echo "Anda tidak lulus" . PHP_EOL;
            break;
        default:
            echo "Mungkin anda salah jurusan" . PHP_EOL;
    }

    switch($nilai) :
        case "A" :
            echo "Anda lulus dengan sangat baik" . PHP_EOL;
            break;
        case "B" :
        case "C" :
            echo "Anda lulus" . PHP_EOL;
            break;
        case "D" :
            echo "Anda tidak lulus" . PHP_EOL;
            break;
        default:
            echo "Mungkin anda salah jurusan" . PHP_EOL;
    endswitch;