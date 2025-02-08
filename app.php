<?php

require_once "model/todolist.php";
require_once "businesslogic/showtodolist.php";
require_once "businesslogic/addtodolist.php";
require_once "businesslogic/removetodolist.php";
require_once "view/viewShowTodoList.php";
require_once "view/viewAddTodoList.php";
require_once "view/viewRemoveTodoList.php";
require_once "helper/input.php";

echo "Aplikasi to doo list" .PHP_EOL;

viewShowTodoList();
?>