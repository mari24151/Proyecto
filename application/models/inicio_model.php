<?php

class inicio_model extends CI_Model{

    function __construct(){

        parent::__construct();

    }

    function authenticar($email, $contrasena)
    {
        $this->db->select('id');
        $this->db->where('email', $email);
        $this->db->where('contrasena', $contrasena);
        $query=$this->db->get('usuario');
        if($query->num_rows() == 1)
        {
            redirect('usuario/registroCompleto');
        }else{
            redirect('');
        }
    }


}