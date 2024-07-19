<?php

require_once "/View/ViewAddTodolist.php";
require_once "/BusinessLogic/ShowTodolist.php";
require_once "/BusinessLogic/AddTodolist.php";

addTodolist("Nayla");
addTodolist("Nur");
addTodolist("Padilah");

viewAddTodolist();

showTodolist();

viewAddTodolist();

showTodolist();
?>
