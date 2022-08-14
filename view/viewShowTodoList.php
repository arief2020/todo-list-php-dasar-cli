<?php
require_once __DIR__ . "/../model/todoList.php";
require_once __DIR__ . "/../businessLogic/showTodoList.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../view/viewAddTodoList.php";
require_once __DIR__ . "/../view/viewDeleteTodoList.php";

function viewShowTodoList(){

    while(true){

        showTodoList();
    
        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "3. Keluar" . PHP_EOL;
        
        $pilihan = input("Pilih");
    
        if ($pilihan == "1") {
            viewAddTodoList();
        }elseif ($pilihan == "2") {
            viewDeleteTodoList();
        }elseif($pilihan == "3"){
            break;
        }else{
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi ...";
}