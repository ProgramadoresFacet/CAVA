<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('personas_model');
	$this->load->model('tipo_pagos_model');
	$this->load->model('ticket_model');
}
	
	public function index()
	{		
		$this->load->view('commons/header_menu_view');
		$this->load->view('ticket_view');
		$this->load->view('commons/footer_view');
	}

	public function codigo($id = null){
		if($id == null){
			$id = $this->input->post('codigo');
			if(is_null($id) || empty($id)){				
				redirect('ticket');
			}
		}		
		$data['tickets'] = $this->ticket_model->get_ticket($id);
		if($data['tickets'] == NULL){	
			$data['alert'] = TRUE;
			$this->load->view('commons/header_menu_view');
			$this->load->view('ticket_view',$data);
			$this->load->view('commons/footer_view');	
			//redirect('ticket');
		}else{
			$data['mostrar'] = TRUE;
			$this->load->view('commons/header_menu_view');
			$this->load->view('ticket_view',$data);
			$this->load->view('commons/footer_view');
		}		
	}

	public function cambiar_a_pagado($id){
		$data = [
			'id_estado'    => 3
		];
		$this->ticket_model->update_pagado($id, $data);
		$this->codigo($id);
	}
}