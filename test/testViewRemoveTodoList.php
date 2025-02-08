<?php

require_once "./model/todolist.php";
require_once "./view/viewRemoveTodoList.php";
require_once "./businesslogic/addtodolist.php";
require_once "./businesslogic/showtodolist.php";

addTodoList("Aldi");
addTodoList("Maulana");
addTodoList("Kuningan");

showTodoList();

viewRemoveTodoList();

showTodoList();

viewRemoveTodoList();

showTodoList();
?>