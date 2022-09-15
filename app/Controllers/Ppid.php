<?php

namespace App\Controllers;
use CodeIgniter\Controller;


use App\Controllers\BaseController;

class Ppid extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
	
    public function index()
    {
		echo view('template/header');
		echo view('ppid/profil');
		echo view("template/footer");
		echo view("template/js");
    }
	
	public function regulation()
    {
		echo view('template/header');
		echo view('ppid/regulasi');
		echo view("template/footer");
		echo view("template/js");
    }
	
	public function information()
    {
		echo view('template/header');
		echo view('ppid/informasi');
		echo view("template/footer");
		echo view("template/js");
    }
	
	public function procedure()
    {
		echo view('template/header');
		echo view('ppid/procedure');
		echo view("template/footer");
		echo view("template/js");
    }
	
	public function register()
    {
		echo view('template/header');
		echo view('ppid/register');
		echo view("template/footer");
		echo view("template/js");
    }
}
