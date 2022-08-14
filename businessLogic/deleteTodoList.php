<?php

/**
 * ini menghapus item di todo list
 */

function deleteTodoList(int $number){
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i=$number; $i < sizeof($todoList); $i++) { 
        $todoList[$i] = $todoList[$i+1];
    }

    unset($todoList[sizeof($todoList)]);
    return true;
}