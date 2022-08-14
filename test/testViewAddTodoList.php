<?php

require_once "../businessLogic/addTodoList.php";
require_once "../businessLogic/showTodoList.php";
require_once "../view/viewAddTodoList.php";

addTodoList("Eko");
addTodoList("Muhammad");
addTodoList("Syaifullah");
addTodoList("Al Arief");


viewAddTodoList();
showTodoList();

viewAddTodoList();
showTodoList();