<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class correoNuevo extends CI_Controller
{
     //constructor
     function __construct(){

         parent:: __construct();
         $this->load->model('correo_model');
 }
    // funcion index
     public function index()
     {
         //librerias
         $this->load->helper('html');
         $this->load->helper('form');
         //llamar la vista
         $this->load->view('usuario/correo');
     }

     //insertar un nuevo correo
    public function insertar()
    {
        //libreria de validacion
        $this->load->library('form_validation');



        //establece reglas de validacion
        $this->form_validation->set_rules('emailFrom', 'CorreoDe', 'required');
        $this->form_validation->set_rules('emailTo', 'Email', 'required');
        $this->form_validation->set_rules('asunto','Asunto','required');
        $this->form_validation->set_rules('texto','Texto','required');



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
            $this->load->model('correo_model','modelo');
            //extraen el valor
            $emailFrom= $this->input->post('emailFrom');
            $emailTo= $this->input->post('emailTo');
            $asunto = $this->input->post('asunto');
            $texto = $this->input->post('texto');


            $this->modelo->emailFrom=$emailFrom;
            $this->modelo->emailTo=$emailTo;
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

     public function registroCompleto()
     {
         $this->load->helper('html');
         $this->load->view('usuario/registroCompleto');

     }





}

