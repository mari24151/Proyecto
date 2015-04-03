<?php

class inicio_model extends CI_Model{

    function __construct(){

        parent::__construct();

    }

    public function validar($email,$contrasena){

        $this->db->where('email', $email);
        $this->db->where('contrasena', $contrasena);

        $query= $this->db->get('usuario');

        if($query->num_row == 0):
            //usuario no existe
            return 0;

            else:
                //usuario correcto
                return 1;

            endif;

    }


}