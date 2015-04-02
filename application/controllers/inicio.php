<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class inicio extends CI_Controller {

    public function __construct(){

        parent::__construct();

    }

	public function index($mensaje = null)
	{
        $dato['mensaje']= $mensaje;
		$this->load->view('logear/Inicio', $dato);
	}

    public function proceso(){

        $this->load->model('inicio_model');
        $resultado= $this->inicio_model->validate();

        if(!$resultado){

            $mensaje = '<font color=red>Correo o contrasena incorrecto</font><br />';
            $this->index($mensaje);
        }else{
            redirect('logear/Inicio');
        }

    }

}
