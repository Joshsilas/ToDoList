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
        $query = $this->db->prepare('SELECT `id`, `task` FROM `todoList`');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, ToDoListEntity::class);
        return $query->fetchAll();
    }

}