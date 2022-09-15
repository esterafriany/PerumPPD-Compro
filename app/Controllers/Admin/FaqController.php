<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use Illuminate\Http\Request;

//Model
use App\Models\Faqs;
use App\Models\Coupons;

class FaqController extends BaseController
{
    
    function __construct(){
        helper(['form', 'url']);
        $this->FaqModel = new Faqs();
	    	$this->CouponModel = new Coupons();

    }

    public function index(){
      $data = [
          'title'=>'Data FAQ',
          'content'=>'admin/faq/index'
      ];
          
		  echo view('admin/template/template',$data);
    }

    public function getFaqs(){
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
        $totalRecords = $this->FaqModel->select('id')
                ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $this->FaqModel->select('id')
                ->countAllResults();

        ## Fetch records
        $records = $this->FaqModel
                ->select('*')
                // ->orLike('question', $searchValue)
                // ->orLike('answer', $searchValue)
                ->findAll($rowperpage, $start);
                 
        $data = array();

        foreach($records as $record ){
            $data[] = array( 
                "id"=>$record['id'],
                "question"=>$record['question'],
                "answer"=>$record['answer'],
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

    public function onAddFaq(){
      try {
        $data = [
            'question' => $this->request->getPost('question'),
            'answer' => ($this->request->getPost('answer')),
            'is_active' => $this->request->getPost('is_active'),
        ];

        $this->FaqModel->insert($data);
        
        echo json_encode(array("status" => TRUE));
      }catch (\Exception $e) {
        
      }
    }

    public function onDetailFAQ($id) {
      $data = $this->FaqModel->getFAQ($id);
      
      echo json_encode($data);
    }

    public function onEditFaq(){
      try {
        $data = [
            'question' => $this->request->getPost('question'),
            'answer' => ($this->request->getPost('answer')),
            'is_active' => $this->request->getPost('is_active'),
        ];

        $this->FaqModel->update($this->request->getPost('id'),$data);
        
        echo json_encode(array("status" => TRUE));
      }catch (\Exception $e) {
        
      }
    }

    public function onDeleteFAQ($id){
      try {
        $this->FaqModel->delete($id);
        echo json_encode(array("status" => TRUE));
      }catch (\Exception $e) {
        
      }
    }
  
}
