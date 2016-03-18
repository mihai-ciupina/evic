<?php

Class Product_database extends CI_Model {





	//insert registration data in database
	public function product_insert($data) {

		//check for duplicated product
		$condition = "name =" . "'" . $data['name'] . "'";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows() == 0) {
			//no duplicated product so insert data in database
			$this->db->trans_start();
			$this->db->insert('product', $data);
			if($this->db->affected_rows() > 0) {
				$result = $this->db->insert_id();
				$this->db->trans_complete();
				if ($this->db->trans_status() === FALSE)
				{
					return FALSE;
				} else {
					return $result;
				}
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}
	
	//read product data from database
	public function read_product_details($data) {
		//var_dump($sess_array);
		$condition = "id =" . "'" . $data['id'] . "'";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 1) {
			return $query->result();
		} else {
			return FALSE;
		}
	}
	
	public function num_rows($data) {
		$this->db->like($data);
		return $this->db->get('product')->num_rows();	
	}
	
	//read product data from database
	public function read_product_all($data, $per_page, $offset) {
		//var_dump($sess_array);
		
		//if(isset($data['name'])) {
			//$condition = "name like" . "'%" . $data['name'] . "%'";
		//}

		$this->db->select('*');
		$this->db->from('product');
		
		$this->db->like($data);
		//$this->db->like('name', 'as');
		
		$this->db->limit($per_page, $offset);
		$query = $this->db->get();

		//var_dump($query->num_rows());
		//var_dump($query->result());
		
		if($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return FALSE;
		}

	}


	//
	public function product_update($product_id, $data){
		$this->db->where('id', $product_id);
		$result = $this->db->update('product', $data);
		return $result;
	}


	//
	public function delete_product($product_id) {
	
		$this->db->where('id', $product_id);
		$this->db->delete('product');

		if ($this->db->_error_message()) {
			$result = 'Error! ['.$this->db->_error_message().']';
		} else if (!$this->db->affected_rows()) {
			$result = 'Error! ID ['.$product_id.'] not found';
		} else {
			$result = TRUE;
		}
		
		return $result;
	}
	
	
	//
	public function read_li($field_name) {
		$this->db->select('*');
		$this->db->from('dropdown');
		$this->db->order_by("important", "desc");
		$this->db->where('field_name', $field_name);
		$query = $this->db->get();
		
		//var_dump($query);

		if($query) {
			return $query->result();
		} else {
			return FALSE;
		}
	}


	//
	public function delete_li($field_id) {
	
		$this->db->where('id', $field_id);
		$this->db->delete('dropdown');

		if ($this->db->_error_message()) {
			$result = 'Error! ['.$this->db->_error_message().']';
		} else if (!$this->db->affected_rows()) {
			$result = 'Error! ID ['.$field_id.'] not found';
		} else {
			$result = TRUE;
		}
		
		return $result;
	}


	//
	public function insert_li($data) {

		$this->db->insert('dropdown', $data);
		//var_dump($data);
		if($this->db->affected_rows() > 0) {
			$result = TRUE;
		} else {
			$result = FALSE;
		}

		return $result;
	}


	//read select options data from dropdown table
	public function read_select_options() {
		
		$this->db->select('*');
		$this->db->from('dropdown');
		$this->db->order_by("important", "desc");
		$query = $this->db->get();

		if($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return FALSE;
		}
	}


	
	public function update_checkbox_li($data) {
		$this->db->where('id', $data['field_id']);
		$this->db->update('dropdown', array('important' => $data['important']));

		if ($this->db->_error_message()) {
			$result = 'Error! ['.$this->db->_error_message().']';
		} else if (!$this->db->affected_rows()) {
			$result = 'Error! ID ['.$field_id.'] not found or values not modified';
		} else {
			$result = TRUE;
		}
		
		return $result;
	
	}


	//
	public function delete_user($user_id) {
	
		$this->db->where('id', $user_id);
		$this->db->delete('user_login');

		if ($this->db->_error_message()) {
			$result = 'Error! ['.$this->db->_error_message().']';
		} else if (!$this->db->affected_rows()) {
			$result = 'Error! ID ['.$product_id.'] not found';
		} else {
			$result = TRUE;
		}
		
		return $result;
	}
	
	
	
	
	


















	
	
	
	
	
	
}