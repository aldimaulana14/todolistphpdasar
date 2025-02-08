<?php

require_once "./model/todolist.php";
require_once "./businesslogic/addtodolist.php";

addTodoList("Makan Ayam");
addTodoList("Makan Anggur");
addTodoList("Makan Buah-buahan");

var_dump($todolist);

?>