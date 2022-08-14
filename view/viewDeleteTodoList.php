<?php
require_once __DIR__ . "/../businessLogic/deleteTodoList.php";
require_once __DIR__ . "/../helper/input.php";

function viewDeleteTodoList () {
    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("Nomor [x untuk batal]");

    if ($pilihan == "x") {
        echo "batal menghapus Todo";
    }else{
        $success = deleteTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus Todo  nomor $pilihan" . PHP_EOL;
        }else{
            echo "Gagal menghapus Todo  nomor $pilihan" . PHP_EOL;

        }
    }
}