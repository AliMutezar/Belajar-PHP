<?php

/**
 * Menambah todo ke list
 */

function addTodolist(string $todo) {

    global $todoList; // akses dulu global variable todolistnya 
    $number = sizeof($todoList) + 1; // ambil size array todoList kemudian + 1 untuk menambahkan todolist pada index berikutnya dari index terkahir
    $todoList[$number] = $todo; // masukin todolist ke index terakhir yg diambil dari variable $todo
}
