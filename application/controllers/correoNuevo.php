<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class correoNuevo extends CI_Controller
{
     function __construct(){

         parent:: __construct();
         $this->load->model('correo_model');
 }

     public function index()
     {
         $this->load->helper('html');
         $this->load->helper('form');
         $this->load->view('usuario/correo');
     }

    public function insertar()
    {
        //establece reglas de validacion
        $this->form_validation->set_rules('email', 'Correo', 'required|is_unique[usuario.email]');
        $this->form_validation->set_rules('asunto','Asunto','required');
        $this->from_validation->set_rules('texto','Texto','required');

        // Estable los mensajes de error
        $this->form_validation->set_message('required', 'El campo %s es requerido');
        $this->form_validation->set_message('is_unique', 'Este %s ya ha sido ingresado ');

        // Comprueba el formulario
        if ($this->form_validation->run() == FALSE) {

            // Devuelve errores
            $this->load->helper('html');
            $this->load->helper('form');
            $this->load->view('usuario/correo');
        } else {
            //proceso de datos para ingresarlos
            $this->load->model('correo_model','model');

            $email= $this->input->post('email');
            $asunto = $this->input->post('asunto');
            $texto = $this->input->post('texto');

            $this->modelo->email=$email;
            $this->modelo->asunto=$asunto;
            $this->modelo->texto=$texto;

            $insertar = $this->modelo->insertar_correo($this->modelo);

            if ($insertar) {

                $this->registroCompleto();
            } else {

                $this->registro();

            }
        }
    }




}

