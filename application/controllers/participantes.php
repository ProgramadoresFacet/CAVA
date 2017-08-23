<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('personas_model');
	}


	public function index()
	{	
		$data['participantes_menu'] = TRUE; //para agregar la class current y quede de color el menu al abrir la pag
		$this->load->view('commons/header_menu_view',$data);
		$data['personas'] = $this->personas_model->get();		
		$this->load->view('participantes_view',$data);
		$this->load->view('commons/footer_view');
	}



}
