<?php

namespace App\Factories;

class PdoFactory
{
    public function __invoke(): \PDO
    {
        $db = new \PDO('mysql:host=DB;dbname=ToDoList', 'root', 'password');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    }
}