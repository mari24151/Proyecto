<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuario extends CI_Controller {

	public function registro()
	{
		$this->load->view('usuario/registro');
	}

    public function insertar(){

        $this->load->model('Usuario_model','modelo');

        $this->modelo->nombre = $this->input->post('nombre');
        $this->modelo->email = $this->input->post('email');
        $this->modelo->contrasena = $this->input->post('contrasena');

        $insertar = $this->modelo->insertar_usuario($this->modelo);

        if($insertar){

            $this->load->view('usuario/registroActivado');
        }

    }
	
}
