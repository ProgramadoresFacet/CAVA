<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class trabajos_model extends CI_model {

	/*
	  Devuelve todos los trabajos si se omite la condicion
	  Devuelve los trabajos si se agrega una condicion en un array ejemplo
	  get(['id_participante_paga' => '12'])
	 */
	function get($condition = null){
		if($condition != null)
			$this->db->where($condition);

		$this->db->order_by('titulo');
		$query = $this->db->get('trabajos');
		return $query->result();
	}

	//devuelve un trabajo segun un id
	function get_id($id = null){
		if(is_null($data))
			return false;

		$this->db->where('id_trabajo',$id);
		$query = $this->db->get('trabajos');
		return $query->result();
	}

	//Devuelve los trabajos segun una cadena
	function get_like($string){
		$this->db->like('titulo',$string);
		$query = $this->db->get('trabajos');
		return $query->result();
	}

	/*
	data es un array de la forma
	data = [
		'titulo'   => '...',
		'id_participante_paga' => '...'
	]
	*/
	function insert($data){
		if(empty($data))
			return false;

		$this->db->insert('trabajos',$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	/*
	id de la fila a actualizar
	data es un array de la forma
	data = [
		'titulo'   => '...',
		'id_participante_paga' => '...'
	]
	*/
	function update($id,$data){
		if(is_null($id) || empty($data))
			return false;

		$this->db->where('id_trabajo',$id);
		$this->db->update('trabajos',$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	//elimina segun un id
	function delete($id = null){
		if(is_null($id))
			return false;
		$this->db->where('id_trabajo',$id);
		$this->db->delete('trabajos');
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	/*
	  Devuelve todos los trabajos relacionados con participantes si se omite el id
	  Devuelve un trabajo relacionado con participantes si se usa un id 
	 */
	function por_participantes($id = null){
		$this->db->select('*');
		$this->db->from('trabajos t');
		$this->db->join('escriben e', 't.id_trabajo = e.id_trabajo');
		$this->db->join('participantes p', 'p.id_participante = e.id_participante');
		if(!is_null($id))
			$this->db->where('t.id_trabajo',$id);
		$query = $this->db->get();
		return $query->result();
	}

}
