<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario_Model
 *
 * @author SigueMed
 */
class Perfil_Model extends CI_Model {
    private $table;
    
    public function __construct()
    {
        parent::__construct();
            $this->load->database();
            $this->table = "perfil";
    }
    
    public function ConsultarTipoUsuario()
    {
        $this->db->select('*');
        $this->db->from($this->table);        
        $query = $this->db->get();
        
        return $query->result_array();
    } 
}
