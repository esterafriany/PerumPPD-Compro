<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Controllers\BaseController;

class Publication extends BaseController
{

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
	
	public function news()
    {
		echo view('template/header');
		echo view('publication/news');
		echo view("template/footer");
    }
	
	public function gallery()
    {
		echo view('template/header');
		echo view('publication/gallery');
		echo view("template/footer");
    }
	
	public function news1()
    {
		echo view('template/header');
		echo view('publication/news1');
		echo view("template/footer");
    }
	public function news2()
    {
		echo view('template/header');
		echo view('publication/news2');
		echo view("template/footer");
    }
	public function news3()
    {
		echo view('template/header');
		echo view('publication/news3');
		echo view("template/footer");
    }
	
	public function news4()
    {
		echo view('template/header');
		echo view('publication/news4');
		echo view("template/footer");
    }
}
