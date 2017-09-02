<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class certificados_model extends CI_model {



	function insert($data){
		if(empty($data))
			return false;

		$this->db->insert('certificados',$data);
		return ($this->db->affected_rows() == 1) ? true : false;

	}

	function update($id,$data){
		if(is_null($id) || empty($data))
			return false;

		$this->db->where('id_ticket',$id);
		$this->db->update('certificados',$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	function get($id_ticket = null){
		$sql = "
				SELECT p.* , t.* , c.* ,e.* FROM personas p inner join 
				ticket t on p.id_persona = t.id_persona
				left join certificados c on c.id_ticket = t.id_ticket 
				left join estado_certificado e on e.id_estado_certificado = c.id_estado_certificado
				where t.id_estado = 3
			  ";
		if(!is_null($id_ticket))
			$sql .= " and t.id_ticket = " . $id_ticket;
		
		$query = $this->db->query($sql);
		return $query->result();
	}

}
