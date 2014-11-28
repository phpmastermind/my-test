<?php
session_start();
class Admin extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
 
        $this->load->helper('url');
 
    }
	
	
	function index() {
		
		$this->login();
		
	}
	
	function login() {
		$this->load->view('admin/header');
		$this->load->helper(array('form'));
		$this->load->view('admin/login');
		
		
	}
	
	 
	 function add_new_user()
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
			$this->load->view('admin/footer');
		}else{
			redirect('admin/login', 'refresh');
		}
	 }
 
	function list_user()
	{
		if($this->session->userdata('logged_in'))
		{
			$query = $this->db->get("users");
			$user_list['users'] = $query->result();
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('admin/header');
			$this->load->view('admin/top_header');
			$this->load->view('admin/sidebar_nav', $data);
			$this->load->helper(array('form'));
			$this->load->view('admin/list_user', $user_list);
			$this->load->view('admin/footer');
		}else{
			redirect('admin/login', 'refresh');
		}
	}
	
	function general() {
		$this->load->view('admin/header');
		$this->load->view('admin/top_header');
		$this->load->view('admin/sidebar_nav');
		$this->load->view('admin/general');
		$this->load->view('admin/footer');
	}
	
	function edit_user()
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
	
	
	function delete_user()
	{
		if($this->session->userdata('logged_in'))
		{
			$user_list['users'] = $_REQUEST['id'];
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('admin/header');
			$this->load->view('admin/top_header');
			$this->load->view('admin/sidebar_nav', $data);
			$this->load->helper(array('form'));
			$this->load->view('admin/delete_user', $user_list);
			$this->load->view('admin/footer');
		}else{
			redirect('admin/login', 'refresh');
		}
	}
	
	
	function doSomething() {
		echo 'doing Something';
	}
	
}

?>