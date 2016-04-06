<?php
class Database_Sample_Model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	public function get_sql() {
		$sql = $this->db->get_compiled_select('T_NRT_USER');
		echo $sql;
	}
	
	public function get_users() {
		
	}
}