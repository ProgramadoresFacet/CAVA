<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informe extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('ticket_model');		
	}
	
	public function index() {	
		$data['informe_menu'] = TRUE; //para agregar la class current y quede de color el menu al abrir la pag
		$data['tickets'] = $this->ticket_model->get_ticket_pagado();
		$this->load->view('commons/header_menu_view',$data);
		$this->load->view('informe_view',$data);
		$this->load->view('commons/footer_view');
	}
}

?>