<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

function jdbg($s)
{
    $fp = fopen('/home/jacques/logs/journey_log.txt', 'a');
    fwrite($fp, $s . "\n");
    fclose($fp);
}

function AOrB($s)
{
    $answer = 'a';
    if(preg_match('/no,|nothing/i', $s)) $answer = 'b';
    return $answer;
}

function abcd($s)
{
    $answer = 'a';
    if($s == 3) $answer = 'b';
    elseif($s == 2) $answer = 'c';
    elseif($s == 1) $answer = 'd';
    return $answer;
}

function prntPost($field, $name, $bla)
{
    jdbg("$name : '" . $this->post($field) . "'");
}

function printPosts()
{
    prntPost('fname', 'First Name', 'required');
    prntPost('lname', 'Last Name', 'required');
    prntPost('cravemost', 'Craving', 'required');
    prntPost('magazine', 'Magazine', 'required');
    prntPost('spiritual', 'Spiritual Journey', 'required');
    prntPost('interest', 'Interest', 'required');
    prntPost('gender', 'Gender', 'required');
    prntPost('major', 'Area of Study', 'required');	// CHANGE 'Area of Study' to 'Major'?
    prntPost('campus', 'Campus', 'required|campus_validation');
    prntPost('international', 'International', 'required');
    prntPost('number', 'Phone', 'required');
    prntPost('email', 'Email', 'required');
}

class Journey extends REST_Controller
{

	private $access_token = '';

	private function campus_validation($str) { return $str != '0'; }
	
    function user_post()
    {
    	
//jdbg('----------------------------------------------');
//jdbg('in user_post()');
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
		
//                $this->printPosts();
                
		if ($this->form_validation->run() == FALSE)
		{
//jdbg('validations failed!');
                    
			//failed
			$this->response(validation_errors(), 400);
		}
		else
		{
			//$this->load->model('Journey_data', '', TRUE);

//jdbg('preparing data to send');
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
				//2523 => $this->post('major'),
				//6 => $this->post('year'), 
				3545 => $this->post('residence'), 
				3547 => $this->post('international'),
				//3549 => $this->post('gender'), 
				3548 => $this->post('campus'),
				4260 => $this->filter($this->post('spiritual'), $this->post('magazine'), $interest),
				5140 => $this->post('notes')
			);
			
			$person = array (
				'first_name' => ucwords(strtolower($this->post('fname'))),
				'last_name' => ucwords(strtolower($this->post('lname'))),
				'email' => $this->post('email'),
                                'year_in_school' => $this->post('year'), 
				'phone_number' => $this->post('number'),
                                'major' => $this->post('major'),
                                'gender' => $this->post('gender'),
                                'campus' => $this->post('campus')
			);
//jdbg('--------------------------');
//jdbg($this->post('email'));
    /*                    
                        $this->tstflt('a', 'a', 'a');
                        $this->tstflt('a', 'a', 'b');
                        $this->tstflt('b', 'a', 'a');
                        $this->tstflt('a', 'b', 'a');
                        $this->tstflt('a', 'b', 'b');
                        $this->tstflt('a', 'c', 'a');
                        $this->tstflt('b', 'b', 'a');
                        $this->tstflt('b', 'b', 'b');
                        $this->tstflt('b', 'c', 'a');
                        $this->tstflt('b', 'c', 'b');
                        $this->tstflt('b', 'a', 'b');
                        $this->tstflt('a', 'd', 'a');
                        $this->tstflt('a', 'd', 'b');
                        $this->tstflt('a', 'c', 'b');
                        $this->tstflt('b', 'd', 'a');
                        $this->tstflt('b', 'd', 'b');
	*/			
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
    
    
    function prntPost($field, $name, $bla)
    {
        jdbg("$name : '" . $this->post($field) . "'");
    }

    function printPosts()
    {
        $this->prntPost('fname', 'First Name', 'required');
        $this->prntPost('lname', 'Last Name', 'required');
        $this->prntPost('cravemost', 'Craving', 'required');
        $this->prntPost('magazine', 'Magazine', 'required');
        $this->prntPost('spiritual', 'Spiritual Journey', 'required');
        $this->prntPost('interest', 'Interest', 'required');
        $this->prntPost('gender', 'Gender', 'required');
        $this->prntPost('major', 'Area of Study', 'required');	// CHANGE 'Area of Study' to 'Major'?
        $this->prntPost('campus', 'Campus', 'required|campus_validation');
        $this->prntPost('international', 'International', 'required');
        $this->prntPost('number', 'Phone', 'required');
        $this->prntPost('email', 'Email', 'required');
    }
    
    
    function tstflt($q1, $q2, $q3)
    {
        if($q1 == 'a') $q1 = 'some answer';
        else $q1 = 'no, thanks';

        $q2 = (1 + (ord('d') - ord($q2)));

        if($q3 == 'a') $q3 = 'some answer';
        else $q3 = 'do nothing right now';

        $this->filter($q3, $q1, $q2);
    }
    
    
    public function filter($journey, $magazine, $gauge)
    {
        
$paramsfilter = "m: $magazine | h: $gauge | j: $journey";
$q1 = AOrB($magazine);
$q3 = AOrB($journey);
        

         $matches = array();
        if(preg_match('/[0-9]/', $gauge, $matches)) $gauge = $matches[0];
$q2 = abcd($gauge);
        if(preg_match('/no,|nothing/i', $magazine)) $magazine = false;
        if(preg_match('/no,|nothing/i', $journey)) $journey = false;

       
// Mild is the most likely result; default there to simplify the logic
        $followupPriority = 'Mild';

        // First check for noninterest
        if (!$magazine && ($gauge == 1) && !$journey) {
            $followupPriority = 'Not Interested';
        }

        // Next check for hot contacts
        else if ($magazine && ($gauge >= 4)) {
            $followupPriority = 'Hot';
        }
        else if (!$magazine && ($gauge >= 4) && $journey) {
            $followupPriority = 'Hot';
        }

        // Last check for medium contacts
        else if ($magazine && ($gauge == 3)) {
            $followupPriority = 'Medium';
        }
        else if ($magazine && ($gauge == 2) && $journey) {
            $followupPriority = 'Medium';
        }
//jdbg("$q1 $q2 $q3 : $followupPriority  \t $paramsfilter");
        return $followupPriority;
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