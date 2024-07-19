<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/AddTodolist.php";
require_once "BusinessLogic/RemoveTodolist.php";
require_once "BusinessLogic/ShowTodolist.php";

addTodolist("Nayla");
addTodolist("Nur");
addTodolist("Padilah");
addTodolist("Yasmin");
addTodolist("Ida");

showTodolist();

removeTodoList(3);

showTodolist();

removeTodoList(2);

showTodolist();

$succsess = removeTodoList(4);
var_dump($success);

showTodolist();