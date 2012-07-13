<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Journey_data extends CI_Model {

	private $access_token = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
		
	public function mhub_create(Array $person, Array $answers = NULL, $data)
	{
		if($this->access_token == '') {
			$secret = '5f6ffd7ec1f97569b5abaf981630f201db4ee1784112882004a57bc615e5ca436';
			$client_id = '9';
			
			//check curl
			$this->load->library(array('curl','rest'));
			
			$message = $this->rest->post('https://www.missionhub.com/oauth/access_token',
			array (
				'grant_type' => 'none',
				'client_id' => $client_id,
				'client_secret' => $secret
			));
			
			$this->access_token = $message->access_token;
		}
		
		$org_id = $this->mub_org_id();
		
		//check curl
		$this->load->library(array('curl','rest'));
		$this->load->helper('url');
		
		$params = array(
			'access_token' => $this->access_token,
			'org_id' => 6411,
			'user_id' => 95017, //From Josh
			'assign_to_me' => false,
			'person' => $person,
			'answers' => $answers
		);
		var_dump($person, $answers);
		die();
//		$message = $this->rest->post('http://www.missionhub.com/api/v2/contacts.json', $params);
				

		return 'complete';
	}
		
	
	
}