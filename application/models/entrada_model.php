<?php

class entrada_model extends CI_Model{


    public function __construct(){

        parent:: __construct();
        //cargamos la base de datos
        $this->load->database();
    }

    public function verCorreo(){
        //hacemos consulta a la base de datos
       // $ver = $this->db->get('emails');

        //devolvemos el resultado de la consulta
        //return $ver->result();

        $ver = $this->db->get('emails');
        if($ver->num_rows()>0)
        {
            foreach ($ver->result() as $fila)
            {
                $dato[] = $fila;
            }
            return $dato;
        }
    }

    public function eliminar($id){

        $this->db->where('id',$id);
        return $this->db->delete('emails');
    }

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
            $this->db->where('emailTo',$id);
        }
        $query = $this->db->get();

        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }
}