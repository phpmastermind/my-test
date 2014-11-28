<?php
Class New_User extends CI_Model
{
 function check_register($username,$password,$email,$contact)
 {
   $this -> db -> select('id');
   $this -> db -> from('users');
   $this -> db -> where('email', $email);
   $this -> db -> where('contact', $contact);
   $this -> db -> limit(1);
   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
		redirect('admin/add_new_user','refresh');
   }
   else
   {
	$add_user = array('username' => $username, 'password' => $password, 'email' => $email, 'contact' => $contact);
	$this->db->insert('users',$add_user);
	if ($this->db->affected_rows() > 0)
	{
		echo '<script>alert("New User Added Successfully.")</script>';
		return true;
	}else{
		echo '<script>alert("Something Wrong Try Again.")</script>';
		return true;
	}
   }
 }
}
?>