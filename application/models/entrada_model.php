<?php

class entrada_model extends CI_Model
{


    public function __construct()
    {

        parent:: __construct();
        //cargamos la base de datos
        $this->load->database();
    }

    //mostrar correo
    public function obtenerCorreos()
    {

        $ver = $this->db->get('emails');
        return $ver->result();
    }

    //eliminar correos
    public function eliminar($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('emails');
    }
}