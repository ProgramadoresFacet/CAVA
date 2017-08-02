<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('participantes_model');
	}


	public function index()
	{
		
		$this->load->view('commons/header_menu_view');
		echo '<pre>';
		$data = [
			'nombre' => 'gustavo',
			'apellido' => 'benzt',
			'mail' => 'mail@mail.com',
			'pagado' => 1,
			'id_tipo' => 1
		];

		$result = $this->participantes_model->get_like();	
		print_r($result);
		echo '</pre>';
		$this->load->view('participantes_view');
		$this->load->view('commons/footer_view');
	}
}
