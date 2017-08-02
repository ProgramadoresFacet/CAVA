<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes extends CI_Controller {

	public function index()
	{
		
		$this->load->view('commons/header_menu_view');
		$this->load->view('participantes_view');
		$this->load->view('commons/footer_view');
	}
}
