<?php

namespace App\Controllers;

class Home extends BaseControllers
{
    public function index(): void
    {
        $this->view("globals/header");
        $this->view("index");
        $this->view("globals/footer");
        $this->view("components/modals/add");
        $this->view("components/modals/delete");
        $this->view("components/modals/details");
        $this->view("components/modals/edit");
    }
}
