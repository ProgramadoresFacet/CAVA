<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificados extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('ticket_model');
	}
	
	public function index()
	{	
		$data['certificados_menu'] = TRUE; //para agregar la class current y quede de color el menu al abrir la pag
		$this->load->view('commons/header_menu_view',$data);
		$this->load->view('certificados_view');
		$this->load->view('commons/footer_view');
	}
}
?>