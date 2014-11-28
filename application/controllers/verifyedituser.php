<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyEditUser extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('edit_user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('new_password', 'Password', 'trim|xss_clean|matches[confrim_password]');
   $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|xss_clean');
   $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
   $this->form_validation->set_rules('contact', 'Contact', 'required|numeric');
   
   function numeric_wcomma ($str)
	{
		if (strlen($str) == 10)
		{
			return preg_match('/^[0-9]$/', $str);
		}else{
			return false;
		}
	}
   
   if($this->form_validation->run() == FALSE)
   {
	if($this->session->userdata('logged_in'))
	{
		$this->db->select("*");
		$this->db->from('users');
		$this->db->where('id',$_REQUEST['id']);
		$this->db->limit(1);
		$query = $this->db->get();
		$user_list['users'] = $query->result();
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->view('admin/header');
		$this->load->view('admin/top_header');
		$this->load->view('admin/sidebar_nav', $data);
		$this->load->helper(array('form'));
		$this->load->view('admin/edit_user', $user_list);
		$this->load->view('admin/footer');
	}else{
		redirect('admin/login', 'refresh');
	}
   }
   else
   {
     //Go to private area
	 
	 
	 $this->edit_users();
     //redirect('home', 'refresh');
	 
   } 
 }
 function edit_users()
 {
   //Field validation succeeded.  Validate against database
   $id = $this->input->post('id');
   $username = $this->input->post('username');
   $password = $this->input->post('new_password');
   $email = $this->input->post('email');
   $contact = $this->input->post('contact');

   //query the database
   $result = $this->edit_user->check_valid_data($id,$username,$password,$email,$contact);
   if($result)
   {
     //return TRUE;
		redirect('admin/list_user', 'refresh');
   }
   else
   {
     $this->form_validation->set_message('edit_users', 'Email Already Exist.');
     return false;
   }
 }
}
?>