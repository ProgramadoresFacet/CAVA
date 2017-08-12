<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class escriben_model extends CI_model {

	public function get($id_trabajo = null){
		$this->db->select('*');
		$this->db->from('personas p');
		$this->db->join('escriben e', 'p.id_persona = e.id_persona');
		$this->db->join('trabajos t', 'e.id_trabajo = t.id_trabajo');
		if(!is_null($id_trabajo))
			$this->db->where('t.id_trabajo', $id_trabajo); 
		return $this->db->get()->result();
	}

}
