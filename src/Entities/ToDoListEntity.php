<?php

namespace App\Entities;

class ToDoListEntity implements \JsonSerializable
{
    private int $id;
    private string $task;

    public function getTask(): string
    {
        return $this->task;
    }


    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "task" => $this->task,
        ];
    }
}