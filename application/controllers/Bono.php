<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bono extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('personas_model');
	$this->load->model('tipo_pagos_model');
	$this->load->model('ticket_model');
	$this->load->library('M_pdf');
}


	public function pagos($id = null){

		if($id == null)
			redirect('participantes');

		$data['personas'] = $this->personas_model->get(['id_persona' => $id]);
		$data['tipopago'] = $this->tipo_pagos_model->get();
		$data['trabajos'] = $this->ticket_model->get();
		$data['trabajos_pagados'] = $this->ticket_model->get($id);
		$data['idpersona']= $id;
		$this->load->view('commons/header_menu_view');
		$this->load->view('bono_view', $data);
		$this->load->view('commons/footer_view');

		
		/*
		echo '<pre>';
		print_r($data['persona']);
		echo '</pre>';
		*/
	}

	public function registrar_asistencia(){
		$id_tipo_pago = $this->input->post('tipopago');
		$pesos =  $this->tipo_pagos_model->get_monto($id_tipo_pago) * $this->config->item('precio_cambio');
		$id_persona = $this->input->post('idpersona');

		$data = [
			'id_estado'    => 2,
			'pesos' 	   => $pesos,
			'id_tipo_pago' => $id_tipo_pago,
			'id_trabajo'   => null,
			'id_persona'   => $id_persona
		];


		$html = '<div>HOLA</div>';
		if($this->ticket_model->insert($data)){
			//echo 'generar bono';	
			$this->m_pdf->pdf->writeHTML($html);
			$this->m_pdf->pdf->Output($id_persona.'.pdf', 'I');
		}
		else{
			echo 'error';
		}
	}

	public function registrar_trabajos($id_persona = null,$id_trabajo = null){
		if($id_trabajo == null)
			echo 'nada';
		$pesos =  $this->tipo_pagos_model->get_monto(1) * $this->config->item('precio_cambio'); 
		$data = [
			'id_estado'    => 2,
			'pesos' 	   => $pesos,
			'id_tipo_pago' => 1,
			'id_trabajo'   => $id_trabajo,
			'id_persona'   => $id_persona
		];

		if($this->ticket_model->insert($data)){
			echo 'generar bono';
		}
		else{
			echo 'error';
		}
	}

	public function imprimir($id = null){
		echo $id;
	}
}
