<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/vendor/autoload.php';

use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

// Add to header of your file
use FacebookAds\Api;

class FacebookLib {
	var $ci;
	
	public function __construct() {
		// Get CI object.
		$this->ci =& get_instance();
		$this->ci->config->load('facebook');
//     	$this->config->load('facebook');
    	
    	$this->init_session();
	}
	
	public function init_session() {
		// Init PHP Sessions
		session_start();
		
		$fb = new Facebook([
				'app_id' => $this->ci->config->item('api_id', 'facebook'),
				'app_secret' => $this->ci->config->item('app_secret', 'facebook'),
		]);
		
		$helper = $fb->getRedirectLoginHelper();
		
		if (!isset($_SESSION['facebook_access_token'])) {
			$_SESSION['facebook_access_token'] = null;
		}
		
		if (!$_SESSION['facebook_access_token']) {
			$helper = $fb->getRedirectLoginHelper();
			try {
				$_SESSION['facebook_access_token'] = (string) $helper->getAccessToken();
			} catch(FacebookResponseException $e) {
				// When Graph returns an error
				echo 'Graph returned an error: ' . $e->getMessage();
				exit;
			} catch(FacebookSDKException $e) {
				// When validation fails or other local issues
				echo 'Facebook SDK returned an error: ' . $e->getMessage();
				exit;
			}
		}
		
		if ($_SESSION['facebook_access_token']) {
// 			echo "You are logged in!";
			
			Api::init(
					$this->ci->config->item('api_id', 'facebook'), // App ID
					$this->ci->config->item('app_secret', 'facebook'),
					$_SESSION['facebook_access_token'] // Your user access token
			);
		} else {
			$permissions = ['ads_management'];
			$loginUrl = $helper->getLoginUrl('http://localhost:8888/TemplateProject/fbsdk/index/', $permissions);
			echo '<a href="' . $loginUrl . '">Log in with Facebook</a>';
		}
	}
}