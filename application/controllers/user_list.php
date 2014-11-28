<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_list extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_list','',TRUE);
	}
 
}

?>