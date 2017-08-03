<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {


	public function index()
	{
		
		$this->load->view('commons/header_menu_view');
		$this->load->view('registro_view');
		$this->load->view('commons/footer_view');
	}
}
