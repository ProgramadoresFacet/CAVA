<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bono extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('personas_model');
	$this->load->model('tipo_pagos_model');
}


	public function pagos($id = null){

		if($id == null)
			redirect('participantes');

		$data['personas']= $this->personas_model->get(['id_persona' => $id]);
		$data['tipopago']= $this->tipo_pagos_model->get();
		$this->load->view('commons/header_menu_view');
		$this->load->view('bono_view', $data);
		$this->load->view('commons/footer_view');

		
		/*
		echo '<pre>';
		print_r($data['persona']);
		echo '</pre>';
		*/
	}
}
