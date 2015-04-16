<?php

class correo_model extends CI_Model{

    public $id;
    public $emailFrom;
    public $emailTo;
    public $asunto;
    public $texto;
    public $pendiente = false;

    //constructor del modelo
    public function __construct(){

        //ejecutar el constructor de CI_Model
        parent::__construct();
        $this->load->database();

    }
    //funcion de insertar
    function insertar_correo($datos){

        $this->emailFrom = $datos->emailFrom;
        $this->emailTo = $datos->emailTo;
        $this->asunto = $datos->asunto;
        $this->texto = $datos->texto;

        return $this->db->insert('emails',$this);

    }


}