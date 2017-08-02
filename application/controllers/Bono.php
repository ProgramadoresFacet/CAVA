<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bono extends CI_Controller {

	public function index()
	{
		
		$this->load->view('commons/header_menu_view');
		$this->load->view('bono_view');
		$this->load->view('commons/footer_view');
	}
}
