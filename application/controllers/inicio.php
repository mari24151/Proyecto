<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class inicio extends CI_Controller {

    public function __construct(){

        parent::__construct();

        $this->load->model('inicio_model');
        $this->load->helper('from');
        $this->load->library(array('session','form_validation'));

    }

	public function index()
	{
      $this->verificar();
	}

    public function verificar()
    {

        $email= $_POST['email'];
        $contrasena= $_POST['contrasena'];
        $this->load->model('usuario_model', 'user');
        $this->user->authenticar($email, $contrasena);
    }

}
