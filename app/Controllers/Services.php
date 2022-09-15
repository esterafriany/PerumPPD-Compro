<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Controllers\BaseController;

class Services extends BaseController
{

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
	
	public function jac()
    {
		echo view('template/header');
		echo view('services/jac');
		echo view("template/footer");
		echo view("template/js");
    }
	
	public function jrc()
    {
		echo view('template/header');
		echo view('services/jrc');
		echo view("template/footer");
		echo view("template/js");
    }
	
	public function wisata()
    {
		echo view('template/header');
		echo view('services/wisata');
		echo view("template/footer");
		echo view("template/js");
    }
	
	public function employee()
    {
		echo view('template/header');
		echo view('services/employee');
		echo view("template/footer");
		echo view("template/js");
    }
	
	public function ads()
    {
		echo view('template/header');
		echo view('services/ads');
		echo view("template/footer");
		echo view("template/js");
    }

	public function redeem_coupon()
    {
		echo view('template/header');
		echo view('services/coupon');
		echo view("template/footer");
		echo view("template/js");
    }
}
