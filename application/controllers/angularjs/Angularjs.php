<?php
class Angularjs extends CI_Controller {
	public function __construct() {
		parent::__construct();
	
		$this->load->model('fbsdk/Fbsdk_Model');
		$this->load->helper('url');
		$this->load->library('FacebookLib');
	}
	
	public function index()
	{
		$data['title'] = 'Hello Angularjs';
	
// 		$this->load->view('templates/header', $data);
		$this->load->view('angularjs/read', $data);
// 		$this->load->view('templates/footer');
	}
	
	public function hello() {
		$data['title'] = 'Hello Angularjs';
		
		$this->load->view('angularjs/hello', $data);
	}
}