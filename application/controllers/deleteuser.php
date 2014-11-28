<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DeleteUser extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('delete_user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_rules('id', 'Id', 'trim|required');
   
   if($this->form_validation->run() == FALSE)
   {
	if($this->session->userdata('logged_in'))
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->view('admin/header');
		$this->load->view('admin/top_header');
		$this->load->view('admin/sidebar_nav', $data);
		$this->load->helper(array('form'));
		$this->load->view('admin/delete_user');
	}else{
		redirect('admin/list_user', 'refresh');
	}
   }
   else
   {
     //Go to private area
	 
	 
	 $this->ins_users();
     //redirect('home', 'refresh');
	 
   } 
 }
 function ins_users()
 {
   //Field validation succeeded.  Validate against database
   $id = $this->input->post('id');

   //query the database
   $result = $this->delete_user->delete($id);
   if($result)
   {
     //return TRUE;
		redirect('admin/list_user', 'refresh');
   }
   else
   {
     $this->form_validation->set_message('ins_users', 'Email Already Exist.');
     return false;
   }
 }
}
?>