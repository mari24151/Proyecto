<?php

class inicio_model extends CI_Model{

    function __construct(){

        parent:: construct();

    }

    public function validar(){

        $email =$this->security->xss_clean($this->input->post('email'));
        $contrasena= $this->security->xss_clean($this->input->post('contrasena'));

        $this->db->where('email',$email);
        $this->db->where('contrasena',$contrasena);

        // ejecutamos consulta en la base de datos
        $query = $this->db->get('usuario');
        // vemos si hay resultados
        if($query->num_rows == 1)
        {
            // si hay usuario crea datos de sesion
            $row = $query->row();
            $datos = array(
                'email' => $row->email,
                'contrasena' => $row->contrasena,
                'validated' => true
            );
            $this->session->set_userdata($datos);
            return true;
        }
        return false;
    }

}