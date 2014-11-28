<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyUser extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('new_user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|is_unique[users.username]');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
   $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
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
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->view('admin/header');
		$this->load->view('admin/top_header');
		$this->load->view('admin/sidebar_nav', $data);
		$this->load->helper(array('form'));
		$this->load->view('admin/add_new_user');
	}else{
		redirect('admin/add_new_user', 'refresh');
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
   $username = $this->input->post('username');
   $password = $this->input->post('password');
   $email = $this->input->post('email');
   $contact = $this->input->post('contact');

   //query the database
   $result = $this->new_user->check_register($username,$password,$email,$contact);
   if($result)
   {
     //return TRUE;
		//redirect('admin/list_user', 'refresh');
		header('refresh:3; url='.site_url().'/admin/list_user');
   }
   else
   {
     $this->form_validation->set_message('ins_users', 'Email Already Exist.');
     return false;
   }
 }
}
?>