<?php


Class Admin extends CI_Model {
	
	function login($username, $password) {
	
		$this->db->select('id', 'username', 'password');
		$this->db->from('admin');
		$this->db->where('username', MD5($username));
		$this->db->where('password', MD5($password));
		
		$query = $this->db->get();
		
		$query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
	}
}