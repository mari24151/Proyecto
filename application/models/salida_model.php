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

//editar correos
    public function editarCorreo($id)
    {

        $this->load->where('id', $id);

        $traer = $this->db->get('emails');

        return $traer->row();
    }

    //actualizamos los emails por id
    public function actualizarCorreos($id, $emailTo, $asunto, $texto)
    {
        $this->db->where('id', $id);
        $this->db->update('emails', array(
            'emailTo' => $emailTo,
            'asunto' => $asunto,
            'texto' => $texto
        ));
    }

    //eliminamos un email por id
    public function eliminarCorreo($id)
    {
        $this->db->delete('emails', array('id' => $id));
    }

    //Obtenemos los emails por id
    public function verCorreo($id)
    {
        $ver = $this->db->get_where('emails', array('id' => $id));
        if ($ver->num_rows() == 1)
            return $ver->row_array();
        else
            return false;
    }
}