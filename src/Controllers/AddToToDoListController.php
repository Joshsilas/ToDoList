<?php

namespace App\Controllers;

use App\Models\ToDoListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class AddToToDoListController
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
            $data = $request->getParsedBody();
            if (!empty($data['task'])) {
            $this->model->addTodoList($data['task']);
    }
        return $response->withStatus(302)->withHeader('Location', '/');
    }
}
