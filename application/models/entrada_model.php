<?php

class entrada_model extends CI_Model{


    public function __construct(){

        parent:: __construct();
        //cargamos la base de datos
        $this->load->database();
    }

    public function verCorreo(){
        //hacemos consulta a la base de datos
        $ver = $this->db->query("SELECT * FROM emails;");

        //devolvemos el resultado de la consulta
        return $ver->result();
    }
}