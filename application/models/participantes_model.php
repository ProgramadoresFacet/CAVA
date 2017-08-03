<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class participantes_model extends CI_model {

	function get($condition = null){
		if($condition != null)
			$this->db->where($condition);

		$this->db->order_by('nombre');
		$query = $this->db->get('participantes');
		return $query->result();
	}


	function get_id($id = null){
		if(is_null($data))
			return false;

		$this->db->where('id_participante',$id);
		$query = $this->db->get('participantes');
		return $query->result();
	}

	function get_like($string){
		$this->db->like('nombre',$string);
		$this->db->or_like('apellido',$string);
		$this->db->or_like('mail',$string);
		$this->db->or_like('id_tipo',$string);
		$this->db->or_like('pagado',$string);
		$query = $this->db->get('participantes');
		return $query->result();
	}

	function insert($data){
		if(empty($data))
			return false;

		$this->db->insert('participantes',$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	function update($id,$data){
		if(is_null($id) || empty($data))
			return false;

		$this->db->where('id_participante',$id);
		$this->db->update('participantes',$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	function delete($id = null){
		if(is_null($id))
			return false;
		$this->db->where('id_participante',$id);
		$this->db->delete('participantes');
		return ($this->db->affected_rows() == 1) ? true : false;
	}

}
