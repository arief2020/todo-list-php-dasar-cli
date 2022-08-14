<?php
require_once "../model/todoList.php";
require_once "../businessLogic/showTodoList.php";
require_once "../businessLogic/addTodoList.php";
require_once "../businessLogic/deleteTodoList.php";

addTodoList("Muhammad");
addTodoList("Syaifullah");
addTodoList("ganteng");
addTodoList("Al Arief");

showTodoList();

deleteTodoList(2);

showTodoList();
deleteTodoList(2);

showTodoList();

$success = deleteTodoList(4);
var_dump($success);
showTodoList();