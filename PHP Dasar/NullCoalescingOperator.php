<?php

    // Teknik yang biasanya untuk mengecheck apakah sebuah data ada atau tidak, dan juga apakah data tersebut isinya null atau bukan bisa menggunakan if statement dengan function isset($variable)

    $data = ["action" => "Create"];

    if (isset($data['action'])) {
        $action = $data['action'];
    } else {
        $action = 'nothing';
    }

    echo $action . PHP_EOL;

    // Kode diatas bisa dipersingkat dengan konsep Null Coalescing Operator

    $data = [];
    $action = $data['action'] ?? 'nothing';
    echo $action;