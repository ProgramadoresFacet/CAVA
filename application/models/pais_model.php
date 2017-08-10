<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pais_model extends CI_model {

	function get(){
		return $this->db->get('pais')->result();
	}
}
