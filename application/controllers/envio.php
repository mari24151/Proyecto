<?php

//envia correo de registro
public function correo()
{
    $config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'smtp.mandrillapp.com',
        'smtp_port' => 587,//el puerto que le dice mandrill
        'smtp_user' => 'ale.24151@gmail.com',
        'smtp_pass' => '12345678910alexa'
    );

    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('correo a enviar', 'Su nombre');
    $this->email->to('correo'); /*para quién es*/
    $this->email->subject('Asunto de correo');
    $this->email->message('Su mensaje'); /*the message*/

    if ($this->email->send()) {
        echo('Email enviado correctamente');
    } else {
        echo('No se a enviado el email');
    }
}
