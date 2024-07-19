<?php

require_once "../Model/Todolist.php";
require_once "../View/ViewRemoveTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";

addTodolist("Nayla");
addTodolist("Nur");
addTodolist("Padilah");
addTodolist("Programmer");
addTodolist("Pemula");

showTodolist();

ViewRemoveTodolist();

showTodolist();