<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ticket_model extends CI_model {


	
	function get($id_persona = null){

		if(is_null($id_persona)){
		$sql = "SELECT t.id_trabajo as trabajo , t.* ,ti.*,e.*,tp.* from 
				trabajos t left join ticket ti 
				on t.id_trabajo = ti.id_trabajo 
				left join estado e on e.id_estado = ti.id_estado
				left join tipo_pagos tp on ti.id_tipo_pago = tp.id_tipo_pago
				";
		}
		else{
			$sql = "SELECT t.id_trabajo as trabajo , t.* ,ti.*,e.*,tp.* from 
				ticket ti left join trabajos t 
				on t.id_trabajo = ti.id_trabajo 
				left join estado e on e.id_estado = ti.id_estado
				left join tipo_pagos tp on ti.id_tipo_pago = tp.id_tipo_pago
			    WHERE ti.id_persona = ".$id_persona;
		}
		
		$query = $this->db->query($sql);
		return $query->result();
	}


	function insert($data){
		if(empty($data))
			return false;

		$this->db->insert('ticket',$data);
		return ($this->db->affected_rows() == 1) ? true : false;

	}

	function get_ticket($id_ticket = null){

		$sql = "SELECT t.id_trabajo as trabajo , t.* ,ti.*,e.*,tp.*, p.*,r.*,pa.* from 
				ticket ti left join trabajos t 
				on t.id_trabajo = ti.id_trabajo 
				left join estado e on e.id_estado = ti.id_estado
				left join tipo_pagos tp on ti.id_tipo_pago = tp.id_tipo_pago
				left join personas p on p.id_persona = ti.id_persona
				left join pais pa on pa.id_pais = p.id_pais
				left join rol r on r.id_rol = p.id_rol 
			    WHERE ti.id_ticket = ".$id_ticket;
		
		$query = $this->db->query($sql);
		return $query->result();
	}	

	function get_ultimo_ticket_id(){
		$this->db->select_max('id_ticket');
        $query = $this->db->get('ticket')->result();
        foreach ($query as $key) {
            if(is_null($key->id_ticket))
                return 0;
            else
                return $key->id_ticket;
        }  
	}

}
