<?php
    /**
     * menambah Todo di List
     */
    function addTodolist(string $todo)
    {
        global $todoList;

        $number = sizeof($todoList) + 1;

        $todoList[$number] = $todo;
    }
    ?>