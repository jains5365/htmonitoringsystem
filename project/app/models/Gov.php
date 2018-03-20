<?php
  class Gov {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    public function login($data){
       $this->db->query('SELECT * FROM govt WHERE name = :name');
      
      $this->db->bind(':name', $data['name']);
	  
      $row = $this->db->single();
	  
	  if($row->name==$data['name']&&$row->password==$data['password']){
	  return $row;
	  }else{
	  return false;
	  }
    }
       public function register($data){
      $this->db->query('INSERT INTO c_detail(name,address,adhar,license,mob) VALUES(:name, :address,:adhar, :license,:mob)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':license', $data['license']);
	  $this->db->bind(':adhar', $data['adhar']);
	  $this->db->bind(':mob', $data['mob']);
	  

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
	public function update($data){
       $this->db->query('UPDATE d_detail SET driver_id =:driver_id WHERE adhar_no=:adhar_no');
      // Bind values
      $this->db->bind(':driver_id', $data['driver_id']);
	  $this->db->bind(':adhar_no', $data['adhar_no']);
     
 
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }

    }
	
	public function fd($data){
	$this->db->query('UPDATE d_detail SET entry_wt =:entry_wt ,exit_wt =:exit_wt WHERE driver_id =:driver_id');
      // Bind values
      $this->db->bind(':driver_id', $data['driver_id']);
      $this->db->bind(':entry_wt', $data['entry_wt']);
      $this->db->bind(':exit_wt', $data['exit_wt']);
	  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
	}
	public function getData(){
	
      $this->db->query('SELECT  * FROM d_detail');
	  
      $results = $this->db->resultSet();

      return $results;
	
	}
	
  }
       