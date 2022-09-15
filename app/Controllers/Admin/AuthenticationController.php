<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\Users;

class AuthenticationController extends BaseController
{
    private $session;

	public function __construct()
    {
        $this->UsersModel = new Users();
        session()->start();
    }

    public function index(){
        $this->session = \Config\Services::session();

		helper(['form']);
        if (empty(session()->get('email'))) {
			echo view('admin/authentication/login');
        } else {
            return redirect('get-dashboards');
        }
    }
	
	public function login()
    {
		$session = session();
		
		$email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $passdecryt = md5($password);
		
		$data = $this->UsersModel->login($email, $passdecryt);
        
		if($data){
			$ses_data = [
				'id'            => $data['id'],
				'name'          => $data['username'],
				'email'         => $data['email'],
				'isLoggedIn'    => TRUE
			];
           
			$session->set($ses_data);
            
			return redirect('get-dashboards');
			
        }else{
            $session->setFlashdata('msg', 'User tidak ditemukan. Periksa kembali email dan password Anda.');
			return redirect()->to(base_url('/'));
        }
    }
	
	function logout()
    {
        $session = session();
        session()->destroy();
		
        return redirect()->to(base_url('/dashboard-admin'));
    }
	
}
