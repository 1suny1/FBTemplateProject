<?php

// Add to header of your file
use FacebookAds\Object\AdUser;

class Fbsdk_Model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	public function get_account_info() {
		// Add after Api::init()
		$me = new AdUser('me');
		$my_adaccount = $me->getAdAccounts()->current();
		
		return $my_adaccount->getData();
	}
}