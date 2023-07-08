<?php

namespace App\Configs;

include(__DIR__ . '/Constants.php');
include(__DIR__ . '/Config.php');

class App
{
    public function init()
    {
        $config = new Config();

        foreach ($config->files as $file) {
            include(__DIR__ . "/$file.php");
        }

        $routes = new Routes();
        $route = $routes->load($_SERVER);

        return [
            "title" => $route->title,
            "view" => $route->view
        ];
    }
}
