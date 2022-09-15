<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use Illuminate\Http\Request;

//Model

class DashboardController extends BaseController
{
    function __construct(){
        helper(['form', 'url']);
    
    }

    public function index()
    {
        $data = [
            'title'=>'title here',
            'content'=>'admin/dashboard/index',
		];

        echo view('admin/template/dashboard_template',$data);
    }
}
