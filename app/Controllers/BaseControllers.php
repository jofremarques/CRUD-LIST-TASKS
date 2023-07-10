<?php

namespace App\Controllers;

abstract class BaseControllers
{
    public string $html = "";
    public string $response = "";

    public function view(String $pathView, ?array $data = []): void
    {
        $extension = explode(".", $pathView);
        $context = stream_context_create($data);

        if (count($extension) < 2) $pathView = "$pathView.php";

        $this->html .= file_get_contents("app/Views/$pathView", true, $context);
    }

    public function response(Object|Array $response, Int $status =  200): String
    {
        $http = array(
            200 => 'HTTP/1.1 200 OK',
            201 => 'HTTP/1.1 201 Created',
            400 => 'HTTP/1.1 400 Bad Request',
            406 => 'HTTP/1.1 406 Not Acceptable',
            500 => 'HTTP/1.1 500 Internal Server Error',
        );

        header($http[$status]);
        header("Content-Type: application/json");
     
        echo json_encode($response);
        die();
    }
}
