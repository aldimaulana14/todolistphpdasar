<?php

require_once "./model/todolist.php";
require_once "./businesslogic/showtodolist.php";
require_once "./view/viewAddTodoList.php";
require_once "./view/viewRemoveTodoList.php";
require_once "./helper/input.php";

function viewShowTodoList(){
   while (true){
    showTodoList();

    echo "MENU" .PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $pilihan = input("Pilih");

    if($pilihan == "1"){
        viewAddTodoList();
    } elseif ($pilihan == "2"){
        viewRemoveTodoList();
    } elseif ($pilihan == "x") {
        break;
    } else {
        echo "Pilihan tidak ada";
    }
   }

   echo "Sampai Jumlah lagi";


}
?>