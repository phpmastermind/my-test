<?php

if( ! defined('BASEPATH'))

exit('No direct script access allowed');

Class Mycontroller extends CI_Controller {
	
	public $layout = 'admin/index';
	
	public function index(content) {
		$view_data = array(
		 'content' => $content
		);
		
		$this->load->view($this->layout, $view_data);
		
	}
}


?>