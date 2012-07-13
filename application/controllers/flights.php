<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index() {
		$response = array();
		$row = 0;
		if (($handle = fopen("Waikato.csv", "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$response[$row] = array(
					'fname' => $data[0],
					'lname' => $data[1]
				);
				$row++;
			}
			fclose($handle);
		}
		print_r($response[rand(0, $row)]);
	}
}