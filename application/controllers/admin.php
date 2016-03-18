<?php

Class Admin extends CI_Controller {
	//http://jeffreybarke.net/tools/codeigniter-encryption-key-generator/
	
	public function __construct() {
	
		parent::__construct();
	
		if (!$this->session->userdata['logged_in']) // or whatever you use
		{
			redirect ('user_authentication/user_login_show');
		}
		
		//Load database
		//$this->load->model('admin_database');
	}
	
	
	
	//show product details
	public function index() {
				
		$data['page_name'] = 'admin';
		$this->load->view('template',$data);
	
	}
	
	
	
	
	
	
	
	
	
}

?>