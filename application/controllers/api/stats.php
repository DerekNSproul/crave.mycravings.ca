<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Stats extends REST_Controller
{
	function data_get() {
		$this->response(array('gender' => $this->gender()),200);
	}
	
	private function gender() {
		$colors = array("#89A54E", "#4572A7", "#AA4643", "#80699B", "#3D96AE", "#DB843D", "#92A8CD", "#A47D7C", "#B5CA92");
		$this->load->database();
		$this->db->select('campus, counter');
		$query = $this->db->get_where('statistics', array('type' => 'total', stat => 'survey'));
		$response = $query->result();
		$campus = $data = array();
		$table = '<table cellpadding="0" cellspacing="0"><tbody><tr><th>Campus</th><th>Total</th><th>Female</th><th>Male</th></tr>';
		$i = 0;
		foreach ($response as $var) {
			array_push($campus, $var->campus);
			
			$this->db->select('stat, counter');
			$query = $this->db->get_where('statistics', array('campus' => $var->campus, 'type' => 'gender'), 2);
			$output = $query->result();
			$gender_data = array();
			$gender_categories = array();
			$table .= '<tr><td>'.$var->campus.'</td><td>'.$var->counter.'</td>';
			
			foreach ($output as $gender) {
				$table .= '<td>'.$gender->counter.'</td>';
				array_push($gender_data,intval($gender->counter));
				array_push($gender_categories,$gender->stat);
			}
			$table .= '</tr>';
			$drilldown = array(
				'name' => $var->campus.' Gender',
				'categories' => $gender_categories,
				'data' => $gender_data,
				'color' => $colors[$i]
			);
				
			$info = array('y' => intval($var->counter), 'color' => $colors[$i], 'drilldown' => $drilldown);
			array_push($data, $info);
			$i++;
		}
		
		$table .= '</tbody></table>';
		
		return array('campuses' => $campus, 'data' => $data, 'table' => $table);
	}
}