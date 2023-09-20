<?php

namespace App\ViewHelpers;

class ToDoListViewHelper
{
    public static function displayToDoInAList(array $tasks): string
    {
        $output = '';
        foreach ($tasks as $task) {
            $output .= '<li>' . $task->getTask() . '</li>';
        }
        return $output;
    }
}