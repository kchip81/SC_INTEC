<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipoOrden_Model
 *
 * @author SigueMED
 */
class EquipoOrden_Model extends CI_Model{
    
    private $table;
    public function __construct() {
        parent::__construct();
        $this->table = "equipo_orden";
    }
    
    public function ConsultarEquiposOrdenPaquete($IdOrden, $IdPaquete)
    {
        $this->db->select($this->table.'.*, equipo.Descripcion');
        $this->db->from ($this->table);
        $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
        $this->db->where('IdOrden',$IdOrden);
        $this->db->where('IdPaqueteEnvio',$IdPaquete);
        
        $query = $this->db->get();
        
        return $query->result_array();
        
    }
    
    public function AsignarPaqueteEquipo($IdPaquete,$IdEquipoOrden)
    {
        $this->db->set('IdPaqueteEnvio',$IdPaquete);
        $this->db->where('IdEquipoOrden',$IdEquipoOrden);
        return $this->db->update($this->table);
        
    }
    //put your code here
}
