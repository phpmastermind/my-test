<?php
Class Delete_User extends CI_Model
{
 function delete($id)
 {
	$this->db->where("id", $id);
	$this->db->delete('users');
	if ($this->db->affected_rows() > 0)
	{
		echo '<script>alert("User Deleted Successfully.")</script>';
		return true;
	}else{
		echo '<script>alert("Something Wrong Try Again.")</script>';
		return true;
	}
 }
}
?>