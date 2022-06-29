<?php

/**
 * Menghapus todo di list
 */
function removeTodoList(int $number): bool
{
    global $todoList; // akses global variabel
    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) { 
        
        // Data pada index ke 2, di geser ke index 1
        $todoList[$i] = $todoList[$i + 1];
    }

    // hapus index terakhir, karena kan kosong datanya
    unset($todoList[sizeof($todoList)]);
    return true;
}
