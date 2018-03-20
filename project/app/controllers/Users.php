\<?php
 class Users extends Controller{
 public function __construct(){ 
 $this->userModel = $this->model('User');
 
 }
 public function register(){
 //check for POST 
 if($_SERVER['REQUEST_METHOD']=='POST'){
    	// Sanitize POST data
     
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	//init data
  $data=[
 'name'=>trim($_POST['name']),
 'contractor_id'=>trim($_POST['contractor_id']),
 'adhar_no'=>trim($_POST['adhar_no']),
 'truck_no'=>trim($_POST['truck_no']),
 
 'name_err'=>'',
 'contractor_id_err'=>'',
 'adhar_no_err'=>'',
 'truck_no_err'=>''
 ];
          //validation name 
		 
		  if(empty($data['name'])){
  		  $data['name_err'] = 'Enter Your Name';
          }
		  if(empty($data['contractor_id'])){
          $data['contractor_id_err'] = 'Pleae enter Contractor Id';
          }
		  if(empty($data['adhar_no'])){
          $data['adhar_no_err'] = 'Pleae enter Adhar No';
          }
		  if(empty($data['truck_no'])){
          $data['truck_no_err'] = 'Pleae enter Truck No';
          }
		  //make sure errors are empty
		  if(empty($data['name_err']) && empty($data['contractor_id_err']) && empty($data['adhar_no_err']) && empty($data['truck_no_err'])){
          //validated
		
		if($this->userModel->register($data)){
		  flash('register_success', 'You are registered and can soon you will get your Driver Id after validation by Contractor');
		  redirect('users/register');
				}else{
		       die("something went wrong");
		        }
		  }else{
		  //load view with errors
		  $this->view('users',$data);
		  }
		   
 }else{
 //init the data
 $data=[
 'name'=>'',
 'contractor_id'=>'',
 'adhar_no'=>'',
 'truck_no'=>'',
 
 'name_err'=>'',
 'contractor_id_err'=>'',
 'adhar_no_err'=>'',
 'truck_no_err'=>''
 ]; 
         
 //load view
 $this->view('users/register',$data);
 }
 
 }
 
 }