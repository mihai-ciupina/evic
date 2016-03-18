<?php
class Search extends CI_Controller {

        public function __construct() {
            parent::__construct();
			
			if ((!isset($this->session->userdata['logged_in']))||(!$this->session->userdata['logged_in'])) // or whatever you use
			{
				redirect ('user_authentication/user_login_show');
			}
				
			//Load database
			$this->load->model('product_database');
        }

        public function show_search_form()
        {   
			$data['page_name'] = 'search';
			$this->load->view('template', $data);
		}

		public function index() 
		{ 
			$this->show_search_form();
		} 

		public function show_search_result() {
			
			$data['page_name'] = 'search_result';
			$this->load->view('template', $data);
		}
}
?>