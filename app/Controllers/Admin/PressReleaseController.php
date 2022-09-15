<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use Illuminate\Http\Request;

//Model
class PressReleaseController extends BaseController
{
    function __construct(){
        helper(['form', 'url']);
    
    }

    public function index(){
      $data = [
          'title'=>'Data Press Release',
          'content'=>'admin/press_release/index'
      ];
          
		  echo view('admin/template/template',$data);
    }

   
  
}
