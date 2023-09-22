<?php

namespace App\Entities;

class ToDoListEntity implements \JsonSerializable
{
    private int $id;
    private string $task;
    private bool $completed;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTask(): string
    {
        return $this->task;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }


    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "task" => $this->task,
            "completed" => $this->completed,
        ];
    }
}