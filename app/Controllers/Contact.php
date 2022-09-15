<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view("contact/contact");
		echo view("template/footer");
		echo view("template/js");
    }
}
