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
        $this->load->database();
    }
    
    public function ConsultarEquiposOrdenPaquete($IdOrden, $IdPaquete)
    {
        $this->db->select($this->table.'.*, equipo.Descripcion,equipo.ClaveId');
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

    public function ConsultarOrden($id)
    {
        $this->db->select('*');
        $this->db->from('equipo');
        $this->db->join($this->table, $this->table.'.IdEquipo = equipo.IdEquipo','INNER');        $this->db->where($this->table.'.IdOrden',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function InsertarOrdenEquipo($IdEquipo,$IdOrden)
    {
        $data = array('IdEquipo' => $IdEquipo,'IdOrden' => $IdOrden);
        $this->db->insert($this->table,$data);  
        $insertId = $this->db->insert_id();
        return $insertId;  
    }
    //put your code here
}
