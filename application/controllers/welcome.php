<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->helper('url');
		if ($this->detect_mobile())
			$this->load->view('ios');
		else
			$this->load->view('home', array('app' => $this->input->get('app')));	
	}
	
	private function detect_mobile()
	{
		if(preg_match('/(ipad|iphone|android)/i', $_SERVER['HTTP_USER_AGENT']))
			return true;
		else
			return false;
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */