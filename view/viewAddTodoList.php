<?php
require_once __DIR__ . "/../model/todoList.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../businessLogic/addTodoList.php";


function viewAddTodoList() {
    echo "Menambah todo :" . PHP_EOL;

    $todo = input("Todo [x untuk batal] : ");

    if ($todo == "x") {
        echo "Batal menambah Todo" . PHP_EOL;
    } else {
        addTodoList($todo);   
    }
}