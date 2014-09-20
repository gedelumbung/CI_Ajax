<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ajax_model');
	}
	function index()
	{		
		$this->load->view('index');	
	}
}

/* End of file home.php */
/* Location: ./system/application/controllers/home.php */
