<?php

namespace App\Controllers;
use CodeIgniter\Controller;


use App\Controllers\BaseController;

class Company extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
	
    public function index()
    {
		  return view('welcome_message');
    }
	
	public function history()
    {
		echo view('template/header');
		echo view('company/history');
		echo view("template/footer");
    }
	
	public function culture()
    {
		echo view('template/header');
		echo view('company/culture');
		echo view("template/footer");
		echo view("template/js");
    }
	
	public function visi_misi()
    {
		echo view('template/header');
		echo view('company/vision_mission');
		echo view("template/footer");
    }
	
	public function dewas_direksi()
    {
		echo view('template/header');
		echo view('company/dewas_direksi');
		echo view("template/footer");
		echo view("template/js");
    }
	
	public function struktur_organisasi()
    {
		echo view('template/header');
		echo view('company/struktur_organisasi');
		echo view("template/footer");
    }
	
	public function gcg()
    {
		echo view('template/header');
		echo view('company/gcg');
		echo view("template/footer");
		echo view("template/js");
    }
	public function penghargaan()
    {
		echo view('template/header');
		echo view('company/penghargaan');
		echo view("template/footer");
		echo view("template/js");
    }
}
