<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class entrada extends CI_Controller
{

     public function __construct(){

         parent:: __construct();
         $this->load->model('entrada_model');
     }
     public function index()
     {
         $dato["verCorreo"]=$this->entrada_model->verCorreo();
         $this->load->view('usuario/entrada');

     }

     public function eliminarCorreo(){

         $id = $this->uri->segment(3);
        $delete = $this->entrada_model->eliminar($id);
     }

}

