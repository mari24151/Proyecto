<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class usuario extends CI_Controller
{

    public function registro()
    {
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->library('email');
        $this->load->view('usuario/registro');
    }

    public function insertar()
    {
        // Carga la libreria de validacion
        $this->load->library('form_validation');

        // Establece reglas de validacion
        $this->form_validation->set_rules('email', 'Correo', 'required|is_unique[usuario.email]');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('contrasena', 'Contraseña', 'required');


        // Estable los mensajes de error
        $this->form_validation->set_message('required', 'El campo %s es requerido');
        $this->form_validation->set_message('is_unique', 'Este %s ya ha sido ingresado ');

        // Comprueba el formulario
        if ($this->form_validation->run() == FALSE) {

            // Devuelve errores
            $this->load->helper('html');
            $this->load->helper('form');
            $this->load->view('usuario/registro');
        } else {

            // Procesa los datos para ingresarlos
            $this->load->model('usuario_model', 'modelo');


            $nombre = $this->input->post('nombre');
            $email = $this->input->post('email');
            $contrasena = $this->input->post('contrasena');

            $this->modelo->nombre = $nombre;
            $this->modelo->email = $email;
            $this->modelo->contrasena = $contrasena;

            $insertar = $this->modelo->insertar_usuario($this->modelo);

            if ($insertar) {

                envioCorreo($nombre, $email);
                $this->load->view('usuario/registroCompleto');
            } else {

                registro();

            }
        }
    }

    public function login()
    {
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->view('usuario/login');

    }

    public function iniciarSesion()
    {
        echo 1;
    }


    public function envioCorreo($nombre, $correo)
    {
        //configuracion del email
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);

        //archivos de configuracion
        $this->email->from('ale.24151@gmail.com', 'Alexa Rodríguez Méndez');
        $this->email->to($correo,$nombre);


        $this->email->subject('Cuenta activa');
        $this->email->message('Tu cuenta ha sido activa, ya puedes iniciar seción con exito');

        $this->email->send();

        echo $this->email->print_debugger();
    }

    public function registroCompleto()
    {
        $this->load->helper('html');
        $this->load->view('usuario/registroCompleto');


    }

}
