<?php
//session_start();

Class Product extends CI_Controller {
	//http://jeffreybarke.net/tools/codeigniter-encryption-key-generator/
	
	public function __construct() {
	
		parent::__construct();
	
		if ((!isset($this->session->userdata['logged_in']))||(!$this->session->userdata['logged_in'])) // or whatever you use
		{
			redirect ('user_authentication/user_login_show');
		}
		
		//Load database
		$this->load->model('product_database');
	}
	
	
	
	
	
	
	
	//show product details
	public function show_products_search_result($xxx = '0') {
	

		$this->form_validation->set_rules('input_name', 'Nume produs: ', 'trim|xss_clean');
		$this->form_validation->set_rules('category', 'Categorie produs: ', 'trim|xss_clean');
		$this->form_validation->set_rules('input_compatibility', 'Compatibilitate: ', 'trim|xss_clean');
		$this->form_validation->set_rules('input_provenience', 'Provenienta: ', 'trim|xss_clean');
		$this->form_validation->set_rules('input_code', 'Cod produs: ', 'trim|xss_clean');

		if($this->form_validation->run() == FALSE) {
			//var_dump(validation_errors());
				$data['page_name'] = 'search_result';
				$this->load->view('template',$data);
		} else {

			$data = array(
				'name' => $this->input->post('input_name'),
				'category' => $this->input->post('category'),
				'compatibility' => $this->input->post('input_compatibility'),
				'provenience' => $this->input->post('input_provenience'),
				'product_code' => $this->input->post('input_code'),
			);

			$this->load->library('pagination');
			$config['base_url']   = $this->config->base_url("product/show_products_search_result");
			$config['total_rows'] = $this->product_database->num_rows($data);
			$config['uri_segment'] = 3;
			$config['per_page']   = 3;
			$config['num_links']  = 20;
			$this->pagination->initialize($config);

			//echo('-----------'.$this->input->post('hidden_page_number'));
			//$hidden_page_number = ($this->input->post('hidden_page_number')!==FALSE ? $this->input->post('hidden_page_number') : 1);
			//var_dump($hidden_page_number);
			$result = $this->product_database->read_product_all($data, $config['per_page'], $this->uri->segment($config['uri_segment']));
			//$result = $this->product_database->read_product_all($data, $config['per_page'], (($hidden_page_number-1)*$config['per_page']));
						
			$data['result'] = $result;
			//var_dump($data);
			if($result != FALSE) {
				$data['links'] = $this->pagination->create_links();
				$data['page_name'] = 'search_result';
				$this->load->view('template',$data);
			}
		}	
	
	}
	
	
	//xxx
	//show product details
	public function show_product_details($product_id = 0, $message_display = '') {
		//var_dump($message_display);
		
		if(!isset($product_id) OR ($product_id == 0)) {
			$data['message_display'] = $message_display;

			$data['page_name'] = 'search';
			$this->load->view('template',$data);

		} else {

			$data = array(
				'id' => $product_id
			);

			$result = $this->product_database->read_product_details($data);
			
			$data['result'] = $result;
			$data['message_display'] = $message_display;
			
			//var_dump($data);
			if($result != FALSE) {
			
				$data['category_page'] = $result[0]->category;
				$data['page_name'] = 'product_details';
				$this->load->view('template',$data);
				
		
				//$this->load->view('search_result', $data);
			}
		}	
	}
	
	
	//show cataloging page
	public function show_product_form($category_page = 'no', $product_id = 0) {

		
		if($product_id != 0) {
			//update
			$data = array(
				'id' => $product_id,
			);

			$result = $this->product_database->read_product_details($data);

			if($result != FALSE) {
				
				$data = $this->read_select_options();

				$data['result'] = $result;
				$data['category_page'] = $result[0]->category;
				
				$data['page_name'] = 'product_form_update';
				$this->load->view('template',$data);
			}
		} else {
			//insert
			$data = $this->read_select_options();

			$data['category_page'] = $category_page;
			$data['page_name'] = 'product_form_insert';
			$this->load->view('template',$data);
			//var_dump($data);
		}
		
		
	}
	

	
	//validate and store data in database
	public function product_update() {

		$product_id 	= $this->input->post('product_id');
		
		//check validation for user
		$this->form_validation->set_rules('name', 									'Nume produs', 'trim|required|xss_clean|min_length[5]');
		$this->form_validation->set_rules('category', 								'Categorie', 'trim|required|xss_clean');
		$this->form_validation->set_rules('status', 								'Stare', 'trim|xss_clean');
		$this->form_validation->set_rules('compatibility', 							'Compatibilitate', 'trim|xss_clean');
		$this->form_validation->set_rules('provenience', 							'Provenienta', 'trim|xss_clean');
		$this->form_validation->set_rules('product_code', 							'Cod produs', 'trim|xss_clean');
		$this->form_validation->set_rules('location', 								'Locatie', 'trim|xss_clean');
		$this->form_validation->set_rules('unit', 									'Unitate', 'trim|xss_clean');
		$this->form_validation->set_rules('unit_quantity', 							'Cantitate/Unitate', 'trim|xss_clean');
		$this->form_validation->set_rules('quantity', 								'Cantitate in stoc', 'trim|xss_clean');
		$this->form_validation->set_rules('unit_price', 							'Pret', 'trim|xss_clean');
		$this->form_validation->set_rules('image', 									'Imagine', 'trim|xss_clean');
		$this->form_validation->set_rules('url', 									'URL', 'trim|xss_clean');
		$this->form_validation->set_rules('notes', 									'Descriere', 'trim|xss_clean');
		
		switch($this->input->post('category')) {
			case 'mb': {
				$this->form_validation->set_rules('mb_format_select', 				'Format', 'trim|required|xss_clean');
				$this->form_validation->set_rules('mb_socket_select', 				'Soclu procesor', 'trim|required|xss_clean');
				$this->form_validation->set_rules('mb_graphics_interface_select', 	'Interfata grafica', 'trim|required|xss_clean');
				$this->form_validation->set_rules('mb_memory_type_select', 			'Tip memorie', 'trim|required|xss_clean');
			break;	}	case 'pr': {
				$this->form_validation->set_rules('pr_socket_select', 				'Socket', 'trim|required|xss_clean');
				$this->form_validation->set_rules('pr_core_select', 				'Nucleu', 'trim|required|xss_clean');
				$this->form_validation->set_rules('pr_frequency_select', 			'Frecventa', 'trim|required|xss_clean');
			break;	}	case 'co': {
				$this->form_validation->set_rules('co_socket_select', 				'Compatibilitate soket', 'trim|required|xss_clean');
				$this->form_validation->set_rules('co_cooling_type_select', 		'Tip racie', 'trim|required|xss_clean');
				$this->form_validation->set_rules('co_cooling_mode_select', 		'Racire', 'trim|required|xss_clean');
			break;	}	case 'gb': {
				$this->form_validation->set_rules('gb_manufacturer_select', 		'Producator', 'trim|required|xss_clean');
				$this->form_validation->set_rules('gb_model_select', 				'Model', 'trim|required|xss_clean');
				$this->form_validation->set_rules('gb_interface_select', 			'Interfata', 'trim|required|xss_clean');
				$this->form_validation->set_rules('gb_chipset_select', 				'Cipset', 'trim|required|xss_clean');
				$this->form_validation->set_rules('gb_memory_select', 				'Memorie', 'trim|required|xss_clean');
				$this->form_validation->set_rules('gb_memory_dimension_select', 	'Dimensiune memorie', 'trim|required|xss_clean');
			break;	}	case 'me': {
				$this->form_validation->set_rules('me_type_select', 				'Tip', 'trim|required|xss_clean');
				$this->form_validation->set_rules('me_frequency_select', 			'Frecventa', 'trim|required|xss_clean');
				$this->form_validation->set_rules('me_capacity_select', 			'Capacitate', 'trim|required|xss_clean');
			break;	}	case 'hd': {
				$this->form_validation->set_rules('hd_interface_select', 			'Interfata', 'trim|required|xss_clean');
				$this->form_validation->set_rules('hd_capacity_select', 			'Capacitate', 'trim|required|xss_clean');
				$this->form_validation->set_rules('hd_dimension_select', 			'Dimensiune', 'trim|required|xss_clean');
			break;	}	case 'ps': {
				$this->form_validation->set_rules('ps_type_select', 				'Tip', 'trim|required|xss_clean');
				$this->form_validation->set_rules('ps_power_select', 				'Putere', 'trim|required|xss_clean');
				$this->form_validation->set_rules('ps_efficiency_select', 			'Eficienta', 'trim|required|xss_clean');
				break;
			}
		}


		//validate and upload the file
		$config = array(
			'upload_path' => "./images/uploads/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000",
			'max_height' => "768",
			'max_width' => "1024",
			'file_name' => $product_id
		);
		$this->load->library('upload', $config);
		
		if($this->form_validation->run() == FALSE) {

			$data = $this->read_select_options();

			$data['category_page'] = $this->input->post('category_page');
			$data['product_id'] = $this->input->post('product_id');
			$data['page_name'] = 'product_form_update_validation';
			$this->load->view('template', $data);
			
		} else {

			$data = array(
				'name' => $this->input->post('name'),
				'category' => $this->input->post('category'),
				'status' => $this->input->post('status'),
				'compatibility' => $this->input->post('compatibility'),
				'provenience' => $this->input->post('provenience'),
				'product_code' => $this->input->post('product_code'),
				'location' => $this->input->post('location'),
				'unit' => $this->input->post('unit'),
				'unit_quantity' => (($this->input->post('unit_quantity') != "") ? ($this->input->post('unit_quantity')) : 0),
				'quantity' => (($this->input->post('quantity') != "") ? ($this->input->post('quantity')) : 0),
				'unit_price' => (($this->input->post('unit_price') != "") ? ($this->input->post('unit_price')) : 0),
				'url' => $this->input->post('url'),
				'notes' => $this->input->post('notes'),
				
				'mb_format_select' 				=> $this->input->post('mb_format_select'),
				'mb_socket_select' 				=> $this->input->post('mb_socket_select'),
				'mb_graphics_interface_select' 	=> $this->input->post('mb_graphics_interface_select'),
				'mb_memory_type_select' 		=> $this->input->post('mb_memory_type_select'),

				'pr_socket_select' 				=> $this->input->post('pr_socket_select'),
				'pr_core_select' 				=> $this->input->post('pr_core_select'),
				'pr_frequency_select' 			=> $this->input->post('pr_frequency_select'),
				
				'co_socket_select' 				=> $this->input->post('co_socket_select'),
				'co_cooling_type_select' 		=> $this->input->post('co_cooling_type_select'),
				'co_cooling_mode_select' 		=> $this->input->post('co_cooling_mode_select'),
				
				'gb_manufacturer_select' 		=> $this->input->post('gb_manufacturer_select'),
				'gb_model_select' 				=> $this->input->post('gb_model_select'),
				'gb_interface_select' 			=> $this->input->post('gb_interface_select'),
				'gb_chipset_select' 			=> $this->input->post('gb_chipset_select'),
				'gb_memory_select' 				=> $this->input->post('gb_memory_select'),
				'gb_memory_dimension_select' 	=> $this->input->post('gb_memory_dimension_select'),
				
				'me_type_select' 				=> $this->input->post('me_type_select'),
				'me_frequency_select' 			=> $this->input->post('me_frequency_select'),
				'me_capacity_select' 			=> $this->input->post('me_capacity_select'),
				
				'hd_interface_select' 			=> $this->input->post('hd_interface_select'),
				'hd_capacity_select' 			=> $this->input->post('hd_capacity_select'),
				'hd_dimension_select' 			=> $this->input->post('hd_dimension_select'),
				
				'ps_type_select' 				=> $this->input->post('ps_type_select'),
				'ps_power_select' 				=> $this->input->post('ps_power_select'),
				'ps_efficiency_select' 			=> $this->input->post('ps_efficiency_select')

			);


			$message_display = '';

				//validate and upload the file
				$config = array(
					'upload_path' => "./images/uploads/",
					'allowed_types' => "gif|jpg|png|jpeg",
					'overwrite' => TRUE,
					'max_size' => "2048000",
					'max_height' => "768",
					'max_width' => "1024",
					'file_name' => $product_id
				);

				$this->load->library('upload', $config);
					
				if($this->upload->do_upload('product_image_file'))
				{
					//var_dump($this->upload->data());
					$message_display .= ' Imaginea a fost salvata cu succes.';

					$upload_data = $this->upload->data(); 
					$data['image'] = $upload_data['file_name'];

				} else {
					$message_display .= $this->upload->display_errors();
				}

			$result = $this->product_database->product_update($product_id, $data);
			//var_dump($result);
			$data['message_display'] = $message_display;
			if($result == TRUE) {
			
				//$data['category_page'] = $this->input->post('category_page');
				$data['message_display'] .= 'Produsul a fost modificat cu succes.';
				//$data['page_name'] = 'product_details';
				//$this->load->view('template', $data);
				$this->show_product_details($product_id, $data['message_display']);
				
			} else {
				$data['category_page'] = $this->input->post('category_page');
				$data['product_id'] = $this->input->post('product_id');
				$data['message_display'] .= 'Eroare 324365 - anuntati administratorul!';
				$data['page_name'] = 'product_form_update';
				$this->load->view('template', $data);
			}
		}	
	}




	//validate and store data in database
	public function product_insert($category_page = 'no') {

		//check validation for user
		$this->form_validation->set_rules('name', 									'Nume produs', 'trim|required|xss_clean|min_length[5]|max_length[64]');
		$this->form_validation->set_rules('category', 								'Categorie', 'trim|required|xss_clean');
		$this->form_validation->set_rules('status', 								'Stare', 'trim|required|xss_clean');
		$this->form_validation->set_rules('compatibility', 							'Compatibilitate', 'trim|xss_clean');
		$this->form_validation->set_rules('provenience', 							'Provenienta', 'trim|xss_clean');
		$this->form_validation->set_rules('location', 								'Locatie', 'trim|xss_clean');
		$this->form_validation->set_rules('unit', 									'Unitate', 'trim|xss_clean');
		$this->form_validation->set_rules('unit_quantity', 							'Cantitate/Unitate', 'trim|xss_clean|is_natural_no_zero');
		$this->form_validation->set_rules('quantity', 								'Cantitate in stoc', 'trim|xss_clean|integer');
		$this->form_validation->set_rules('unit_price', 							'Pret', 'trim|xss_clean|numeric');
		$this->form_validation->set_rules('url', 									'URL', 'trim|xss_clean');
		$this->form_validation->set_rules('notes', 									'Descriere', 'trim|xss_clean');
		$this->form_validation->prep_url('url');//I don't know how much helps
	
		switch($this->input->post('category')) {
			case 'mb': {
				$this->form_validation->set_rules('mb_format_select', 				'Format', 'trim|required|xss_clean');
				$this->form_validation->set_rules('mb_socket_select', 				'Soclu procesor', 'trim|required|xss_clean');
				$this->form_validation->set_rules('mb_graphics_interface_select', 	'Interfata grafica', 'trim|required|xss_clean');
				$this->form_validation->set_rules('mb_memory_type_select', 			'Tip memorie', 'trim|required|xss_clean');
			break;	}	case 'pr': {
				$this->form_validation->set_rules('pr_socket_select', 				'Socket', 'trim|required|xss_clean');
				$this->form_validation->set_rules('pr_core_select', 				'Nucleu', 'trim|required|xss_clean');
				$this->form_validation->set_rules('pr_frequency_select', 			'Frecventa', 'trim|required|xss_clean');
			break;	}	case 'co': {
				$this->form_validation->set_rules('co_socket_select', 				'Compatibilitate soket', 'trim|required|xss_clean');
				$this->form_validation->set_rules('co_cooling_type_select', 		'Tip racie', 'trim|required|xss_clean');
				$this->form_validation->set_rules('co_cooling_mode_select', 		'Racire', 'trim|required|xss_clean');
			break;	}	case 'gb': {
				$this->form_validation->set_rules('gb_manufacturer_select', 		'Producator', 'trim|required|xss_clean');
				$this->form_validation->set_rules('gb_model_select', 				'Model', 'trim|required|xss_clean');
				$this->form_validation->set_rules('gb_interface_select', 			'Interfata', 'trim|required|xss_clean');
				$this->form_validation->set_rules('gb_chipset_select', 				'Cipset', 'trim|required|xss_clean');
				$this->form_validation->set_rules('gb_memory_select', 				'Memorie', 'trim|required|xss_clean');
				$this->form_validation->set_rules('gb_memory_dimension_select', 	'Dimensiune memorie', 'trim|required|xss_clean');
			break;	}	case 'me': {
				$this->form_validation->set_rules('me_type_select', 				'Tip', 'trim|required|xss_clean');
				$this->form_validation->set_rules('me_frequency_select', 			'Frecventa', 'trim|required|xss_clean');
				$this->form_validation->set_rules('me_capacity_select', 			'Capacitate', 'trim|required|xss_clean');
			break;	}	case 'hd': {
				$this->form_validation->set_rules('hd_interface_select', 			'Interfata', 'trim|required|xss_clean');
				$this->form_validation->set_rules('hd_capacity_select', 			'Capacitate', 'trim|required|xss_clean');
				$this->form_validation->set_rules('hd_dimension_select', 			'Dimensiune', 'trim|required|xss_clean');
			break;	}	case 'ps': {
				$this->form_validation->set_rules('ps_type_select', 				'Tip', 'trim|required|xss_clean');
				$this->form_validation->set_rules('ps_power_select', 				'Putere', 'trim|required|xss_clean');
				$this->form_validation->set_rules('ps_efficiency_select', 			'Eficienta', 'trim|required|xss_clean');
				break;
			}
		}
		
		if($this->form_validation->run() == FALSE) {

			$data = $this->read_select_options();
			$data['category_page'] = $this->input->post('category');
			$data['page_name'] = 'product_form_insert';
			$this->load->view('template', $data);
			
		} else {
			$data = array(
				'name' => $this->input->post('name'),
				'category' => $this->input->post('category'),
				'status' => $this->input->post('status'),
				'compatibility' => $this->input->post('compatibility'),
				'provenience' => $this->input->post('provenience'),
				'product_code' => $this->input->post('product_code'),
				'location' => $this->input->post('location'),
				'unit' => $this->input->post('unit'),
				'unit_quantity' => (($this->input->post('unit_quantity') != "") ? ($this->input->post('unit_quantity')) : 0),
				'quantity' => (($this->input->post('quantity') != "") ? ($this->input->post('quantity')) : 0),
				'unit_price' => (($this->input->post('unit_price') != "") ? ($this->input->post('unit_price')) : 0),
				'url' => $this->input->post('url'),
				'notes' => $this->input->post('notes'),

				'mb_format_select' 				=> $this->input->post('mb_format_select'),
				'mb_socket_select' 				=> $this->input->post('mb_socket_select'),
				'mb_graphics_interface_select' 	=> $this->input->post('mb_graphics_interface_select'),
				'mb_memory_type_select' 		=> $this->input->post('mb_memory_type_select'),

				'pr_socket_select' 				=> $this->input->post('pr_socket_select'),
				'pr_core_select' 				=> $this->input->post('pr_core_select'),
				'pr_frequency_select' 			=> $this->input->post('pr_frequency_select'),
				
				'co_socket_select' 				=> $this->input->post('co_socket_select'),
				'co_cooling_type_select' 		=> $this->input->post('co_cooling_type_select'),
				'co_cooling_mode_select' 		=> $this->input->post('co_cooling_mode_select'),
				
				'gb_manufacturer_select' 		=> $this->input->post('gb_manufacturer_select'),
				'gb_model_select' 				=> $this->input->post('gb_model_select'),
				'gb_interface_select' 			=> $this->input->post('gb_interface_select'),
				'gb_chipset_select' 			=> $this->input->post('gb_chipset_select'),
				'gb_memory_select' 				=> $this->input->post('gb_memory_select'),
				'gb_memory_dimension_select' 	=> $this->input->post('gb_memory_dimension_select'),
				
				'me_type_select' 				=> $this->input->post('me_type_select'),
				'me_frequency_select' 			=> $this->input->post('me_frequency_select'),
				'me_capacity_select' 			=> $this->input->post('me_capacity_select'),
				
				'hd_interface_select' 			=> $this->input->post('hd_interface_select'),
				'hd_capacity_select' 			=> $this->input->post('hd_capacity_select'),
				'hd_dimension_select' 			=> $this->input->post('hd_dimension_select'),
				
				'ps_type_select' 				=> $this->input->post('ps_type_select'),
				'ps_power_select' 				=> $this->input->post('ps_power_select'),
				'ps_efficiency_select' 			=> $this->input->post('ps_efficiency_select')

			);
			
//xxx
			$result = $this->product_database->product_insert($data);
			$data['message_display'] = '';
			
			if($result !== FALSE) {
				$product_id = $result;
				
				$data_to_update = array(
					'product_code' => strtoupper($this->input->post('category')) .'-'. str_pad($product_id, 6, '0', STR_PAD_LEFT) .'-'. strtoupper($this->input->post('status'))
				);

				//validate and upload the file
				$config = array(
					'upload_path' => "./images/uploads/",
					'allowed_types' => "gif|jpg|png|jpeg",
					'overwrite' => TRUE,
					'max_size' => "2048000",
					'max_height' => "768",
					'max_width' => "1024",
					'file_name' => $product_id
				);

				$this->load->library('upload', $config);
					
				if($this->upload->do_upload('product_image_file'))
				{
					//var_dump($this->upload->data());
					$data['message_display'] .= ' Imaginea a fost salvata cu succes.';

					$upload_data = $this->upload->data(); 
					$data_to_update['image'] = $upload_data['file_name'];

				} else {
					$data['message_display'] .= $this->upload->display_errors();
				}
				
				//var_dump($data_to_update);
				$result = $this->product_database->product_update($product_id, $data_to_update);
				if($result == TRUE) {
				
					$data['message_display'] .= ' Produsul a fost adaugat cu succes.';
					$this->show_product_details($product_id, $data['message_display']);
				} else {
					$data = $this->read_select_options();
					$data['category_page'] = $this->input->post('category');
					$data['message_display'] = 'Produsul exista deja 1!';
					$data['page_name'] = 'product_form_insert';
					$this->load->view('template', $data);
				}

				//$data['message_display'] .= ' Produsul a fost adaugat cu succes.';
				//$this->show_product_details($product_id);

			} else {
				$data = $this->read_select_options();
				$data['category_page'] = $this->input->post('category');
				$data['message_display'] = 'Produsul exista deja 2!';
				$data['page_name'] = 'product_form_insert';
				$this->load->view('template', $data);
			}
		}
	}

	
	//
	public function delete_product() {
		
		$product_id = $this->input->post('product_id');

		$result = $this->product_database->delete_product($product_id);
		if($result === TRUE) {
			echo 'TRUE';
		} else {
			echo 'FALSE';
		}
	}

	
	public function update_checkbox_li() {
		$field_id 	= $this->input->post('field_id');
		$important 	= $this->input->post('important');
		$field_name = $this->input->post('field_name');
		
		$data['field_id'] = $field_id;
		$data['important'] = $important;

		$result = $this->product_database->update_checkbox_li($data);
		if($result === TRUE) {
			$this->read_li($field_name);
		} else {
			echo $result;
		}
	
	}
	
	//
	public function delete_li() {
		
		$field_id = $this->input->post('field_id');
		$field_name = $this->input->post('field_name');

		$result = $this->product_database->delete_li($field_id);
		if($result === TRUE) {
			$this->read_li($field_name);
		} else {
			echo $result;
		}
	}
	
	
	//
	public function insert_li() {

		$field_name = $this->input->post('field_name');
		$field_value = $this->input->post('field_value');

		$data['field_name'] = $field_name;
		$data['field_value'] = $field_value;
		
		$result = $this->product_database->insert_li($data);
		if($result === TRUE) {
			$this->read_li($field_name);
		} else {
			echo 'Probleme la inserare. Probabil duplicat.';
		}
	}


	//
	public function read_li($field_name = '') {
		
		if(($field_name === '') && ($this->input->post('field_name') != NULL))  {
			$field_name = $this->input->post('field_name');
		}
		
		
		
		$result = $this->product_database->read_li($field_name);
		//var_dump($result);
		if(($result !== FALSE) && (count($result) > 0)){
			foreach($result as $option) {
				$list[$option->id] = $option->field_value;
				$checked_list[$option->id] = $option->important;
			}
			
			echo '<table border="0" width="100%">';
			foreach($list as $field_id => $field_value) {
			echo '<tr>';
				echo '<td><input type="checkbox" field_id="'.$field_id.'" field_name="'.$field_name.'" name="'.$field_name.'_ul_checkbox" id="'.$field_name.'_ul_checkbox" value="'.$field_id.'" '.(($checked_list[$field_id]) ? 'checked="checked"' : '').' /></td>';
				echo '<td style="width:80%; padding-left:5px">'. $field_value .'</td>';
				echo '<td><input type="button" value="update" /></td>';
				echo '<td><input field_id="'.$field_id.'" field_name="'.$field_name.'" class="delete_li_modal" type="button" value="delete" /></td>';
			echo '</tr>';
			}
		echo '</table>';
		}
	}


	//
	public function reload_dropdown_div($field_name = '') {

		if($this->input->post('field_name') != NULL) {
			
			$field_name = $this->input->post('field_name');

			$result = $this->product_database->read_li($field_name);

			$dependent_select_array[''] = 'Alegeti o varianta';

			if($result !== FALSE) {
				
				foreach($result as $option) {
					$dependent_select_array[$option->field_value] = $option->field_value;
				}
				
				$data['field_name'] = $field_name;
				$data['field_data'] = $dependent_select_array;

				$this->load->view('dynamic_dropdown', $data);
				$this->load->view('modal_window', $data);
			
			} else {
				echo '<p>Eroare de program sau conexiune cu internet sau baza de date. Reincarcati pagina sau incercati alta varianta.</p>';
			}
		} else {
			echo '<p>Eroare de program sau conexiune cu internet sau baza de date. Reincarcati pagina sau incercati alta varianta.</p>';
		}
	}
	
	/**
	 * Functions that will display name of the variable, and it's value, and type
	 * 
	 * @param type $_var - variable to check
	 * @param type $aDefinedVars - Always define it this way: get_defined_vars()
	 * @return type
	 */
	public function vardump(&$_var, &$aDefinedVars = null){
		if($aDefinedVars){
			 foreach ($aDefinedVars as $k=>$v)
				$aDefinedVars_0[$k] = $v; 
			$iVarSave = $_var; // now I copy the $_var value to ano
			$_var     = md5(time());

			$aDiffKeys = array_keys (array_diff_assoc ($aDefinedVars_0, $aDefinedVars));
			$_var      = $iVarSave;
			$name      = $aDiffKeys[0];
		}else{
			$name = 'variable';
		}

		echo '<pre>';
		echo $name . ': ';
		var_dump($_var);
		echo '</pre>';
	}
		
	
	//
	public function read_select_options() {
		$result = $this->product_database->read_select_options();
		if($result !== FALSE) {
			$mb_format_select[''] 				= 'Alegeti o varianta';
			$mb_socket_select[''] 				= 'Alegeti o varianta';
			$mb_graphics_interface_select['']	= 'Alegeti o varianta';
			$mb_memory_type_select[''] 			= 'Alegeti o varianta';

			$pr_socket_select[''] 				= 'Alegeti o varianta';
			$pr_core_select[''] 				= 'Alegeti o varianta';
			$pr_frequency_select[''] 			= 'Alegeti o varianta';

			$co_socket_select[''] 				= 'Alegeti o varianta';
			$co_cooling_type_select[''] 		= 'Alegeti o varianta';
			$co_cooling_mode_select[''] 		= 'Alegeti o varianta';

			$gb_manufacturer_select[''] 		= 'Alegeti o varianta';
			$gb_model_select[''] 				= 'Alegeti o varianta';
			$gb_interface_select[''] 			= 'Alegeti o varianta';
			$gb_chipset_select[''] 				= 'Alegeti o varianta';
			$gb_memory_select[''] 				= 'Alegeti o varianta';
			$gb_memory_dimension_select[''] 	= 'Alegeti o varianta';

			$me_type_select[''] 				= 'Alegeti o varianta';
			$me_frequency_select[''] 			= 'Alegeti o varianta';
			$me_capacity_select[''] 			= 'Alegeti o varianta';

			$hd_interface_select[''] 			= 'Alegeti o varianta';
			$hd_capacity_select[''] 			= 'Alegeti o varianta';
			$hd_dimension_select['']			= 'Alegeti o varianta';

			$ps_type_select[''] 				= 'Alegeti o varianta';
			$ps_power_select[''] 				= 'Alegeti o varianta';
			$ps_efficiency_select[''] 			= 'Alegeti o varianta';

			foreach($result as $option) {
				$field_name = $option->field_name;
				$field_value = $option->field_value;
				$temp_array[$field_value] = $field_value;
				
				if(isset($$field_name)) {
					$temp_field_array = $$field_name;
					$$field_name = $temp_field_array + $temp_array;
				} else {
					$$field_name = $temp_array;
				}
				unset($temp_array);
				unset($temp_field_array);
			}
			
			$data['mb_format_select'] 				= $mb_format_select;
			$data['mb_socket_select'] 				= $mb_socket_select;
			$data['mb_graphics_interface_select'] 	= $mb_graphics_interface_select;
			$data['mb_memory_type_select'] 			= $mb_memory_type_select;

			$data['pr_socket_select'] 				= $pr_socket_select;
			$data['pr_core_select'] 				= $pr_core_select;
			$data['pr_frequency_select'] 			= $pr_frequency_select;

			$data['co_socket_select'] 				= $co_socket_select;
			$data['co_cooling_type_select'] 		= $co_cooling_type_select;
			$data['co_cooling_mode_select'] 		= $co_cooling_mode_select;

			$data['gb_manufacturer_select'] 		= $gb_manufacturer_select;
			$data['gb_model_select'] 				= $gb_model_select;
			$data['gb_interface_select'] 			= $gb_interface_select;
			$data['gb_chipset_select'] 				= $gb_chipset_select;
			$data['gb_memory_select'] 				= $gb_memory_select;
			$data['gb_memory_dimension_select'] 	= $gb_memory_dimension_select;

			$data['me_type_select'] 				= $me_type_select;
			$data['me_frequency_select'] 			= $me_frequency_select;
			$data['me_capacity_select'] 			= $me_capacity_select;

			$data['hd_interface_select'] 			= $hd_interface_select;
			$data['hd_capacity_select'] 			= $hd_capacity_select;
			$data['hd_dimension_select'] 			= $hd_dimension_select;

			$data['ps_type_select'] 				= $ps_type_select;
			$data['ps_power_select'] 				= $ps_power_select;
			$data['ps_efficiency_select'] 			= $ps_efficiency_select;
			
			//$this->vardump($pr_socket_select, get_defined_vars());$this->vardump($pr_core_select, get_defined_vars());

			return $data;
		}
	}
	
	
	
	
	//Controller: application/controllers/createpdf.php
	function generate_pdf_label()
	{
		$this->load->helper('pdf_helper');
		
		$data['product_code'] = $this->input->post('product_code');

		$this->load->view('pdfreport', $data);
	}
	
	
	//
	public function delete_user() {
		
		$user_id = $this->input->post('user_id');

		$result = $this->product_database->delete_user($user_id);
		if($result === TRUE) {
			echo 'TRUE';
		} else {
			echo 'FALSE';
		}
	}
	
	
	
	
	
}

?>