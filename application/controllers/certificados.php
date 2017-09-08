<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificados extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ticket_model');
		$this->load->model('certificados_model');
		$this->load->library('M_pdf');
		$this->load->library('my_phpmailer');
	}

	public function index()
	{	
		$data['certificados_menu'] = TRUE; //para agregar la class current y quede de color el menu al abrir la pag
		$this->load->view('commons/header_menu_view',$data);
		$d =$data['personas'] = $this->certificados_model->get();	
		//$this->d($d);	
		$this->load->view('certificados',$data);
		$this->load->view('commons/footer_view');


	}

	public function certificado_adjunto($id){
		$data['ticket'] = $this->ticket_model->get_ticket($id);
		$html 			= $this->load->view('certificado_print', $data,true);
		$stylesheet 	= file_get_contents(base_url('/docs/styles2.css'));
		$this->m_pdf->pdf_A4L->WriteHTML($stylesheet,1);
		$this->m_pdf->pdf_A4L->WriteHTML($html,2);
		return $this->m_pdf->pdf_A4L->Output('', 'S'); //envia el pdf como string		
	}

	public function vista_previa($id = null){
		if(is_null($id))
			redirect('certificados');

		$data['ticket'] = $this->ticket_model->get_ticket($id);
		$html 			= $this->load->view('certificado_print', $data,true);
		$stylesheet 	= file_get_contents(base_url('/docs/styles2.css'));
		$this->m_pdf->pdf_A4L->WriteHTML($stylesheet,1);
		$this->m_pdf->pdf_A4L->WriteHTML($html,2);
		$this->m_pdf->pdf_A4L->Output('certificado.pdf', 'I');
	}

	public function enviar_mail(){
		$id_ticket = $this->input->post('id_ticket');
		$personas  = $this->certificados_model->get($id_ticket);
		foreach ($personas as $ticket): 
			$mail     = $ticket->mail; 
			$apellido = $ticket->apellido;
			$nombre   = $ticket->nombre;
		endforeach;

		$pdfadjunto = $this->certificado_adjunto($id_ticket);

		$this->mail = new my_phpmailer;
		$this->mail->IsSMTP();		
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
		$Body = $this->load->view('cuerpo_mail', $data,true);
		$this->mail->MsgHTML($Body);
		$this->mail->addStringAttachment($pdfadjunto, 'certificado.pdf');
	
		if ($this->mail->Send()) {
			echo $this->certificados_model->update($id_ticket,['id_estado_certificado' => 2]);
		}
		else{
			echo 0;
		}
		
		
		
	}
}

