<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class personas_model extends CI_model {

	/*Devuelve todos los personas si se omite la condicion
	  Devuelve los personas si se agrega una condicion en un array ejemplo
	get(['nombre' => 'maria']) */
	
	function get($condition = null){
		$this->db->select('*');
		$this->db->from('personas p');
		$this->db->join('rol r', 'p.id_rol = r.id_rol');
		$this->db->join('pais pa', 'p.id_pais = pa.id_pais');
		if($condition != null)
			$this->db->where($condition);
		$this->db->order_by('nombre');
		$query = $this->db->get();
		return $query->result();
	}

	//devuelve un persona segun un ID
	function get_id($id = null){
		if(is_null($id))
			return false;

		$this->db->where('id_persona',$id);
		$query = $this->db->get('personas');
		return $query->result();
	}

	//Devuelve los personas segun una cadena
	function get_like($string){
		$this->db->like('nombre',$string);
		$this->db->or_like('apellido',$string);
		$this->db->or_like('mail',$string);
		$this->db->or_like('id_tipo',$string);
		$this->db->or_like('pagado',$string);
		$query = $this->db->get('personas');
		return $query->result();
	}

	/*
	data es un array de la forma
	data = [
		'nombre'   => '...',
		'apellido' => '...',
		'mail'     => '...',
		'pagado'   => '...',
		'id_tipo'  => '...'
	]
	*/
	function insert($data){
		if(empty($data))
			return false;

		$this->db->insert('personas',$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	/*
	id de la fila a actualizar
	data es un array de la forma
	data = [
		'nombre'   => '...',
		'apellido' => '...',
		'mail'     => '...',
		'pagado'   => '...',
		'id_tipo'  => '...'
	]
	*/
	function update($id,$data){
		if(is_null($id) || empty($data))
			return false;

		$this->db->where('id_persona',$id);
		$this->db->update('personas',$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	//elimina segun un id
	function delete($id = null){
		if(is_null($id))
			return false;
		$this->db->where('id_persona',$id);
		$this->db->delete('personas');
		return ($this->db->affected_rows() == 1) ? true : false;
	}

}
