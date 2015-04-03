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
      $this->proceso();
	}

    public function proceso()
    {

        if ($this->session->userdata('id') == false):

            $this->form_validation->set_rules('email', 'email', 'required|trim|xss_clean');
            $this->form_validation->set_rules('contrasena', 'contrasena', 'required|trim|xss_clean');

            if ($this->form_validation->run() == false):
                $this->load->view('logear/Inicio');

            else:

                $email = $this->input->post('email');
                $contrasena = $this->input->post('contrasena');

                $ingresar = $this->inicio_model->validar($email, $contrasena);

                switch ($ingresar):
                    case 0:
                        $this->load->view(' logear/Inicio');
                        break;
                    case 1:
                        $this->load->view('');
                        break;
                endswitch;
            endif;
        endif;
    }
}
