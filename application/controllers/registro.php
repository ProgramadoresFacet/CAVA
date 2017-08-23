<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

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
		$data['registro_menu'] = TRUE; //para agregar la class current y quede de color el menu al abrir la pag
		$this->load->view('commons/header_menu_view', $data);
		$this->load->view('registro_view',$data);
		$this->load->view('commons/footer_view');
	}

	public function nuevo(){
		$this->validar();
    	if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
        	$data 	  = [
	        	'nombre'   => strtoupper($this->input->post('nombre')),
	        	'apellido' => strtoupper($this->input->post('apellido')),
	        	'mail'     => $this->input->post('mail'),
	        	'id_rol'   => strtoupper($this->input->post('id_rol')),
	        	'id_pais'  => strtoupper($this->input->post('id_pais'))
        	];

        	if($this->personas_model->insert($data))
        		$data['success_reg'] = 'Registro insertado correctamente';
        	else
        		$data['error_reg'] = 'Error al insertar el nuevo registro';

        	$data['roles'] =  $this->rol_model->get();
			$data['paises'] = $this->pais_model->get();
			$data['registro_menu'] = TRUE; //para agregar la class current y quede de color el menu al abrir la pag
        	$this->load->view('commons/header_menu_view',$data);
		    $this->load->view('registro_view',$data);
		    $this->load->view('commons/footer_view');


        }
	}


	public function modificar($id = null){
		if(is_null($id))
			redirect('participantes');

		$personas = $this->personas_model->get_id($id);
		
		if(count($personas) > 0 ){

			foreach ($personas as $persona) {
				$data['nombre']   = $persona->nombre;
				$data['apellido'] = $persona->apellido;
				$data['mail']	  = $persona->mail;
				$data['id_rol']	  = $persona->id_rol;
				$data['id_pais']  = $persona->id_pais;
			}
			$data['id_persona'] = $id;
			$data['roles'] 		=  $this->rol_model->get();
			$data['paises'] 	= $this->pais_model->get();
			$this->load->view('commons/header_menu_view');
			$this->load->view('registro_update_view',$data);
			$this->load->view('commons/footer_view');
		}
		else
			redirect('participantes');	
	}

	public function actualizar(){
		$this->validar();
    	if($this->form_validation->run() != FALSE){

    		$data 	  = [
	        	'nombre'   => strtoupper($this->input->post('nombre')),
	        	'apellido' => strtoupper($this->input->post('apellido')),
	        	'mail'     => $this->input->post('mail'),
	        	'id_rol'   => strtoupper($this->input->post('id_rol')),
	        	'id_pais'  => strtoupper($this->input->post('id_pais'))
        	];
        	
        	if($this->personas_model->update($this->input->post('id_persona'),$data))
        		$data['success_reg'] = 'Registro actualizado correctamente';
        	else
        		$data['error_reg']   = 'Error al actualizar el registro';
        }
        
    	$data['id_rol']     = $this->input->post('id_rol');
        $data['id_pais']    = $this->input->post('id_pais');
        $data['id_persona'] = $this->input->post('id_persona');
		$data['roles']      = $this->rol_model->get();
		$data['paises']     = $this->pais_model->get();
    	$this->load->view('commons/header_menu_view');
	    $this->load->view('registro_update_view',$data);
	    $this->load->view('commons/footer_view');
	}

	private function validar(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'min_length[3]');
        $this->form_validation->set_rules('apellido', 'Apellido', 'min_length[3]');
        $this->form_validation->set_rules('mail', 'Mail', 'min_length[6]|valid_email');
        $this->form_validation->set_message('min_length','El campo debe contener al menos 3 caracteres');
        $this->form_validation->set_message('valid_email','Mail debe  tener un formato válido');
	}

	public function eliminar($id = null){
		if(is_null($id))
			redirect('participantes');

		if($this->personas_model->delete($id)){
			$data['eliminado'] = true;
			$this->load->view('commons/header_menu_view');
			$data['personas'] = $this->personas_model->get();
			$this->load->view('participantes_view',$data);
			$this->load->view('commons/footer_view');
		}
		
	}




}
