<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabajos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ticket_model');
		$this->load->model('escriben_model');
	}

	public function index()
	{
		function p($data){
		echo '<br>';
		echo '<pre>';
		print_r($data);
		echo '<pre>';
		echo '<br>';
	    }

		$t = $data['trabajos'] = $this->ticket_model->get();
		//p($t);
		$this->load->view('commons/header_menu_view');
		$this->load->view('trabajos_view',$data);
		$this->load->view('commons/footer_view');
	}

	public function escritos_ajax(){


		$id_trabajo = $this->input->post('id_trabajo');
		$escritores  = $this->escriben_model->get($id_trabajo);
		echo json_encode($escritores);
	}



	
}
