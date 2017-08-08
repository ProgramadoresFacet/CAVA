<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class escriben_model extends CI_model {

	/*
	data es un array de la forma
	data = [
		'id_participante'   => '...',
		'id_trabajo' => '...'
	]
	*/
	function insert($data){
		if(empty($data))
			return false;

		$this->db->insert('escriben',$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}
	
	function update($id_participante = null , $id_trabajo = null,$data){
		if(is_null($id_participante) && is_null($id_trabajo) && empty($data))
			return false;
		$this->db->where('id_participante',$id_participante);
		$this->db->where('id_trabajo',$id_trabajo);
		$this->db->update('escriben',$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	function delete($id_participante = null , $id_trabajo = null){
		if(is_null($id_participante) && is_null($id_trabajo))
			return false;
		$this->db->where('id_participante',$id_participante);
		$this->db->where('id_trabajo',$id_trabajo);
		$this->db->delete('escriben');
		return ($this->db->affected_rows() == 1) ? true : false;
	}

}
