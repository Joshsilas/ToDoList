<?php

namespace App\ViewHelpers;

class CompletedTasksViewHelper
{
    public static function displayDoneInAList(array $tasks): string
    {
        $output = '';
        foreach ($tasks as $task) {
            $output .= '<li>' . $task->getTask() . '</li>';
        }
        return $output;
    }
}