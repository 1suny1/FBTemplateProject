<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_Sample extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('dbsample/Database_Sample_Model');
		$this->load->model('hello/Hello_Model');
		$this->load->helper('url');
	}
	
	public function index()
	{
		//for debug
		$this->Database_Sample_Model->get_sql();
		
		$data['title'] = HEADER_TITLE;
		
		$this->load->view('templates/header', $data);
		$this->load->view('database/read', $data);
		$this->load->view('templates/footer');
	}
}