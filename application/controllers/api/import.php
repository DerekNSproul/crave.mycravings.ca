<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Import extends REST_Controller
{
	function readcsv_get() {
		$response = array();
		$campus = 'Otago';
		$row = 0;
		if (($handle = fopen($campus.".csv", "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				if($data[1] != '')
					$magazine = explode(',', $data[1]);
				else
					$magazine = array();
				$response[$row] = array(
					'gender' => $data[0],
					'magazine' => $magazine,
					'journey' => $data[2],
					'interest' => $data[3],
					'study' => $data[4],
					'year' => $data[5]
				);
				$row++;
			}
			fclose($handle);
		}
		$counter = array();
		foreach($response as $val) {
				foreach($val as $key => $value) {
					if(!empty($value) && !is_array($value)) {
						if(isset($counter[$key])) {
							if(isset($counter[$key][$value]))
								$counter[$key][$value]++;
							else
								$counter[$key][$value] = 1;
						} else {
							$counter[$key] = array($value => 1);
						}
					} else if(is_array($value)) {
						foreach ($value as $magmag) {
							if(isset($counter[$key])) {
								if(isset($counter[$key][$magmag]))
									$counter[$key][$magmag]++;
								else
									$counter[$key][$magmag] = 1;
								
							} else {
								$counter[$key] = array($magmag => 1);
							}
						}
					}
				}
		}
		
		$counter['survey']['total'] = $row;
		
		$this->load->database();
		
		foreach($counter as $key => $value)
			foreach($value as $i_key => $i_value) {
				$this->db->query("call update_stat_total('".$i_key."','".$campus."','".$key."', ".$i_value.")")->result();
			}
		$this->response($counter, 200);
	}
}