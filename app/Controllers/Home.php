<?php

namespace App\Controllers;

class Home extends BaseControllers
{
    public function index(): void
    {
        $this->view("/globals/header");
        $this->view("/index");
        $this->view("/globals/footer");
        $this->view("/components/modal/add");
        $this->view("/components/modal/delet");
        $this->view("/components/modal/details");
        $this->view("/components/modal/edit");
    }
}
