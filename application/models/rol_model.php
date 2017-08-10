<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rol_model extends CI_model {

	function get(){
		return $this->db->get('rol')->result();
	}
}
