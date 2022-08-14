<?php
require_once __DIR__ . "/model/todoList.php";
require_once __DIR__ . "/businessLogic/addTodoList.php";
require_once __DIR__ . "/businessLogic/showTodoList.php";
require_once __DIR__ . "/businessLogic/deleteTodoList.php";
require_once __DIR__ . "/view/viewShowTodoList.php";
require_once __DIR__ . "/view/viewAddTodoList.php";
require_once __DIR__ . "/view/viewDeleteTodoList.php";
require_once __DIR__ . "/helper/input.php";

echo "Aplikasi Todo List" . PHP_EOL;

viewShowTodoList();