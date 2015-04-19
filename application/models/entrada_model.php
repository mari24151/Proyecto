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

    //obtenemos la fila completa del mensaje a editar
    //vemos que como solo queremos una fila utilizamos
    //la función row que sólo nos devuelve una fila,
    //así la consulta será más rápida
    function obtener($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('emails');
        $fila = $query->row();
        return $fila;
    }
}