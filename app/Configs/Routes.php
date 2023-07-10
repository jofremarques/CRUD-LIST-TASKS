<?php

namespace App\Configs;

class Routes
{
    protected string $baseUri = '/tasksProjects';
    protected array $routes = [];

    public function __construct()
    {
        $this->routes = [
            "index" => (object)[
                "controller" => "Home",
                "method" => "index",
                "title" => "Home",
                "method_request" => 'GET',
                "path" => "/index"
            ],
            "postTask" => (object)[
                "controller" => "Api/Task/Post/PostController",
                "method" => "handle",
                "title" => "api",
                "method_request" => 'POST',
                "path" => "/api/task"
            ],
            "deleteTask" => (object)[
                "controller" => "Api/Task/Delete/DeleteController",
                "method" => "handle",
                "title" => "api",
                "method_request" => 'DELETE',
                "path" => "/api/task"
            ],
            "getTask" => (object)[
                "controller" => "Api/Task/Get/GetController",
                "method" => "handle",
                "title" => "api",
                "method_request" => 'GET',
                "path" => "/api/task"
            ],
            "putTask" => (object)[
                "controller" => "Api/Task/Put/PutController",
                "method" => "handle",
                "title" => "api",
                "method_request" => 'PUT',
                "path" => "/api/task"
            ],
        ];
    }

    public function load(array $request): object
    {
        $paths = explode($this->baseUri, $request['REQUEST_URI']);
        $uriCurrent = count($paths) > 1 ? $paths[1] : $paths[0];

        foreach ($this->routes as $route) {
            $route = array_search($uriCurrent, ['/', 'index']) !== false ?
                $this->routes['index'] :  $route;

            $controller = $route->controller;
            $method = $route->method;

            if (
                $_SERVER['REQUEST_METHOD'] != $route->method_request ||
                $uriCurrent != $route->path && array_search($uriCurrent, ['/', 'index']) === false
            ) continue;

            include(__DIR__ . "/../Controllers/$controller.php");
            $controller = "App\Controllers\\" . str_replace("/", "\\", $controller);
            $class = new $controller();
            $class->$method();
            $route->view = $class->html;

            return $route;
        }
    }
}
