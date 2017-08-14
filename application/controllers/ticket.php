<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('personas_model');
	$this->load->model('tipo_pagos_model');
	$this->load->model('ticket_model');
	$this->load->library('M_pdf');
	$this->load->library('my_phpmailer');
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

		$this->load->library('email');
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

	public function enviar_email(){				
		$this->mail = new my_phpmailer;
		$this->mail->IsSMTP();		
		$this->mail->SMTPDebug = 2;
		
		$this->mail->Host = "smtp.gmail.com";
		$this->mail->SMTPSecure = "ssl";
		$this->mail->Port = 465;
		$this->mail->SMTPAuth = true;
		$this->mail->Username = "2017cava@gmail.com";
		$this->mail->Password = "cava1234";

		$this->mail->From = "2017cava@gmail.com";
		$this->mail->FromName = "CAVA";
		$this->mail->AddAddress("2017cava@gmail.com", "Cava");

		$this->mail->Subject = "Contacto";
		$this->mail->Body = "HOla mundo";

		//$mail->WordWrap = 100;

		if ($this->mail->Send()) {
			echo "mail enviado";
		}else{
			echo "no se envio";
		}
		
	}
}