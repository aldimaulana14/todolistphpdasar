<?php

require_once "./model/todolist.php";
require_once "./helper/input.php";
require_once "./businesslogic/addtodolist.php";

function viewAddTodoList(){
    echo "Menambah TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x"){
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }

}
?>