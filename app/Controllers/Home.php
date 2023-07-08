<?php

namespace App\Controllers;

class Home extends BaseControllers
{
    public function index(): void
    {
        $this->view("globals/header");
        $this->view("index");
        $this->view("globals/footer");
<<<<<<< HEAD
        $this->view("components/modal/add");
        $this->view("components/modal/delet");
        $this->view("components/modal/details");
        $this->view("components/modal/edit");
=======
        $this->view("components/modals/add");
        $this->view("components/modals/delete");
        $this->view("components/modals/details");
        $this->view("components/modals/edit");
>>>>>>> ac0915f62c1383f72d63d231d76b2bfb7e5f43f6
    }
}
