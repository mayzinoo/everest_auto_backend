<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leasing_model extends CI_Model {
	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

function gstleasingvehilist()
		{
			
			$query = $this->db->get("leasing");
			if($query->num_rows()<=0)
			{
				$tags['']="...";
			}
			$tags['']="...";
			foreach($query->result() as $row):
				$tags[$row->car_plate]=$row->car_plate;
			endforeach;
			return $tags;
		}

}

?>