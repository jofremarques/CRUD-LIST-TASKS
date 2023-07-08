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
                "title" => "Home"
            ]
        ];
    }

    public function load(array $request): object
    {
        $paths = explode($this->baseUri, $request['REQUEST_URI']);
        $uriCurrent = count($paths) > 1 ? $paths[1] : $paths[0];
        $route = array_search($uriCurrent, ['/', 'index']) !== false ?
            $this->routes['index'] : $this->routes[$uriCurrent];

        $controller = $route->controller;
        $method = $route->method;

        include(__DIR__ . "/../Controllers/$controller.php");
        $controller = "App\Controllers\\" . $controller;
        $class = new $controller();
        $class->$method();
        $route->view = $class->html;

        return $route;
    }
}
