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
		$data = $this->template_data;
		
		// 		add_css(array('business-casual.css'));
		add_css('business-casual.css');
		$data['header_css'] = put_headers();
		
		$data['user'] = $this->Hello_Model->get_user();
		$data['user_name'] = $this->Hello_Model->get_user_name();
		
		$this->load->view('templates/header', $data);
		$this->load->view('hello/index', $data);
		$this->load->view('templates/footer');
	}
}