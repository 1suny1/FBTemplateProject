<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('hello/Hello_Model');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['user'] = $this->Hello_Model->get_user();
		$data['user_name'] = $this->Hello_Model->get_user_name();
		$data['title'] = 'Hello Template Project';
		
		$this->load->view('templates/header', $data);
		$this->load->view('hello/index', $data);
		$this->load->view('templates/footer');
	}
}