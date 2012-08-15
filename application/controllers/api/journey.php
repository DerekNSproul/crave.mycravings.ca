<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Journey extends REST_Controller
{

	private $access_token = '';

	private function campus_validation($str) { return $str != '0'; }
	
    function user_post()
    {
    	


		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('cravemost', 'Craving', 'required');
		$this->form_validation->set_rules('magazine', 'Magazine', 'required');
		$this->form_validation->set_rules('spiritual', 'Spiritual Journey', 'required');
		$this->form_validation->set_rules('interest', 'Interest', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('major', 'Area of Study', 'required');	// CHANGE 'Area of Study' to 'Major'?
		$this->form_validation->set_rules('campus', 'Campus', 'required|campus_validation');
		$this->form_validation->set_rules('international', 'International', 'required');
		$this->form_validation->set_rules('number', 'Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			//failed
			$this->response(validation_errors(), 400);
		}
		else
		{
			//$this->load->model('Journey_data', '', TRUE);

			// For missionHub fields correspondance
			$interestMap = array(
                1 => '1)Not',
                2 => '2)',
                3 => '3)Maybe',
                4 => '4)',
                5 => '5)Very',
			);
			$interest = $this->post('interest');
			if ( isset($interestMap[$interest]) ) {
                $interest = $interestMap[$interest];
			}
			
			$answers = array(
				3539 => $this->post('cravemost'), 
				3540 => $this->post('magazine'),
				3542 => $this->post('spiritual'),
				3541 => $interest, 
				2523 => $this->post('major'),
				//6 => $this->post('year'), 
				3545 => $this->post('residence'), 
				3547 => $this->post('international'),
				3549 => $this->post('gender'), 
				3548 => $this->post('campus') 
			);
			
			$person = array (
				'firstName' => ucwords(strtolower($this->post('fname'))),
				'lastName' => ucwords(strtolower($this->post('lname'))),
				'email' => $this->post('email'),
                                'yearInSchool' => $this->post('year'), 
				'phone_number' => $this->post('number'),
                                'campus' => $this->post('campus')
			);
				
			//$this->load->model('Journey_data', '', TRUE);
   			$this->response(
   						$this->mhub_create(
				   							$person, 
				   							$answers, 
				   							($this->post('data') != false)
										), 
						200
					); // 200 being the HTTP response code
			//$this->response($returnable, 200); // 200 being the HTTP response code
		}
        
    }

	public function mhub_create(Array $person, Array $answers = NULL, $data)
	{
		if($this->access_token == '') {

			//check curl
			$this->load->library(array('curl','rest'));
			
			$message = $this->rest->post('https://www.missionhub.com/oauth/access_token',
			array (
				'grant_type' => 'none',
				'client_id' => '9',
				'client_secret' => 'f6ffd7ec1f97569b5abaf981630f201db4ee1784112882004a57bc615e5ca436'
			));
			
			$this->access_token = $message->access_token;
		}
				
		//check curl
		$this->load->library(array('curl','rest'));
		$this->load->helper('url');
		
		if (0) {
            echo "<pre>";
            echo "access token: ".var_export($this->access_token,1)."<br/>";
            echo "person: ".var_export($person,1)."<br/>";
            echo "answers: ".var_export($answers,1)."</br/>";
            echo "</pre>";
            exit;
        }
		
		$params = array(
			'access_token' => $this->access_token,
			'org_id' => 6411,
			'user_id' => 95017, //From Josh
			'assign_to_me' => false,
			'person' => $person,
			'answers' => $answers
		);
		$message = $this->rest->post('http://www.missionhub.com/api/v2/contacts.json', $params, 'json');
				

		return $message;
	}

	
}