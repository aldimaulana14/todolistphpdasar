<?php

require_once "./helper/input.php";
require_once "./businesslogic/removetodolist.php";

function viewRemoveTodoList(){
    
    echo "Menghapus TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");

    if($pilihan == "x"){
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if($success){
            echo "Sukses menghapus todo nomor $pilihan " . PHP_EOL;
        } else {
            echo "Batal menghapus todo nomor $pilihan" .PHP_EOL;
        }
    }
}
?>