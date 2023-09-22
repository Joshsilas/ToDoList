<?php

namespace App\ViewHelpers;

class ToDoListViewHelper
{
    public static function displayToDoInAList(array $tasks): string
    {
        $output = '';
        foreach ($tasks as $task) {
            $output .=
                '<div class="form-check container text center">
                    <form method="POST" action="/completeTask">
                    <input type="hidden" value="'. $task->getId() . '" name="id">
                        <input class="btn btn-success mt-1" type="submit" value="Complete?" >
                        <label class="form-check-label">' . $task->getTask() . '
                    </form>
                 </div>';
        }
        return $output;
    }
}

