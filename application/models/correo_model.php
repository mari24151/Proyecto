<?php

class correo_model extends CI_Model{

    public $id;
    public $email;
    public $asunto;
    public $texto;

    //constructor del modelo
    public function __construct(){

        //ejecutar el constructor de CI_Model
        parent::__construct();
        $this->load->database();

    }
    //funcion de insertar
    function insertar_correo($datos){

        $this->email = $datos->email;
        $this->asunto = $datos->asunto;
        $this->texto = $datos->texto;

        return $this->db->insert('emails',$this);

    }


}