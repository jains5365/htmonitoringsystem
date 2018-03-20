<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO d_detail(name, contractor_id,adhar_no, truck_no) VALUES(:name, :contractor_id,:adhar_no, :truck_no)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':contractor_id', $data['contractor_id']);
      $this->db->bind(':truck_no', $data['truck_no']);
	  $this->db->bind(':adhar_no', $data['adhar_no']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }