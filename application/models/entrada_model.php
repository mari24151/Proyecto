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

    //ver solo un correo
    public function verUnCorreo(){

        $this->db->order_by('id');

        $ver= $this->db->get('emails');
        return $ver->result();
    }

    //editar correos
    public function editarCorreo($id){

        $this->db->where('id',$id);

        $mostrar = $this->db->get('emails');
        return $mostrar->row();
    }

    public function verDos(){
        $query = $this->db->get('info_video');
        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $fila)
            {
                $data[] = $fila;
            }
            return $data;
        }
        else
        {
            return False;
        }
    }

}