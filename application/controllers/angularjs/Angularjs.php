<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angularjs extends CI_Controller {
	public function __construct() {
		parent::__construct();
	
		$this->load->model('fbsdk/Fbsdk_Model');
	}
	
	public function index()
	{
		$data = $this->template_data;
		
		// 		add_css(array('business-casual.css'));
		add_css('business-casual.css');
		$data['header_css'] = put_headers();
		
		add_js(array('angular/angular.js', 
				'angular-route/angular-route.js', 
				'angular-resource/angular-resource.js',
				'custom/angularjs/app.js',
				'custom/angularjs/controllers.js',
				'custom/angularjs/services.js',
		));
		$data['footer_js'] = put_footers();
		
		$this->load->view('templates/header', $data);
		$this->load->view('angularjs/read', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function hello() {
		$data['title'] = 'Hello Angularjs';
		
		$this->load->view('angularjs/hello', $data);
	}
}