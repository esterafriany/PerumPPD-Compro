<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Controllers\BaseController;

class Sbu extends BaseController
{

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
	
	public function transjabodetabek()
    {
		echo view('template/header');
		echo view('sbu/tjb');
    }
	
	public function transbusway()
    {
		echo view('template/header');
		echo view('sbu/tbw');
    }
	
	public function mac()
    {
		echo view('template/header');
		echo view('sbu/mac');
    }
	
	public function aslog()
    {
		echo view('template/header');
		echo view('sbu/aslog');
    }
	
	public function pariwisata()
    {
		echo view('template/header');
		echo view('sbu/pariwisata');
    }
	
	public function bus_maintenance()
    {
		echo view('template/header');
		echo view('sbu/bus_maintenance');
    }

}
