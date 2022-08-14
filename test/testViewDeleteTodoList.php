<?php

require_once "../model/todoList.php";
require_once "../businessLogic/showTodoList.php";
require_once "../businessLogic/addTodoList.php";
require_once "../businessLogic/deleteTodoList.php";
require_once "../view/viewDeleteTodoList.php";

addTodoList("Eko");
addTodoList("Muhammad");
addTodoList("Syaifullah");
addTodoList("Al Arief");

showTodoList();

viewDeleteTodoList();

showTodoList();