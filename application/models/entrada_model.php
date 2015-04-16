<?php

class entrada_model extends CI_Model{


    public function __construct(){

        parent:: __construct();
        //cargamos la base de datos
        $this->load->database();
    }

    //mostrar correo
    public function obtenerCorreos(){

        $ver= $this->db->get('emails');
        return $ver->result();
    }

    //eliminar correos
    public function eliminar($id){

        $this->db->where('id',$id);
        return $this->db->delete('emails');
    }

    //extraer correos de la base de datos
    public function extraerCorreo($id = false)
    {
        if($id === false)
        {
            $this->db->select('id','emailFrom','emailTo','asunto','texto','pendiente');
            $this->db->from('emails');
            //$this->db->join('emailTo', 'emailTo.id = emails.id');
        }else{
            $this->db->select('id','emailFrom','emailTo','asunto','texto','pendiente');
            $this->db->from('emails');
            //$this->db->join('emailTo', 'emailTo.id = emails.id');
            $this->db->where('id',$id);
        }
        $query = $this->db->get();

        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }
}