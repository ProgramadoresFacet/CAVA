<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_pagos_model extends CI_model {

	/*Devuelve todos los personas si se omite la condicion
	  Devuelve los personas si se agrega una condicion en un array ejemplo
	get(['nombre' => 'maria']) */
	
	function get($condition = null){
		$this->db->select('*');
		$this->db->from('tipo_pagos');
		
		if($condition != null)
			$this->db->where($condition);
		
		$query = $this->db->get();
		return $query->result();
	}

	function get_monto($id = null){
		if($id == null)
			return false;

		$this->db->select('monto');
		$this->db->from('tipo_pagos');
		$this->db->where('id_tipo_pago',$id);
		$query = $this->db->get()->result();
		foreach ($query as $key ) {
			return $key->monto;
		}
		
	}

	

}
