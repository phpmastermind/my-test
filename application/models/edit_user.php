<?php
Class Edit_User extends CI_Model
{
 function check_valid_data($id,$username,$password,$email,$contact)
 {
   if (!empty($password))
	{
		$add_user = array('username' => $username, 'password' => $password, 'email' => $email, 'contact' => $contact);
	}else{
		$add_user = array('username' => $username, 'email' => $email, 'contact' => $contact);
	}
	$this->db->where("id", $id);
	$this->db->update('users',$add_user);
	if ($this->db->affected_rows() > 0)
	{
		echo '<script>alert("User Updated Successfully.")</script>';
		return true;
	}else{
		echo '<script>alert("Something Wrong Try Again.")</script>';
		return true;
	}
 }
}
?>