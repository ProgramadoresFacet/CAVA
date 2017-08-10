<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('rol_model');
		$this->load->model('pais_model');
		$this->load->model('personas_model');
	}


	public function index()
	{
		
		$data['roles'] =  $this->rol_model->get();
		$data['paises'] = $this->pais_model->get();
		$this->load->view('commons/header_menu_view');
		$this->load->view('registro_view',$data);
		$this->load->view('commons/footer_view');
	}

	public function nuevo(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'min_length[3]');
        $this->form_validation->set_rules('apellido', 'Apellido', 'min_length[3]');
        $this->form_validation->set_rules('mail', 'Mail', 'min_length[6]|valid_email');
        $this->form_validation->set_message('min_length','El campo debe contener al menos 3 caracteres');
        $this->form_validation->set_message('valid_email','Mail debe  tener un formato válido');
    	if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
        	$data 	  = [
	        	'nombre'   => $this->input->post('nombre'),
	        	'apellido' => $this->input->post('apellido'),
	        	'mail'     => $this->input->post('mail'),
	        	'id_rol'   => $this->input->post('id_rol'),
	        	'id_pais'  => $this->input->post('id_pais')
        	];

        	if($this->personas_model->insert($data))
        		$data['success_reg'] = 'Registro insertado correctamente';
        	else
        		$data['error_reg'] = 'Erro al insertar el nuevo registro';

        	$data['roles'] =  $this->rol_model->get();
			$data['paises'] = $this->pais_model->get();
        	$this->load->view('commons/header_menu_view');
		    $this->load->view('registro_view',$data);
		    $this->load->view('commons/footer_view');


        }
	}


}
