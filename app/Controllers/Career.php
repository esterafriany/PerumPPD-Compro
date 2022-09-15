<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Career extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view("career/career");
        echo view("template/footer");
        //echo view("template/js");
    }
}
