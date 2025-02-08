<?php

require_once "./view/viewAddTodoList.php";
require_once "./businesslogic/showtodolist.php";
require_once "./businesslogic/addtodolist.php";

addTodoList("Aldi");
addTodoList("Maulana");

viewAddTodoList();

showTodoList();

?>