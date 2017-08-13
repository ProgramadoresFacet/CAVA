<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('personas_model');
	$this->load->model('tipo_pagos_model');
	$this->load->model('ticket_model');
	$this->load->library('M_pdf');
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

	public function imprimir_identificacion($id = null){
		if(is_null($id))
			redirect('ticket');
		
		$data['ticket'] = $this->ticket_model->get_ticket($id);
		$html = $this->load->view('identificacion_print', $data,true);
		$stylesheet = file_get_contents(base_url('/docs/styles.css'));
		$this->m_pdf->pdf->WriteHTML($stylesheet,1);
		$this->m_pdf->pdf->WriteHTML($html,2);
		$this->m_pdf->pdf->Output($id.'ticket.pdf', 'I');
	}
}