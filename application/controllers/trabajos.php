<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabajos extends CI_Controller {

	public function index()
	{
		
		$this->load->view('commons/header_menu_view');
		$this->load->view('trabajos_view');
		$this->load->view('commons/footer_view');
	}
}
