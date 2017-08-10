<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('personas_model');
	}


	public function index()
	{		
		$this->load->view('commons/header_menu_view');
		/*
		echo '<pre>';
		print_r(  $this->personas_model->get() );
		echo '</pre>';
		*/
		$data['personas'] = $this->personas_model->get();

		$this->load->view('participantes_view',$data);
		$this->load->view('commons/footer_view');
	}

	public function alta(){

		
	}

	public function modificar($id = null){
		if(is_null($id))
			redirect('participantes');
		$this->load->view('commons/header_menu_view');
		$this->load->view('registro_update_view');
		$this->load->view('commons/footer_view');
	}

	public function eliminar($id = null){
		if(is_null($id))
			redirect('participantes');
		
	}
}
