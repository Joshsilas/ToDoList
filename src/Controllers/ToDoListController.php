<?php

namespace App\Controllers;

use App\Models\ToDoListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class ToDoListController
{

    private ToDoListModel $model;
    private PhpRenderer $views;

    public function __construct(ToDoListModel $model, PhpRenderer $views)
    {
        {
            $this->model = $model;
            $this->views = $views;
        }
    }
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $toDoList = $this->model->getToDoList();
        return $this->views->render($response, 'index.php', ['tasks' => $toDoList]);
    }
}