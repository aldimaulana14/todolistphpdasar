<?php

require_once "./view/viewShowTodoList.php";
require_once "./businesslogic/addtodolist.php";

addTodoList("Shalat Shubuh");
addTodoList("Sarapan");
addTodoList("Mandi");

viewShowTodoList();

?>