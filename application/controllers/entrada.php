<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class entrada extends CI_Controller
{

     public function index()
     {
         $correos["verCorreo"]=$this->entrada_model->verCorreo();
         $this->load->view('usuario/entrada');

     }


}

