<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Faq extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view("faq/faq");
		echo view("template/footer");
		//echo view("template/js");
    }
}
