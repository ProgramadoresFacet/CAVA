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

	

}
