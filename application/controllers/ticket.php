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
		$this->enviar_email($id);
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

	public function enviar_email($id){
		$data = $this->ticket_model->get_ticket($id);
		foreach ($data as $ticket): 
			$mail = $ticket->mail; 
			$apellido = $ticket->apellido;
			$nombre = $ticket->nombre;
			$rol = $ticket->rol;
		endforeach;

		$cuepo_email = "Estimado Sr/Sra ".$apellido.", ".$nombre.". 
						Nos dirigimos a ud con el fin de entregarle por este medio el Certificado del Congreso CAVA 2017 debido a su participacion como ".$rol.". 
							Muchas gracias.";
		
		$pdfadjunto = $this->certificado_adjunto($id);

		$this->mail = new my_phpmailer;
		$this->mail->IsSMTP();		
		//$this->mail->SMTPDebug = 2;
		
		$this->mail->Host = "smtp.gmail.com";
		$this->mail->SMTPSecure = "ssl";
		$this->mail->Port = 465;
		$this->mail->SMTPAuth = true;
		$this->mail->Username = $this->config->item('mail');
		$this->mail->Password = $this->config->item('pass');

		$this->mail->From = $this->config->item('mail');
		$this->mail->FromName = "CAVA";
		$this->mail->AddAddress($mail, "Cava");

		$this->mail->Subject = "CAVA 2017 - Certificado";
		$this->mail->Body = $cuepo_email;

		$this->mail->addStringAttachment($pdfadjunto, 'certificado.pdf');

		//$mail->WordWrap = 100;

		if (!$this->mail->Send()) {
			echo "no se envio";
		}		
	}

	public function certificado_adjunto($id){
		$data['ticket'] = $this->ticket_model->get_ticket($id);
		$html = $this->load->view('certificado_print', $data,true);
		$stylesheet = file_get_contents(base_url('/docs/styles2.css'));
		$this->m_pdf->pdf->WriteHTML($stylesheet,1);
		$this->m_pdf->pdf->WriteHTML($html,2);
		return $this->m_pdf->pdf->Output('', 'S');		
	}
}