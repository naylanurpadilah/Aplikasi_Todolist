<?php

require_once "../Model/Todolist.php";
require_once "../Helper/Input.php";
require_once "../BusinessLogic/AddTodolist.php";

function viewAddTodolist()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input ("Todo (x untuk batal): ");

    if ($todo == "x"){
        echo "Batal menambah Todo ";
    } else {
        addTodolist($todo);
        }
}


?>