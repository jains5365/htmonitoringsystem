<?php
 class Govt extends Controller{
 public function __construct(){ 
    $this->govtModel = $this->model('Gov');
                        }
 public function login(){
 //check for POST 
 if($_SERVER['REQUEST_METHOD']=='POST'){
   //sanitise 
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	//init data
  $data=[
 'name'=>trim($_POST['name']),
 'password'=>trim($_POST['password']),
 
 'name_err'=>'',
 'password_err'=>''
 ];
 
      //validation name 
		 
		  if(empty($data['name'])){
  		  $data['name_err'] = 'Enter Your Name';
          }
		  if(empty($data['password'])){
          $data['password_err'] = 'Pleae enter ';
          }
		  
		  //make sure errors are empty
		  if(empty($data['name_err']) && empty($data['password_err']) ){
          //validated
		 $loggedInUser = ($this->govtModel->login($data));
		  if($loggedInUser){
		  
		  redirect('govt/option');
		  
		  }else{
		  }
		  
		     }
	          }else{
        //inin data
          $data=[ 
          'name'=>'',
          'password'=>''
           ] ;
		   //load view with errors
          $this->view('govt/login',$data);
          }
     }
	 public function option(){
	 $data=[];
	   $this->view('govt/option',$data);
	 	}
	 public function driver(){
	 if($_SERVER['REQUEST_METHOD']=='POST'){
	  $data =[
	   'adhar_no'=>trim($_POST['adhar_no']),
	   'driver_id'=>trim($_POST['driver_id'])
	  			  ];
				  
		if(!empty($data['adhar_no']) && !empty($data['driver_id']) ){
		  if($this->govtModel->update($data)){
		  flash('register_success', 'Pass has been created you will receive it via post');
		   redirect("govt/driver");
		  }else{
		  echo 'something went wrong';
		  }		  
		  }	   
		
		
		 
	 }else{
	 $data=[
	  'adhar_no'=>'',
	  'driver_id'=>''
	  ];
	  
	   $this->view('govt/driver',$data);
	 
	 }
  }
		
		
	 public function contractor(){
	 
	 if($_SERVER['REQUEST_METHOD']=='POST'){
	 //sanitise the input
   	 $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	
	 $data=[
	   'name'=>trim($_POST['name']),
	   'address'=>trim($_POST['address']),
	   'adhar'=>trim($_POST['adhar']),
	   'license'=>trim($_POST['license']),
	   'mob'=>trim($_POST['mob']),
	   'name_err'=>'',
	    'address_err'=>'',
		'adhar_err'=>'',
		'license_err'=>''
	   	   ];
		  if(!empty($data['name']) && !empty($data['adhar']) && !empty($data['mob']) && !empty($data['license']) ){
		  if($this->govtModel->register($data)){
		  flash('register_success', 'Contractor has been registered');
		   redirect("govt/contractor");
		  }else{
		  echo 'something went wrong';
		  }		  
		  }	   
			
          
		
	       
	  	 }else{
		 
		 
		//load view with errors
		$data=[
	   'name'=>'',
	   'address'=>'',
	   'adhar'=>'',
	   'license'=>'',
	   'mob'=>''
	   ];
		$this->view('govt/contractor',$data);
		}
	  }
       public function f_detail(){
	   if($_SERVER['REQUEST_METHOD']=='POST'){
	 $data=[
	   'driver_id'=>trim($_POST['driver_id']),
	   'entry_wt'=>trim($_POST['entry_wt']),
	   'exit_wt'=>trim($_POST['exit_wt'])
	   ];
	  if(!empty($data['driver_id']) && !empty($data['entry_wt']) && !empty($data['exit_wt'])){
		  if($this->govtModel->fd($data)){
		  
		   redirect("govt/f_detail");
		  }else{
		  echo 'something went wrong';
		  }		  
		  } 
	   
	   }else{
	   $data=[
	   'driver_id'=>'',
	   'entry_wt'=>'',
	   'exit_wt'=>''
	   ];
	   $this->view('govt/f_detail',$data);
	   
	   }
	 }  

    }
