<?php

namespace your_app_name\Controllers;

use your_app_name\Controllers\BaseController;
use your_app_name\Models\Users;

class Main extends BaseController
{
    public function index()
    {
        $model   = new Users();
        $results = $model->get_total_users();

        printData($results);

        $this->view('layouts/header');
        $this->view('home');
        $this->view('layouts/footer');
    }
}
