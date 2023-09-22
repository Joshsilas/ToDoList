<?php

namespace App\Models;


use App\Controllers\ToDoListController;
use App\Entities\ToDoListEntity;

class ToDoListModel
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getToDoList()
    {
        $query = $this->db->prepare('SELECT `id`, `task` FROM `todoList` WHERE `completed` = 0');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, ToDoListEntity::class);
        return $query->fetchAll();
    }

    public function addTodoList(string $task): bool
    {
        $query = $this->db->prepare('INSERT INTO `todoList` (`task`) VALUES (?)');
        return $query->execute([$task]);
    }

    public function completeTask(int $taskId): bool
    {
        $query = $this->db->prepare('UPDATE `todoList` SET `completed` = 1 WHERE `id` = ?');
        return $query->execute([$taskId]);
    }

    public function getCompletedToDoList()
    {
        $query = $this->db->prepare('SELECT `id`, `task` FROM `todoList` WHERE `completed` = 1');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, ToDoListEntity::class);
        return $query->fetchAll();
    }

}