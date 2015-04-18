<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{


    public function index()
    {

        $this->load->helper('html');
        $this->load->helper('form');

        $data['mensaje'] = "";


        $this->load->view('usuario/login',$data);


    }

    //Se encarga iniciar sesion
    public function verificar()
    {
        $this->load->helper('url');

        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        $this->load->model('usuario_model', 'modelo');
        $validar = $this->modelo->autenticar($email, $contrasena);

        if ($validar) {

            redirect("usuario/registroCompleto");

        } else {

            $this->load->helper('html');
            $this->load->helper('form');

            $data['mensaje'] = "Correo o contraseña invalidos";

            $this->load->view('usuario/login',$data);
        }
    }

}
