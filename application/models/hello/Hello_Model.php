<?php
class Hello_Model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	/*
	 * return single reult row (object)
	 */
	public function get_user($id = 'techlab') {
		$query = $this->db->get_where('T_NRT_USER', array('id' => $id));
		$row = $query->row();
		return $row;
		
		//return $query->row_array()
		
		/*
		 * All the methods above will load the whole result into memory (prefetching). Use unbuffered_row() for processing large result sets.
		 * 
		 * free_result()
		 */
	}
	
	/*
	 * return string
	 */
	public function get_user_name($id = 'techlab') {
		$query = $this->db->get_where('T_NRT_USER', array('id' => $id));
		$row = $query->row();
		
		$name = '';
		if (isset($row)) {
			$name = $row->NAME;
		}
// 		echo 'name : '.$name;
		return $name;
// 		return $query->row_array();
	}
	
	
	
	
	/*
	 * $this->db->insert_id()
	 * $this->db->affected_rows()
	 * 
	 * $this->db->count_all()
	 * 
	 * 
	 * $data = array('name' => $name, 'email' => $email, 'url' => $url);
	 * $str = $this->db->insert_string('table_name', $data);
	 * 
	 * 
	 * $data = array('name' => $name, 'email' => $email, 'url' => $url);
	 * $where = "author_id = 1 AND status = 'active'";
	 * $str = $this->db->update_string('table_name', $data, $where);
	 * 
	 */
}