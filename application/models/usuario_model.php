<?php
/**
 * Created by PhpStorm.
 * User: Alexa Rodriguez
 * Date: 29/03/2015
 * Time: 11:08 AM
 */

class Usuario_model extends CI_Model{

    public $id;
    public $nombre;
    public $email;
    public $contrasena;
    public $cuenta_activada = false;


    /*constructor del modelo*/
public function _construct(){
    //ejecuta el constructor de CI_Model
    parent::_construct();
    $this->load->database();
}

    function insertar_usuario($datos){

        $this->nombre = $datos->nombre;
        $this->email = $datos->email;
        $this->contrasena = $datos->contrasena;

      return $this->db->insert('usuario',$this);

    }




}