<?php

namespace App\Controllers;

class Home extends BaseControllers
{
    public function index(): void
    {

        $this->view("/index");
        $this->view("/globals/footer");
    }
}
