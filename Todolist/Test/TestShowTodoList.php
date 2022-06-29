<?php

// Bikin unit test bisa membuat kita menghemat waktu tanpa harus mengetes codingan secara manual
require_once '../Model/TodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';

$todoList[1] = "Belajar PHP Dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP Database";

showTodoList();