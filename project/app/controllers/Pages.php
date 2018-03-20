<?php
  class Pages extends Controller {
    public function __construct(){
     $this->govtModel = $this->model('Gov');
    }
     
    public function index(){
      $data = [
        'title' => 'HT Monitoring System',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
	public function m_detail(){
	 $users =$this->govtModel->getData();
           
	         // Init data
       $data = [
        'users' => $users
      ];
        $this->view('pages/m_detail',$data);
	
	}
  }