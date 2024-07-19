<?php

require_once  "Model/Todolist.php";
require_once "BusinessLogic/AddTodolist.php";


addTodolist("Nayla");
addTodolist("Nur");
addTodolist("Padilah");


var_dump($todoList);