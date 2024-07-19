<?php

/** */
/*menampilkan todo di list*/
/** */
function showTodolist()
{
global $todoList;
echo "TODOLIST" . PHP_EOL;
foreach ($todoList as $number => $value){
    echo "$number. $value". PHP_EOL;
}
}