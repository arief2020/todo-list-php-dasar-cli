<?php
require_once "../model/todoList.php";
require_once "../businessLogic/addTodoList.php";

addTodoList("Eko");
addTodoList("Muhammad");
addTodoList("Syaifullah");
addTodoList("Al Arief");

var_dump($todoList);