<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('escriben_model');
	}


	public function index()
	{		
		$this->load->view('commons/header_menu_view');
		$this->load->view('participantes_view');
		$this->load->view('commons/footer_view');
	}

	public function update($id = null){
		if(is_null($id))
			redirect('participantes');
		$this->load->view('commons/header_menu_view');
		$this->load->view('registro_update_view');
		$this->load->view('commons/footer_view');
	}
}
