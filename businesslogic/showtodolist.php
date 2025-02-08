<?php

// Tampil todo ke list
function showTodoList(){
    global $todolist;

    echo "TODOLIST\n";

    foreach($todolist as $number => $value){
        echo "$number. $value" . PHP_EOL;
    }
}
?>