<?php

require_once "../view/viewShowTodoList.php";
require_once "../businessLogic/addTodoList.php";

addTodoList("Eko");
addTodoList("Muhammad");
addTodoList("Syaifullah");
addTodoList("Al Arief");

viewShowTodoList();