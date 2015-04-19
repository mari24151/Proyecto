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

    public function enviarCorreo($email,$nombre){

        $this->load->library('email');

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);


        $this->email->from('ale.24151@gmail.com', 'Alexa');
        $this->email->to($email);


        $this->email->subject('Correo de Prueba');
        $this->email->message('Probando la clase email');

        $this->email->send();

        echo $this->email->print_debugger();
    }

}
