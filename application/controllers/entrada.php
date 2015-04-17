<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class entrada extends CI_Controller
{

     public function __construct(){

         parent:: __construct();
         $this->load->model('entrada_model','modelo');

     }

     //funcion index
     public function index()
     {
         $this->load->helper('html');
         $this->load->helper('form');


     }

     public function ver(){
         $resultado= $this->modelo->obtenerCorreos();

         $datos['correos']= $resultado;
         $this->load->view('usuario/entrada',$datos);
     }
//eliminar correos
     public function eliminarCorreo(){

         $id = $this->uri->segment(1);
         $delete = $this->model->eliminar($id);
            redirect('usuario/entrada',$delete);
     }


//     public function send_mail($email,$nombre) {
//         $mail = new PHPMailer();
//         $mail->IsSMTP(); // establecemos que utilizaremos SMTP
//         $mail->SMTPAuth   = true; // habilitamos la autenticación SMTP
//         $mail->SMTPSecure = "ssl";  // establecemos el prefijo del protocolo seguro de comunicación con el servidor
//         $mail->Host       = "smtp.gmail.com";      // establecemos GMail como nuestro servidor SMTP
//         $mail->Port       = 465;                   // establecemos el puerto SMTP en el servidor de GMail
//         $mail->Username   = "ale.24151@gmail.com";  // la cuenta de correo GMail
//         $mail->Password   = "amrm24151";            // password de la cuenta GMail
//         $mail->SetFrom('ale.24151@gmail.com','Alexa Rodríguez');  //Quien envía el correo
//         $mail->AddReplyTo($email,$nombre);  //A quien debe ir dirigida la respuesta
//         $mail->Subject    = "Asunto del correo";  //Asunto del mensaje
//         $mail->Body      = "Cuerpo en HTML<br />";
//         $mail->AltBody    = "Cuerpo en texto plano";
//         $destino = "destinatario@otrodominio.com";
//         $mail->AddAddress($destino, "Juan Palotes");
//
//         $mail->AddAttachment("images/phpmailer.gif");      // añadimos archivos adjuntos si es necesario
//         $mail->AddAttachment("images/phpmailer_mini.gif"); // tantos como queramos
//
//         if(!$mail->Send()) {
//             $data["message"] = "Error en el envío: " . $mail->ErrorInfo;
//         } else {
//             $data["message"] = "¡Mensaje enviado correctamente!";
//         }
//         $this->load->view('sent_mail',$data);
//     }

}

