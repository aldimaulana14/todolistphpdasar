<?php

require_once "./model/todolist.php";
require_once "./businesslogic/showtodolist.php";
require_once "./businesslogic/addtodolist.php";
require_once "./businesslogic/removetodolist.php";

addTodoList("Aldi");
addTodoList("Maulana");
addTodoList("Kuningan");
addTodoList("Jawa Barat");
addTodoList("Indonesia");

showTodoList();

removeTodoList(3);

showTodoList();

$success = removeTodoList(5);
var_dump($success);

showTodoList();

?>