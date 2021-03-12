<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Servicio_Model
 *
 * @author SigueMED
 */
class Servicio_Process_Model extends CI_Model {
    
    private $table;

    public function __construct() {
        parent::__construct();
        $this->table = "servicio_process";
        $this->load->database();
    }

    public function InsertarInformacionTime($IdServicio,$ConteoFecha,$ConteoHora,$tiempo)
    {
        $data = array('ConteoFecha' => $ConteoFecha,'ConteoHora' => $ConteoHora,
        'IdServicio' => $IdServicio,'tiempo' => $tiempo);
        

        $this->db->insert($this->table,$data);

        $insertId = $this->db->insert_id();
        return $insertId;
    }
    //put your code here
}
