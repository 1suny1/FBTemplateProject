<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fbsdk extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model('fbsdk/Fbsdk_Model');
		$this->load->helper('url');
		$this->load->library('FacebookLib');
	}
	
	public function index()
	{
		$data['title'] = HEADER_TITLE;
		
		$data['my_adaccount'] = $this->Fbsdk_Model->get_account_info();
	
		$this->load->view('templates/header', $data);
		$this->load->view('fbsdk/read', $data);
		$this->load->view('templates/footer');
	}
}