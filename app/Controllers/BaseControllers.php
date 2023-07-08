<?php

namespace App\Controllers;

abstract class BaseControllers
{
    public string $html = "";

    public function view(String $pathView, ?array $data = []): void
    {
        $extension = explode(".", $pathView);
        $context = stream_context_create($data);

        if (count($extension) < 2) $pathView = "$pathView.php";

        $this->html .= file_get_contents("app/Views/$pathView", true, $context);
    }
}
