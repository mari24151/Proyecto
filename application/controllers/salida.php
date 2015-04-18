<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class entrada extends CI_Controller
{

    public function __construct(){

        parent:: __construct();
        $this->load->model('salida_model','modelo');
        $this->load->library('form_validation');

    }

    //funcion index
    public function index()
    {
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->model('salida_model','modelo');


    }

    //ver lista
    public function verSalidas(){
        $resultado= $this->modelo->obtenerCorreos();

        $datos['correos']= $resultado;
        $this->load->view('usuario/salida',$datos);
    }

    //editar funcion
    public function editar($id=0)
    {
        //verificamos si existe el id
        $respuesta = $this->modelo->verCorreo($id);
        //si nos retorna FALSE le mostramos la pag 404
        if($respuesta==false)
            redirect('usuario/salida');
        else
        {
            //Si existe el post para editar
            if($this->input->post('post') && $this->input->post('post')==1)
            {
                $this->form_validation->set_rules('emailTo', 'Correo', 'required');
                $this->form_validation->set_rules('asunto', 'Asunto', 'required');
                $this->form_validation->set_rules('texto', 'Texto', 'required');

                $this->form_validation->set_message('required','El campo %s es requerido');

               if ($this->form_validation->run() == TRUE)
                {
                    $emailTo = $this->input->post('emailTo');
                    $asunto = $this->input->post('asunto');
                    $texto = $this->input->post('texto');
                    $this->modelo->actualizarCorreo($emailTo,$asunto,$texto);
                    //redireccionamos al controlador
                    redirect('salida');
                }
            }
            //devolvemos los datos de la tabla
            $datos['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('usuario/salida',$datos);
        }
    }

//eliminar correos
    public function eliminar($id=0)
    {
        //verificamos si existe el id
        $respuesta = $this->modelo->verCorreo($id);
        //si nos retorna FALSE mostramos la pag 404.
        if($respuesta==false)
            redirect('usuario/salida');
        else
        {
            //si existe eliminamos el usuario
            $this->modelo->eliminarCorreo($id);
            //redireccionamos al controlador CRUD
            redirect('usuario/salida');
        }
    }


}

