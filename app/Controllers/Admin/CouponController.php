<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use Illuminate\Http\Request;

//Model
use App\Models\Coupons;

class CouponController extends BaseController
{
     function __construct(){
        helper(['form', 'url']);
		$this->CouponModel = new Coupons();
    }
	
	 public function index(){
		$data = [
				'title'=>'Data Coupons',
				'content'=>'admin/coupon/index'
		];
	
		echo view('admin/template/template',$data);
    }
	
	public function getCoupons(){
        $request = service('request');
        $postData = $request->getPost();
        $dtpostData = $postData['data'];
        $response = array();

        ## Read value
        $draw = $dtpostData['draw'];
        $start = $dtpostData['start'];
        $rowperpage = $dtpostData['length']; // Rows display per page
        $columnIndex = $dtpostData['order'][0]['column']; // Column index
        $columnName = $dtpostData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $dtpostData['order'][0]['dir']; // asc or desc
        $searchValue = $dtpostData['search']['value']; // Search value

        ## Total number of records without filtering
        $totalRecords = $this->CouponModel->select('id')
                ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $this->CouponModel->select('id')
                ->orLike('code', $searchValue)
                ->countAllResults();

        ## Fetch records
        $records = $this->CouponModel
                ->select('*')
                ->orLike('code', $searchValue)
                ->findAll($rowperpage, $start);
                 
        $data = array();

        foreach($records as $record ){
            $data[] = array( 
                "id"=>$record['id'],
                "code"=>$record['code'],
                "is_active"=>$record['is_active']
            ); 
        }
    
        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data,
            "token" => csrf_hash() // New token hash
        );
        
        return $this->response->setJSON($response);
    }
}
