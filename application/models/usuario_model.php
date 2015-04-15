<?php

/**
 * Created by PhpStorm.
 * User: Alexa Rodriguez
 * Date: 29/03/2015
 * Time: 11:08 AM
 */
class Usuario_model extends CI_Model
{

    public $id;
    public $nombre;
    public $email;
    public $contrasena;
    public $cuenta_activada = false;


    /*constructor del modelo*/
    public function _construct()
    {
        //ejecuta el constructor de CI_Model
        parent::_construct();
        $this->load->database();
    }

    function insertar_usuario($datos)
    {

        $this->nombre = $datos->nombre;
        $this->email = $datos->email;
        $this->contrasena = $datos->contrasena;

        return $this->db->insert('usuario', $this);

    }

    //validar usuario
    function autenticar($email, $contrasena)
    {
        // Carga la libreria de encriptamiento
        $this->load->library('encrypt');

        // Encripta la contrasena para comparar
        $encrypted_string = $this->encrypt->sha1($contrasena);

        // Busca si existe email y contrasena
        $this->db->select('id,email,contrasena');
        $this->db->from('usuario');
        $this->db->where('email', $email);
        $this->db->where('contrasena', $encrypted_string);
        $query = $this->db->get();
        $this->db->limit(1);
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

}