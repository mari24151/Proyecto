<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class usuario extends CI_Controller
{

    public function registro()
    {
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->view('usuario/registro');
    }
     //funcion de agregar
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
            // Carga libreria de encriptamiento
            $this->load->library('encrypt');


            $nombre = $this->input->post('nombre');
            $email = $this->input->post('email');
            $contrasena = $this->input->post('contrasena');
            // encrypta la contraseña
            $contrasena_encrypt = $this->encrypt->sha1($contrasena);

            $this->modelo->nombre = $nombre;
            $this->modelo->email = $email;
            //guarda la contraseña encryptada
            $this->modelo->contrasena = $contrasena_encrypt;

            $insertar = $this->modelo->insertar_usuario($this->modelo);

            if ($insertar) {
               // $this->envioCorreo($nombre, $email);
               $this->registroCompleto();
            } else {

                $this->registro();

            }
        }
    }



    //funcion de envio de correos
    public function envioCorreo()
    {

        $to = "bryan@mundoteconline.com";
        $subject = "My subject";
        $txt = "Hello world!";
        $headers = "From: webmaster@example.com" . "\r\n" .
            "CC: somebodyelse@example.com";

        mail($to,$subject,$txt,$headers);


        //configuracion del email
//
//        $this->load->library('email');
//
//        $emailConfig = array(
//            'protocol' => 'smtp',
//            'smtp_host' => 'ssl://smtp.gmail.com',
//            'smtp_port' => 465,
//            'smtp_user' => 'ale.24151@gmail.com',
//            'smtp_pass' => 'amrm24151',
//            'mailtype'  => 'html',
//            'charset'   => 'utf-8',
//            'newline'   =>  '\r\n'
//        );
//
//       $this->load->initialize($emailConfig);
//
//        $this->email->set_newline("rn");
//
//        //archivos de configuracion
//        $this->email->from('ale.24151@gmail.com', 'Alexa Rodríguez Méndez');
//        $this->email->to('ale.24151@gmail.com');
//        $this->email->subject('Cuenta activa');
//        $this->email->message('Tu cuenta ha sido activa, ya puedes iniciar seción con exito');
//
//        if($this->email->send())
//        {
//            echo 'Your email was sent.';
//        }else
//        {
//            show_error($this->email->print_debugger());
//        }
    }

    public function registroCompleto()
    {
        $this->load->helper('html');
        $this->load->view('usuario/registroCompleto');

    }






}

